<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900 ">
   
    <div class="p-5 m-5">
            <button class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 font-semibold">zöld gomb</button>

            <button class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-red-600 to-amber-400 hover:from-red-700 hover:to-orange-500 font-semibold">piros gomb</button>
            <button class="text-slate-950 m-1 p-1 rounded bg-gradient-to-r from-indigo-700 to-gray-400 hover:from-indigo-800 hover:to-gray-600 font-semibold">szimpla gomb</button>
    </div>

            <div class="w-1/2 h-1/2 p-10 ">
                <div class="items-center justify-center">
                    <div class="bg-neutral-950 p-3 rounded-lg text-gray-50">
                        <h1 class="	text-transform: uppercase text-bold font-bold mb-1">textbox</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nobis nam cum, corporis deleniti sequi fuga quod soluta amet optio similique illum volupta Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, assumenda quibusdam nostrum maiores voluptas nisi odit quam ratione ipsa explicabo aperiam libero distinctio possimus aspernatur dolores minima quia eum minus. tes! Tempore consequuntur ut distinctio ducimus repellendus optio!Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus alias, ea blanditiis ex neque esse fugiat cumque pariatur debitis amet libero aspernatur labore omnis deleniti aperiam. Voluptatibus id quia adipisci.</p>
                    </div>
                </div>
            </div>

    <div class="p-5 m-5">
            <input class="bg-gradient-to-r from-stone-700 to-neutral-500 p-1 rounded-lg text-zinc-50 placeholder:text-zinc-50" name="username" type="text" placeholder="input line" /> 
    </div>

    <div class="p-5 m-5">
            <img class="w-1/4 h-1/4 rounded-lg"src="https://i.imgur.com/deASI2F.jpeg" alt="Italian Trulli">
    </div>       

  
    


    
    @yield('content')
</body>
</html>