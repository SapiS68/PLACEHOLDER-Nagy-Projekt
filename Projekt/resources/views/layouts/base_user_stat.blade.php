<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900">



        <div class="flex justify-center  p-10 ">
        
            <div class="w-1/3">
                <div class=" bg-neutral-950 p-2 rounded-lg text-gray-50">
                        <h1 class="flex justify-center	text-transform: uppercase text-bold font-bold mb-1">username</h1>

                        <h1 class="flex justify-center	text-transform: uppercase text-bold font-bold mb-1">Teljes statisztikád:</h1>

                        <div class="flex justify-center"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">Összes:</p>
                            <p class=" font-extrabold text-slate-50 text-2xl flex justify-center">0</p>
                        </div>  
                        <div class="flex justify-center"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">Nyert:</p>
                            <p class=" font-extrabold text-slate-50 text-2xl flex justify-center">0</p>
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
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">Átlagos próbálkozások száma:</p>
                            <p class=" font-extrabold text-slate-50 text-2xl flex justify-center">0</p>
                        </div>


                        <div class="flex justify-center"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">Átlagos idő:</p>
                            <p class=" font-extrabold text-slate-50 text-2xl flex justify-center">0</p>
                        </div>



                        
                </div>
            </div>
        </div>


    </div>

    

    @yield('content')
</body>

</html>