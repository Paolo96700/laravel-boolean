<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <header>
            <h1 class="align-center">ToDO</h1>
        </header>
        <main class="offset-2 container-sm">
            <div class="card container-fluid ">
                <h2>prova</h2>
                <span>data fine</span>
                <div>bottoni</div>
            </div>
            <div> {{-- include --}}
                <h2></h2>
                <div>
                    data 
                    bottoni
                </div>
                <div>
                    descrizxion
                </div>
                <img src="" alt="">
            </div>
        </main>
    </body>
</html>
