<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('login')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-image: url('https://img.freepik.com/free-photo/assortment-cinema-elements-red-background-with-copy-space_23-2148457848.jpg?t=st=1746344624~exp=1746348224~hmac=7f00a7817357f5f093798bcbcd9935bb907e5644b69fc9bbda4c66f997a3654e&w=1380');
      background-size: cover;
      background-position: center;
      height: 100vh;
    }
  </style>
</head>
<body>
  @yield('content')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
