<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application</title>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
@include('layouts.header')
<div class="container mt-2">
    @yield('content')
</div>
</body>
@include('layouts.footer')
</html>