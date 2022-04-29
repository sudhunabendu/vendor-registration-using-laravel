<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VRP - @yield('Title')</title>
  @include('Component.HeadBlank')
</head>
<body class="hold-transition login-page">
    @yield('MainContent')

    @include('Component.FooterLinkBlank')
</body>
</html>