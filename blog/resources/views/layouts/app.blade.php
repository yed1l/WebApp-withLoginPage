<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css ">
</head>
<body>
@include('includes.header')
@if(Request::is('/'))
@include('includes.alert')
@endif
<div class="container mt-5" >
    <div class="row">
        <div class="col-8">
            @yield('content')
        </div>
        <div class="col-4 ">
            @include('includes.aside')
        </div>
    </div>
</div>

@include('includes.footer')
</body>
</html>
