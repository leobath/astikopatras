<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('fonts/css/all.min.css') }}" rel="stylesheet" type="text/css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
</head>
<body>
    @include('includes.navbar')
    @yield('content')

    @include('includes.footer')
    <script  src='{{asset('js/jquery-3.3.1.min.js')}}' type='text/javascript'></script>
    <script  src="{{asset('js/bootstrap.min.js')}}" type='text/javascript'></script>
    <script  src="{{asset('js/customscript.js')}}" type='text/javascript'></script>     
</body>
</html>