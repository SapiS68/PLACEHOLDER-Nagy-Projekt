<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900">


    <div class="flex justify-center">
        

        <div class="w-1/3 h-1/2 p-10 ">
            <div>
                <div class=" bg-neutral-950 p-3 rounded-lg text-gray-50">
                    <h1 class="flex justify-center text-transform: uppercase text-bold font-bold mb-1">kérdőív hozzáadása:</h1>

                    <form class="" action="" method="POST">
                        @csrf
                        <p class="flex justify-center text-sm text-red-50">Játék neve, dátum </p>
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name=""  placeholder="Játék neve" />                 

                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="" type="date"/>  

                        <p class="flex justify-center text-sm text-red-50">1. kép </p>
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="" type="file" /> 
                        <p class="flex justify-center text-sm text-red-50">2. kép </p>
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="" type="file"  /> 
                        <p class="flex justify-center text-sm text-red-50">3. kép </p>
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="" type="file"  /> 
                        <p class="flex justify-center text-sm text-red-50">4. kép </p>
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="" type="file" /> 
                        <p class="flex justify-center text-sm text-red-50">5. kép </p>
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="" type="file"  /> 

                        <div class="flex justify-center">
                            <button class="flex justify-center text-slate-950 m-3 p-1 rounded bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 font-semibold">Hozzáadás</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    @yield('content')
</body>

</html>