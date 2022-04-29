<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VRP - @yield('Title')</title>
  @include('Component.HeadBackend')  
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    @include('Component.NavBarBackend')
    @include('Component.SideBarBackend')

    <div class="content-wrapper">        
        @yield('MainContent')
    </div>

    @include('Component.FooterBackend')
</div>

@include('Component.FooterLinkBackend')
</body>
</html>
