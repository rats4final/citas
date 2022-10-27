<!DOCTYPE html>
<html lang="es-BO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $metaDescription ?? 'Sitio web Citas Hospital San Gabriel'}}">
    <meta name="keywords" content="{{ $keywords ?? 'San Gabriel, Citas' }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>San Gabriel Citas - {{ $title ?? ''}}</title>
</head>
<body>
    <x-layouts.nav/>
    {{ $slot }}
    <x-layouts.footer/>
</body>
</html>
