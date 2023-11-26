<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900">


    <div class="flex justify-center">
        <div class="w-full h-1/2 p-10 ">
        
            <div class="items-center justify-center">
                <div class="bg-neutral-950 p-3 rounded-lg text-gray-50">
                        <h1 class="flex justify-center	text-transform: uppercase text-bold font-bold mb-1">Találd ki a játék címét a kép alapján.</h1>
                        <div class="flex justify-center"> 
                            <p lass="flex justify-center">A kép egy játékból származik. A segítségével írd be az ötletedet.</p>
                        </div>                 
                        <div class="flex justify-center p-5 m-5">
                            <img class="w-1/3 h-1/3 rounded-lg"src="https://i.imgur.com/73kXBCz.jpeg" > 
                            
                        </div> 
                        <div class="flex justify-center"> 
                            <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="" type="text" placeholder="Ötleted helye." /> 
                            <button class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-indigo-700 to-gray-400 hover:from-indigo-800 hover:to-gray-600 font-semibold">Következő kép</button>

                        </div> 
                        <div class="flex justify-center"> 
                            <p class="flex justify-center text-red-500">Red Dead Redemption 1 </p>

                        </div> 
                </div>
            </div>
        </div>


    </div>

    @yield('content')
</body>

</html>