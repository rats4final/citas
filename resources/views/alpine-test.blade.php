<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        [x-cloack]{display: none}
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/alpine.js'])
    <title>Alpine Test </title>
</head>
<body>
<h1 class="m-6 text-center border-2 border-yellow-300 rounded-lg">Hola</h1>
<div x-data="{open: true, name: 'David'}">
    <button x-on:click="open=!open"
            x-bind:class="open ? 'bg-blue-700' : 'bg-slate-700'"
            class="rounded-lg p-1 text-white ml-6">
        Interruptor
    </button>
    <div x-show="open" x-transition x-cloak class="italic m-6 bg-blue-300 rounded-lg p-3">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dicta ipsa necessitatibus repellat sed
        sunt unde. Dignissimos quaerat repellat vero!
    </div>
    <div class="my-4 mx-6">
        El valor de name es <span x-text="name" class="font-bold"></span>
    </div>
</div>
</body>
</html>
