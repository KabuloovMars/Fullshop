<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
    @include('admin.css')
</head>
<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        @include('admin.nav')
        @include('admin.sidebar')
      <!-- Main Content -->
        @include('admin.body')
        @include('admin.footer')
    </div>
  </div>
  <!-- General JS Scripts -->
    @include('admin.js')
</body>
</html>
