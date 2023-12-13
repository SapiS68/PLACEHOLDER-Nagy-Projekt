<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="auth_token" content="<?= auth()->user()->api_token ?>">
  <script src="{{ asset('js/game.js') }}"></script>
  @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900" onload="init();">

    <div class="flex justify-center">
        <div class="w-full h-1/2 p-10 ">
        
            <div class="items-center justify-center">
                <div class="bg-neutral-950 p-3 rounded-lg text-gray-50">
                        <h1 class="flex justify-center	text-transform: uppercase text-bold font-bold mb-1">Találd ki a játék címét a kép alapján.</h1>
                
                        <div class="flex justify-center p-5 m-5">
                            <img class="w-full h-full rounded-lg" id="clue_image"> 
                            <!-- src="https://i.imgur.com/73kXBCz.jpeg"-->
                        </div> 
                        <div class="flex justify-center">  
                            <button class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-indigo-50 to-gray-50 hover:from-indigo-50 hover:to-gray-50 font-semibold" onclick="prevpic()">Előző</button>
                            <button class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-indigo-50 to-gray-50 hover:from-indigo-50 hover:to-gray-50 font-semibold" onclick="nextpic()">Következő</button>

                        </div> 
                        <div class="flex justify-center"> 


                        </div> 
                </div>
            </div>
        </div>

        <div class="w-full h-1/2 p-10 ">
        
            <div class="items-center justify-center">
                <div class="bg-neutral-950 p-3 rounded-lg text-gray-50">
                          <div class="flex justify-center"> 
                            <p class="flex justify-center">A kép egy játékból származik. A segítségével írd be az ötletedet.</p>

                        </div>     
                                        <!--TIMER és próbák -->
                        <div class="flex justify-center"> 
                            <p class="p-1 font-extrabold text-slate-50 text-4xl flex justify-center" id="time_label">00:00</p>
                            <p class="p-1 font-extrabold text-slate-50 text-4xl flex justify-center"> telt el</p>
                        </div>  
                        <div class="flex justify-center"> 
                            <p class="p-1 font-extrabold text-slate-50 text-2xl flex justify-center" id="attempts_left">0</p>
                            <p class="p-1 font-extrabold text-slate-50 text-2xl flex justify-center"> próbálkozásod maradt</p>
                        </div> 

                        <div class="flex justify-center"> 
                            <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="" type="text" placeholder="Ötleted helye." id="attempt_input"/> 
                            <button class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-green-50 to-gray-50 hover:from-green-50 hover:to-gray-50 font-semibold" onclick="send()">Beküldés</button>

                        </div> 
                        <div class="justify-center" id="attempts_made"> 
                            <!-- <p class="flex justify-center text-xl text-red-500">Red Dead Redemption 1 </p>
                            <p class="flex justify-center text-xl text-red-500">Far Crry </p>
                            <p class="flex justify-center text-xl text-green-600">Euro Truck 2 </p> -->
                        </div> 
                </div>
            </div>
        </div>


    </div>

    


    @yield('content')
</body>

</html>