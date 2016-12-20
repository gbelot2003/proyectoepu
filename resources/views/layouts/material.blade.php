<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title', 'Sistema EPU')</title>
</head>

<body>
<!-- Dropdown Structure -->
@include('partials.material._nav2')
<div id="image-portada">
    @yield('img_portada')
</div>
<div class="container">
    @include('partials._message')
    <div class="row">
        @yield('content')
    </div>
</div>

<!--Import jQuery before materialize.js-->
<script src="{{ asset('js/material.js') }}" ></script>
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
@yield('scripts')

</body>
</html>
