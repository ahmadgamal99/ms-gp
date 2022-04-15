<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .slider{
                background-image:url('{{ asset('assets/slider.jpg') }}');
                background-size: contain;
                background-position: top;
                background-repeat: no-repeat;
                height: 800px;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div class='slider'>

        </div>
    </body>
</html>
