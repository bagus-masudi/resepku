<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Fix style in ngrok -->
     <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  
  <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/main.css')}}">
  <title>Homepage | Resepku</title>
</head>

<body>

    @include('components.navbar')

    @yield('content')

    @include('components.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="{{asset('bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>