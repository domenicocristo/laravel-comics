<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World!</title>
</head>
<body>
    <section>
        @include('components.header')

        @yield('content')

        @include('components.footer')
    </section>
</body>
</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    header {
        height: 100px;
        background-color: aqua;
        text-align: center;
    }

    #home h1 {
        height: 50px;
        background-color: brown;
        text-align: center;
    }

    #home img {
        display: block;
        border-radius: 10px;
    }

    #game h1 {
        height: 50px;
        background-color: brown;
        text-align: center;
    }

    footer {
        height: 100px;
        margin-top: 100px;
        background-color: blue;
        color: white;
        text-align: center;
    }
</style>