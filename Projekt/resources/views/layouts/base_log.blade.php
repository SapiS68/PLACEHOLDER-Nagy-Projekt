<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900">


    <div class="flex justify-center">
        

        <div class="w-1/5 h-1/2 p-10 ">
            <div>
                <div class="bg-neutral-950 p-3 rounded-lg text-gray-50">
                    <h1 class="flex justify-center text-transform: uppercase text-bold font-bold mb-1">jelentkezz be!</h1>

                    <form class="space-y-6" action="/login" method="POST">
                        @csrf
                        <!--MEZŐK EGYEZTETÉSE!!!!!!!!! -->
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="email" type="text" placeholder="Email" /> 
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="password" type="password" placeholder="Jelszó" />                 
                        
                  
                        <div class="flex justify-center">
                            <button class="flex justify-center text-slate-950 m-3 p-1 rounded bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 font-semibold">Ok</button>
                        </div>
                        
                    </form>

                    <div class="flex justify-center">
                        <a href="/login"class=" text-slate-950 m-3 p-1 rounded bg-gradient-to-r from-red-600 to-amber-400 hover:from-red-700 hover:to-orange-500 font-semibold">Nincs fiókom</a>
                    </div>
                   <!-- <div class="flex-col justify-center">
                        @foreach ($errors->all() as $error)
                            <p class="w-full text-red-500">{{ $error }}</p>
                        @endforeach
                    </div> HIBA KEZELÉS IDE-->
                </div>
            </div>
        </div>
    </div>

    @yield('content')
</body>

</html>