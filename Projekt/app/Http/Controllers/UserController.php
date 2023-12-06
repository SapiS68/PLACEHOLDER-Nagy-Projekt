<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserController extends Controller
{
    public function register(Request $request) {
        // Validálási szabályok és hibaüzenetek definiálása
        $rules = [
            'username' => ['required', 'min:4', 'max:16', 'regex:/^[a-zA-Z0-9_]+$/', 'unique:users,username'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
        ];
        $messages = [
            'required' => 'A(z) \':attribute\' mező kötelezően kitöltendő.',
            'username.min' => 'A felhasználónévnek minimum :min karakter hosszúnak kell lennie.',
            'username.max' => 'A felhasználónév maximum :max karakter hosszú lehet.',
            'confirmed' => 'A két beírt jelszó nem egyezik.',
            'email.email' => 'A beírt e-mail cím formátuma nem megfelelő.',
            'regex' => 'A felhasználónév csak az angol ábécé kis-és nagybetűit, számjegyeket, illetve alulvonást tartalmazhat.',
            'username' => 'Az adott felhasználónévvel már regisztráltak.',
            'email' => 'Az adott e-mail címmel már regisztráltak.',
        ];

        // Validálási hibák kiiratása a regisztrációs ablaknál
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()) {
            //throw new HttpResponseException(response()->json($validator->errors(), 422)); // Postman teszteléshez
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }

        // Validált adatok lekérése, majd azok formázása, hogy az adatbázisba be tudjuk vinni
        $fields = $validator->valid();
        $fields['password'] = bcrypt($fields['password']);
        unset($fields['password_confirmation']);
        $fields['role_id'] = 0; // Alap felhasználó jogosultsági szint ID-ja
        $fields['api_token'] = Str::random(60);

        User::create($fields);
        return Redirect::route("login")->withErrors(['msg' => 'Sikeres regisztráció!']);
    }

    public function login(Request $request) {
        // Validálási szabályok és hibaüzenetek definiálása
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];
        $messages = [
            'required' => 'A(z) \':attribute\' mező nem lehet üres.'
        ];

        // Validálási hibák kiírása, ha nem helyes
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()) {
            //throw new HttpResponseException(response()->json($validator->errors(), 422)); // Postman teszteléshez
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }

        // Bejelentkezés, ha az adott felhasználó létezik
        $fields = $validator->valid();
        if(auth()->attempt([
            'username' => $fields['username'],
            'password'=> $fields['password']
        ])) {
            $request->session()->regenerate();
            return redirect('/');
        }

        // Vissza a loginra, ha mégse
        //throw new HttpResponseException(response()->json(['msg' => 'Helytelen felhasználónév vagy jelszó.'], 422)); // Postman teszteléshez
        return Redirect::back()->withErrors(['msg' => 'Helytelen felhasználónév vagy jelszó.'])->withInput();
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect('/login');
    }

    public function modifyPass(Request $request) {
        if(!auth()->check()) {
            throw new HttpResponseException(response()->json(['msg' => 'Ehhez a művelethez először be kell jelentkezned.'], 422));
            return Redirect::back()->withErrors(['msg' => 'Ehhez a művelethez először be kell jelentkezned.']);
        }

        $rules = [
            'old_password' => ['required'],
            'new_password' => ['required', 'confirmed'],
            'new_password_confirmation' => ['required'],
        ];
        $messages = [
            'required' => 'A(z) \':attribute\' mező nem lehet üres.',
            'confirmed' => 'A két új jelszó mezőinek tartalma nem egyezik.'
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()) {
            //throw new HttpResponseException(response()->json($validator->errors(), 422)); // Postman teszteléshez
            return Redirect::back()->withErrors($validator->errors());
        }

        $msg_invalidold = ['msg' => 'A megadott régi jelszó nem egyezik az előzővel.'];
        $msg_nochange = ['msg' => 'Az új jelszó megegyezik az előzővel.'];
        if(!Hash::check($request->old_password, auth()->user()->password)){
            //throw new HttpResponseException(response()->json($msg_invalidold, 422)); // Postman teszteléshez
            return Redirect::back()->withErrors($msg_invalidold);
        }
        if (Hash::check($request->new_password, auth()->user()->password)) {
            //throw new HttpResponseException(response()->json($msg_nochange, 422)); // Postman teszteléshez
            return Redirect::back()->withErrors($msg_nochange);
        }

        auth()->user()->password = bcrypt($request->new_password);
        auth()->user()->save();
        return Redirect::route("index")->withErrors(['msg' => 'Sikeres jelszómódosítás!']);
    }

    public function makeAdmin($username)
    {
        $user = User::find($username);
        if($user == null) { return null; }
        if($user -> role_id == 0) { $user -> role_id = 1; $user -> save(); }
    }
}
