<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VRP - @yield('Title')</title>
  @include('Component.HeadFrontend')  
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    @include('Component.HeaderFrontend')

    <div class="content-wrapper" style="margin-left:0px;">        
        @yield('MainContent')
    </div>

    @include('Component.FooterFrontend')
</div>

@include('Component.FooterLinkFrontend')
</body>
</html>
