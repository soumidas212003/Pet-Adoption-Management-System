<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @yield('swiper-bundle')
  @yield('style')

  <title>@yield('title_nm')</title>
</head>

<body>
  @yield('Navbar')
  @yield('Main')
  @yield('footer')

  @yield('script')
</body>

</html>