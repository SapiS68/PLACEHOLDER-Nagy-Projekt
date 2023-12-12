<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="auth_token" content="<?= auth()->user()->api_token ?>">
  <script src="{{ asset('js/add_questions.js') }}"></script>
  @vite('resources/css/app.css')

</head>
<body class="bg-zinc-900" onload="init();">


    <div class="flex justify-center">
        

        <div class="w-1/3 h-1/2 p-10 ">
            <div>
                <div class=" bg-neutral-950 p-3 rounded-lg text-gray-50">
                    <h1 class="flex justify-center text-transform: uppercase text-bold font-bold mb-1">kérdőív hozzáadása:</h1>

                    <form id="question_form" class="" action="/questionmodify" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p class="flex justify-center text-sm text-red-50">Játék neve, dátum </p>
                        <input id="name_input" class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="name"  placeholder="Játék neve" />                 

                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="date" type="date"/>  

                        <p class="flex justify-center text-sm text-red-50">1. kép </p>
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="clue1" type="file" /> 
                        <p class="flex justify-center text-sm text-red-50">2. kép </p>
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="clue2" type="file"  /> 
                        <p class="flex justify-center text-sm text-red-50">3. kép </p>
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="clue3" type="file"  /> 
                        <p class="flex justify-center text-sm text-red-50">4. kép </p>
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="clue4" type="file" /> 
                        <p class="flex justify-center text-sm text-red-50">5. kép </p>
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="clue5" type="file"  /> 

                        
                        
                    </form>

                    <div class="flex justify-center">
                        <button onclick="confirm_replace();" class="flex justify-center text-slate-950 m-3 p-1 rounded bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 font-semibold">Hozzáadás</button>
                    </div>

                        
                    <div class="flex-col justify-center">
                        @foreach ($errors->all() as $error)
                            <p class="w-full text-red-500">{{ $error }}</p>
                        @endforeach
                    </div> 
                </div>
            </div>
        </div>



        <div class="w-1/3 h-1/2 p-10 ">
            <div>
                <div class=" bg-neutral-950 p-3 rounded-lg text-gray-50">
                    <h1 class="flex justify-center text-transform: uppercase text-bold font-bold mb-1">játék hozzáadása:</h1>

                    <form class="" action="/addgame" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="name"  placeholder="Játék neve" />                 


                        <p class="flex justify-center text-sm text-red-50">Borítókép </p>
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="cover" type="file" /> 

                        <div class="flex justify-center">
                            <button class="flex justify-center text-slate-950 m-3 p-1 rounded bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 font-semibold">Hozzáadás</button>
                        </div>

                        
                    <div class="flex-col justify-center">
                        @foreach ($errors->all() as $error)
                            <p class="w-full text-red-500">{{ $error }}</p>
                        @endforeach
                    </div> 
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    @yield('content')
</body>

</html>