<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900 flex">


    <div class="w-5/6 p-10 h-1/2">
        <div class="items-center justify-center">
            <div class="bg-neutral-950 p-8 rounded-lg text-gray-50">
                <h1 class="text-2xl font-bold mb-4">leírás</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nobis nam cum, corporis deleniti sequi fuga quod soluta amet optio similique illum volupta Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, assumenda quibusdam nostrum maiores voluptas nisi odit quam ratione ipsa explicabo aperiam libero distinctio possimus aspernatur dolores minima quia eum minus. tes! Tempore consequuntur ut distinctio ducimus repellendus optio!Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus alias, ea blanditiis ex neque esse fugiat cumque pariatur debitis amet libero aspernatur labore omnis deleniti aperiam. Voluptatibus id quia adipisci.</p>
            </div>
        </div>
    </div>

    <!-- Jobb oldal -->
    <div class="w-5/6 p-10 h-1/2">
        <div class="items-center justify-center">
            <div class="bg-neutral-950 p-8 rounded-lg text-gray-50">
                <h1 class="text-2xl font-bold mb-4">reg</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum modi totam porro tenetur facilis ea assumenda earum est, soluta temporibus quaerat similique deleniti debitis ad enim, placeat doloribus? Dolor, sapiente.</p>
                <button class="rounded bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 text-white p-2 font-semibold">gomb</button>

            </div>
        </div>
    </div>

    


    
    @yield('content')
</body>
</html>