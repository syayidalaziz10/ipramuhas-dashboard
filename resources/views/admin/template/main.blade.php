<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ikatan Pranata Humas Indonesia | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
  <div class="layer"></div>
  <a class="skip-link sr-only" href="#skip-target">Skip to content</a>

  <div class="page-flex">
    @yield('navbar')
    <div class="main-wrapper">
      @yield('header')
      <main class="main users chart-page" id="skip-target">
        <div class="container">
          @yield('content')
        </div>
      </main>
      <footer class="footer">
        @yield('footer')
      </footer>
    </div>
  </div>

<script src="./plugins/chart.min.js"></script>
<script src="plugins/feather.min.js"></script>
<script src="js/script.js"></script>

</body>

</html>