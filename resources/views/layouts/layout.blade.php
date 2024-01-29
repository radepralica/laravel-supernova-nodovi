<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" type="text/css" href="#">
</head>
<title>@yield('header-title','Header')</title>
<body>

@yield('navbar')
<br>




@yield('main-content')


@vite(['resources/css/app.css'])
@vite(['resources/js/app.js'])
</body>
</html>
