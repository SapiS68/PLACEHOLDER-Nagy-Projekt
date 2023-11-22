<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900">


    <div class="flex">
        <div class="w-full h-1/2 p-10 ">
        
            <div class="items-center justify-center">
                <div class="bg-neutral-950 p-3 rounded-lg text-gray-50">
                        <h1 class="flex justify-center	text-transform: uppercase text-bold font-bold mb-1">a játékról röviden...</h1>
                        <p>Ez egy dinamikus webes platform, ahol a videojátékok világába kalandozva tesztelheted tudásodat. 
                            Mint a framed.wtf követője, kérdéseket és képeket kínál, amelyek segítségével kihívások elé nézhetsz, 
                            és versenyre kelhetsz más játékosokkal. Minden nap új videojáték nevekkel és hozzájuk kapcsolódó képekkel 
                            találkozhatsz. Az adminisztrátorok által létrehozott tartalmak garantálják az izgalmakat.

                            Válaszaidat egyszerűen és gyorsan rögzítheted, és azonnal láthatod, hogy hol 
                            helyezkedsz el az aktuális ranglistán.
                            Kövesd nyomon a válaszaidra fordított időt és a megtekintett képek számát. 
                            Az automatikusan frissülő statisztikák segítenek nyomon követni a fejlődésedet.
                            A korábbi kihívások, valamint a hozzájuk kapcsolódó képek archiválva maradnak, így 
                            bármikor visszanézve átélheted a múlt pillanatait.</p>
                                        
                        <div class="flex justify-center p-5 m-5">
                            <img class="w-1/3 h-1/3 rounded-lg"src="https://i.imgur.com/VDSFO47.png" >
                        </div>  
                        
                </div>
            </div>
        </div>

        <div class="w-1/5 h-1/2 p-10 ">
            <div>
                <div class="bg-neutral-950 p-3 rounded-lg text-gray-50">
                    <h1 class="flex justify-center text-transform: uppercase text-bold font-bold mb-1">regisztrálj!</h1>

                    <form class="space-y-6" action="/register" method="POST">
                        @csrf
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="username" type="text" placeholder="Felhasználónév" /> 
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="email" type="text" placeholder="Email" /> 
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="password" type="password" placeholder="Jelszó" />                 
                        
                        <input  class=" bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="password_confirmation" type="password" placeholder="Jelszó ismét" />                     
                        <div class="flex justify-center">
                            <button class="flex justify-center text-slate-950 m-3 p-1 rounded bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 font-semibold">Ok</button>
                        </div>
                        
                    </form>

                    <div class="flex justify-center">
                        <a href="/login"class=" text-slate-950 m-3 p-1 rounded bg-gradient-to-r from-red-600 to-amber-400 hover:from-red-700 hover:to-orange-500 font-semibold">Van fiókom</a>
                    </div>
                    <div class="flex-col justify-center">
                        @foreach ($errors->all() as $error)
                            <p class="w-full text-red-500">{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')
</body>

</html>