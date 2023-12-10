<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="clue_images" content="<?= $stats['clue_images'] ?>">
  <script src="{{ asset('js/game_stats.js') }}"></script>
  @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900" onload="init();">


    <div class="flex justify-center">
        <div class="w-1/4 h-1/2 p-10 ">
        
            <div class="items-center justify-center">
                <div class="bg-neutral-950 p-3 rounded-lg text-gray-50">

                                        
                        <div class="flex justify-center">
                            <img class="w-flex h-flex rounded-lg"src="<?= $stats['game_cover'] ?>" >
                        </div>  
                        <p class="flex justify-center text-xl text-green-600"><?= $stats['game_name'] ?></p>
                        
                </div>
            </div>
        </div>

        <div class="w-1/4 h-flex p-10 ">
        
            <div class="items-center justify-center">
                <div class="bg-neutral-950 p-2 rounded-lg text-gray-50">
                        <h1 class="flex justify-center	text-transform: uppercase text-bold font-bold mb-1">Statisztikád:</h1>

                        <div class="flex justify-center"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">Időd:</p>
                            <p class=" font-extrabold text-slate-50 text-2xl flex justify-center"><?= $stats['user_time'] ?></p>
                        </div>  
                        <div class="flex justify-center"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">Átlagos idő:</p>
                            <p class=" font-extrabold text-slate-50 text-2xl flex justify-center"><?= $stats['average_time'] ?></p>
                        </div>  

                        <?php
                            $color_sel = 'from-emerald-50 to-emerald-200';
                            $color_def = 'from-yellow-500 to-amber-600';
                        ?>

                        <div class="flex justify-center "> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">Próbálkozások statisztikája:</p>
                        </div> 
                        <div class="p-1 flex"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">1:</p>
                            <p style="width: <?= $stats['attempts_1'] / $stats['attempts_total'] * 100 ?>%; min-width: 10px" class=" rounded bg-gradient-to-r <?= $stats['user_attempts'] == 1 ? $color_sel : $color_def ?> flex justify-center font-bold text-black text-sm"><?= $stats['attempts_1'] ?></p>

                        </div>
                        <div class="p-1 flex "> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">2:</p>
                            <p style="width: <?= $stats['attempts_2'] / $stats['attempts_total'] * 100 ?>%; min-width: 10px"  class=" rounded bg-gradient-to-r <?= $stats['user_attempts'] == 2 ? $color_sel : $color_def ?> flex justify-center font-bold text-black text-sm"><?= $stats['attempts_2'] ?></p>

                        </div>
                        <div class="p-1 flex "> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">3:</p>
                            <p style="width: <?= $stats['attempts_3'] / $stats['attempts_total'] * 100 ?>%; min-width: 10px"  class=" rounded bg-gradient-to-r <?= $stats['user_attempts'] == 3 ? $color_sel : $color_def ?> flex justify-center font-bold text-black text-sm"><?= $stats['attempts_3'] ?></p>

                        </div>
                        <div class="p-1 flex"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">4:</p>
                            <p style="width: <?= $stats['attempts_4'] / $stats['attempts_total'] * 100 ?>%; min-width: 10px"  class=" rounded bg-gradient-to-r <?= $stats['user_attempts'] == 4 ? $color_sel : $color_def ?> flex justify-center font-bold text-black text-sm"><?= $stats['attempts_4'] ?></p>

                        </div>
                        <div class="p-1 flex "> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">5:</p>
                            <p style="width: <?= $stats['attempts_5'] / $stats['attempts_total'] * 100 ?>%; min-width: 10px"  class=" rounded bg-gradient-to-r <?= $stats['user_attempts'] == 5 ? $color_sel : $color_def ?> flex justify-center font-bold text-black text-sm"><?= $stats['attempts_5'] ?></p>

                        </div>
                        <div class="p-1 flex"> 
                            <p class=" font-extrabold text-slate-50 text-l flex justify-center">x:</p>
                            <p style="width: <?= $stats['attempts_failed'] / $stats['attempts_total'] * 100 ?>%; min-width: 10px"  class=" rounded bg-gradient-to-r <?= $stats['user_attempts'] == -1 ? $color_sel : $color_def ?> flex justify-center font-bold text-black text-sm"><?= $stats['attempts_failed'] ?></p>

                        </div>



                                        
                        <div class="flex justify-center">
                            <img id="clue_image" class="w-flex h-flex rounded-lg"src="https://i.imgur.com/VDSFO47.png" >
                        </div>  

                        <div class="flex justify-center">  
                            <button class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-indigo-50 to-gray-50 hover:from-indigo-50 hover:to-gray-50 font-semibold" onclick="prevpic()">Előző</button>
                            <button class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-indigo-50 to-gray-50 hover:from-indigo-50 hover:to-gray-50 font-semibold" onclick="nextpic()">Következő</button>

                        </div> 
                        
                </div>
            </div>
        </div>


    </div>

    

    @yield('content')
</body>

</html>