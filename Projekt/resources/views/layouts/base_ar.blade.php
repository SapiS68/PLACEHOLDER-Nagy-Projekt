<?php

use Carbon\Carbon;
use App\Models\Question;


?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900">


    <div class="justify-center flex">
        <div class="w-1/2 h-1/2 p-10 ">
        
            <div class="items-center justify-center">
                <div class="bg-neutral-950 p-5 rounded-lg text-gray-50">
                        <h1 class="flex justify-center	text-transform: uppercase text-bold font-bold mb-1">Archívum</h1>

                        @foreach(Question::where('date', '<', Carbon::today())->orderBy('date', 'desc')->get() as $date)
                            <button class="font-extrabold text-black text-2xl m-3 py-6 rounded bg-gradient-to-r from-green-50 to-gray-50 hover:from-green-50 hover:to-gray-50 font-semibold">
                                <a class="w-full h-full" href="/view/<?= $date['date']->toDateString() ?>"><?= $date['date']->toDateString() ?></a>
                            </button>
                        @endforeach
                        
                        <div class="flex justify-center p-5 m-5">
                            <img class="w-1/3 h-1/3 rounded-lg" >
                        </div>  
                        
                </div>
            </div>
        </div>

       

    @yield('content')
</body>

</html>