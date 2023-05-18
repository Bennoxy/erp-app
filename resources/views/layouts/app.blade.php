<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('public')}}/assets/images/logo-icon.png" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="{{asset('public')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{asset('public')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="{{asset('public')}}/assets/css/style.css" rel="stylesheet" />
  <link href="{{asset('public')}}/assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- loader-->
	<!-- <link href="{{asset('public')}}/assets/css/pace.min.css" rel="stylesheet" /> -->

  <title>ERP-App</title>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

<!--plugins-->
<script src="{{asset('public')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('public')}}/assets/js/pace.min.js"></script>
</body>
</html>
