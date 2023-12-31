<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>SKYREEX</title>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
@include('includes.header')

@yield('content')
@include('sweetalert::alert')
</body>

</html>
