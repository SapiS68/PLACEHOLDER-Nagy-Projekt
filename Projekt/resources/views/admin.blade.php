@extends('layouts.base_game')
@section('content')
<div class="flex justify-center">
    <div class="justify-center">
        <h1 class="text-white text-center text-2xl">Rendszergazdakezelés</h1>
        <div class="flex-col justify-center">
            <input class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="user" type="text" placeholder="Felhasználó"/>
            <button class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-indigo-700 to-gray-400 hover:from-indigo-800 hover:to-gray-600 font-semibold">Hozzáad</button>
        </div>
        <hr/>
    </div>
</div>
@stop 