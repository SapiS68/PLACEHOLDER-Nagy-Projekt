<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900">


    <div class="flex justify-center">
        <div class="w-flex h-1/2 p-10 ">
        
            <div class="items-center justify-center">
                <div class="bg-neutral-950 p-3 rounded-lg text-gray-50">

                                        
                        <div class="flex justify-center">
                            <img class="w-flex h-flex rounded-lg"src="https://i.imgur.com/anhQsuo_d.webp?maxwidth=520&shape=thumb&fidelity=high" >
                        </div>  
                        <p class="flex justify-center text-xl text-green-600">Euro Truck 2 </p>
                        
                </div>
            </div>
        </div>

        <div class="w-flex h-flex p-10 ">
        
            <div class="items-center justify-center">
                <div class="bg-neutral-950 p-2 rounded-lg text-gray-50">
                        <h1 class="flex justify-center	text-transform: uppercase text-bold font-bold mb-1">Statisztikád:</h1>

                        <div class="flex justify-center"> 
                            <p class="flex justify-center">Időd:</p>
                        </div>     
                                        <!--TIMER -->
                        <div class="flex justify-center"> 
                            <p class=" font-extrabold text-slate-50 text-xl flex justify-center">00:00</p>
                        </div>  
                        <div class="flex justify-center"> 
                            <p class="flex justify-center">Átlagos idő:</p>
                        </div>     
                                        <!--TIMER -->
                        <div class="flex justify-center"> 
                            <p class=" font-extrabold text-slate-50 text-xl flex justify-center">00:00</p>
                        </div>  



                        <div class="flex justify-center "> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">Próbálkozások statisztikája:</p>
                        </div> 
                        <div class="p-1 flex"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">1:</p>
                            <p class="w-1/3 rounded bg-gradient-to-r from-yellow-500 to-amber-600 flex justify-center font-bold text-black text-sm">1 </p>

                        </div>
                        <div class="p-1 flex "> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">2:</p>
                            <p class="w-1/2 rounded bg-gradient-to-r from-yellow-500 to-amber-600 flex justify-center font-bold text-black text-sm">2 </p>

                        </div>
                        <div class="p-1 flex "> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">3:</p>
                            <p class="w-1/4 rounded bg-gradient-to-r from-yellow-500 to-amber-600 flex justify-center font-bold text-black text-sm">2 </p>

                        </div>                        <div class="p-1 flex"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">4:</p>
                            <p class="w-1/5 rounded bg-gradient-to-r from-yellow-500 to-amber-600 flex justify-center font-bold text-black text-sm">2 </p>

                        </div>
                        <div class="p-1 flex "> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">5:</p>
                            <p class="w-1/4 rounded bg-gradient-to-r from-yellow-500 to-amber-600 flex justify-center font-bold text-black text-sm">2 </p>

                        </div>                        <div class="p-1 flex"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">x:</p>
                            <p class="w-1/5 rounded bg-gradient-to-r from-yellow-500 to-amber-600 flex justify-center font-bold text-black text-sm">2 </p>

                        </div>



                                        
                        <div class="flex justify-center">
                            <img class="w-1/5 h-1/5 rounded-lg"src="https://i.imgur.com/VDSFO47.png" >
                        </div>  

                        <div class="flex justify-center">  
                            <button class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-indigo-50 to-gray-50 hover:from-indigo-50 hover:to-gray-50 font-semibold">Előző</button>
                            <button class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-indigo-50 to-gray-50 hover:from-indigo-50 hover:to-gray-50 font-semibold">Következő</button>

                        </div> 
                        
                </div>
            </div>
        </div>


    </div>

    

    @yield('content')
</body>

</html>