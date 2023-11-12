<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function register(Request $request) {
        // Validálási szabályok és hibaüzenetek definiálása
        $rules = [
            'username' => ['required', 'min:4', 'max:16', 'regex:[a-zA-Z0-9_]+', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
        ];
        $messages = [
            'required' => 'A(z) \':attribute\' mező kötelezően kitöltendő.',
            Rule::unique('users', 'email') => 'Az adott e-mail címmel már regisztráltak.',
            'username.min' => 'A felhasználónévnek minimum :min karakter hosszúnak kell lennie.',
            'username.max' => 'A felhasználónév maximum :max karakter hosszú lehet.',
            'confirmed' => 'A két beírt jelszó nem egyezik.',
            Rule::unique('users', 'username') => 'Az adott felhasználónévvel már regisztráltak.',
            'email' => 'A beírt e-mail cím formátuma nem megfelelő.',
        ];

        // Validálási hibák kiiratása a regisztrációs ablaknál
        $validator = Validator::make($request, $rules, $messages);
        if($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }

        // Validált adatok lekérése, majd azok formázása, hogy az adatbázisba be tudjuk vinni
        $fields = $validator->valid();
        $fields['password'] = bcrypt($fields['password']);
        unset($fields['password_confirmation']);
        $fields['role_id'] = 0; // Alap felhasználó jogosultsági szint ID-ja

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
        $validator = Validator::make($request, $rules, $messages);
        if($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }

        // Bejelentkezés, ha az adott felhasználó létezik
        $fields = $validator->valid();
        if(auth()->attempt([
            'name' => $fields['username'],
            'password'=> $fields['password']
        ])) {
            $request->session()->regenerate();
            return redirect('/');
        }

        // Vissza a loginra, ha mégse
        return Redirect::back()->withErrors(['msg' => 'Helytelen felhasználónév vagy jelszó.'])->withInput();
    }

    public function logout(Request $request) {
        
    }

    public function modifyPass(Request $request) {
        
    }
}
