<?php use App\Models\User; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="{{ asset('js/privileges.js') }}"></script>
</head>
<body class="bg-zinc-900">


    <div class="justify-center flex">
        <div class="w-1/2 h-1/2 p-10 ">
        
            <div class="items-center justify-center">
                <div class="bg-neutral-950 p-5 rounded-lg text-gray-50">
                <div class="flex justify-center">
                            <div class="justify-center">
                                <h1 class="text-white text-center text-2xl">Rendszergazdakezelés</h1>
                                <div class="flex-col justify-center">
                                    <form id="form" action="/modifyprivileges" method="post" class="inline">
                                        @csrf
                                        <input id="remove" name="remove" type="hidden" value=""/>
                                        <input class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="username" type="text" placeholder="Felhasználó"/>
                                    </form>
                                    <button onclick="publish(false);" class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-indigo-700 to-gray-400 hover:from-indigo-800 hover:to-gray-600 font-semibold">Hozzáad</button>
                                    <button onclick="publish(true);" class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-indigo-700 to-gray-400 hover:from-indigo-800 hover:to-gray-600 font-semibold">Töröl</button>
                                </div>
                                <div class="flex-col justify-center">
                                    @foreach ($errors->all() as $error)
                                        <p class="w-full text-red-500">{{ $error }}</p>
                                    @endforeach
                                </div>
                                <hr/>
                                <div class="flex-col justify-center">
                                    @foreach (User::all(); as $user)
                                        @if ($user->role_id > 0)
                                            <p class="w-full text-white">{{ $user->username }} ({{ ($user->role_id == 2 ? "owner" : "admin") }})</p>
                                        @else
                                            <p class="w-full text-white">{{ $user->username }}</p>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
               

                        
                        
                        <div class="flex justify-center p-5 m-5">
                            <img class="w-1/3 h-1/3 rounded-lg" >
                        </div>  
                        
                </div>
            </div>
        </div>

       

    @yield('content')
</body>

</html>