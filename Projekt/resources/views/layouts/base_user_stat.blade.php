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
                        <h1 class="flex justify-center	text-transform: uppercase text-bold font-bold mb-1"><?= auth()->user()->username ?></h1>

                        <h1 class="flex justify-center	text-transform: uppercase text-bold font-bold mb-1">Teljes statisztikád:</h1>

                        <div class="flex justify-center"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">Összes:</p>
                            <p class=" font-extrabold text-slate-50 text-2xl flex justify-center"><?= $stats['attempts_total'] ?></p>
                        </div>  
                        <div class="flex justify-center"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">Nyert:</p>
                            <p class=" font-extrabold text-slate-50 text-2xl flex justify-center"><?= $stats['attempts_won'] ?></p>
                        </div>  
                        <div class="flex justify-center "> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">Próbálkozások statisztikája:</p>
                        </div> 
                        <div class="p-1 flex"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">1:</p>
                            <p style="width: <?= $stats['attempts'][1] / max(1,$stats['attempts_total']) * 100 ?>%; min-width: 10px" class="rounded bg-gradient-to-r from-yellow-500 to-amber-600 flex justify-center font-bold text-black text-sm"><?= $stats['attempts'][1] ?></p>

                        </div>
                        <div class="p-1 flex "> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">2:</p>
                            <p style="width: <?= $stats['attempts'][2] / max(1,$stats['attempts_total']) * 100 ?>%; min-width: 10px"  class="rounded bg-gradient-to-r from-yellow-500 to-amber-600 flex justify-center font-bold text-black text-sm"><?= $stats['attempts'][2] ?></p>

                        </div>
                        <div class="p-1 flex "> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">3:</p>
                            <p style="width: <?= $stats['attempts'][3] / max(1,$stats['attempts_total']) * 100 ?>%; min-width: 10px"  class="rounded bg-gradient-to-r from-yellow-500 to-amber-600 flex justify-center font-bold text-black text-sm"><?= $stats['attempts'][3] ?></p>

                        </div>                        <div class="p-1 flex"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">4:</p>
                            <p style="width: <?= $stats['attempts'][4] / max(1,$stats['attempts_total']) * 100 ?>%; min-width: 10px"  class="rounded bg-gradient-to-r from-yellow-500 to-amber-600 flex justify-center font-bold text-black text-sm"><?= $stats['attempts'][4] ?></p>

                        </div>
                        <div class="p-1 flex "> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">5:</p>
                            <p style="width: <?= $stats['attempts'][5] / max(1,$stats['attempts_total']) * 100 ?>%; min-width: 10px"  class="rounded bg-gradient-to-r from-yellow-500 to-amber-600 flex justify-center font-bold text-black text-sm"><?= $stats['attempts'][5] ?></p>

                        </div>                        <div class="p-1 flex"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">x:</p>
                            <p style="width: <?= $stats['attempts'][0] / max(1,$stats['attempts_total']) * 100 ?>%; min-width: 10px"  class="rounded bg-gradient-to-r from-yellow-500 to-amber-600 flex justify-center font-bold text-black text-sm"><?= $stats['attempts'][0] ?></p>

                        </div>


                        <div class="flex justify-center"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">Átlagos próbálkozások száma: </p>
                            <p class=" font-extrabold text-slate-50 text-2xl flex justify-center"><?= $stats['attempts_avg'] ?></p>
                        </div>


                        <div class="flex justify-center"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">Átlagos idő:</p>
                            <p class=" font-extrabold text-slate-50 text-2xl flex justify-center"><?= $stats['time_avg'] ?></p>
                        </div>



                        
                </div>
            </div>
        </div>


    </div>

    

    @yield('content')
</body>

</html>