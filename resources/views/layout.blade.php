<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Интернет-магазин</title>
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sagamodastyles.css') }}" rel="stylesheet">
    {{--    <script src="{{ asset('js/script.js') }}"></script>--}}
{{--    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>--}}

</head>
<body>
@include('layouts.header')
<main>
@include($Template)
</main>
@include('layouts.footer')
</body>
</html>
