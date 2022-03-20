<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Laravel</title>
    <style>
        h1{
            color: green;
        }
    </style>
</head>
<body>
    <h1>Hoc Laravel</h1>
    <p>
        Lorem input {{$name}}
    </p>

    <?php
        echo "Code php";
        if (true) {
            echo 1;
        }else {
            echo 2;
        }
    ?>

    @php
        echo "<br/> Code php @php";

    @endphp

    @if (true)
        {{ 'Noi dung text <br/>' }}
        {!! "So = ". 100 . "<br/>" !!}
    @elseif (false)
        {{ 'Noi dung @elseif' }}
    @else
        {{ 'Noi dung @else' }}
    @endif

    @foreach($persons as $person)
        {{$person."; "}}
    @endforeach


    {{--
        @include === include_once, require_one
        @extends ket thua layout balde trong laravel
        @yield khoi tao vi tri de cac layout khac ke thua vao
        @section noi dung layout
    --}}
    <script>
        document.write('Hello World');
    </script>
</body>
</html>
