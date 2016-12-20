<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('pageTitle', 'Coalición contra la impunidad')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Fonts -->
</head>
<body>
<div id="content" class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="warp">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>