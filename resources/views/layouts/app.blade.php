<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Danny's Personal Website">
    <meta property="og:type" content="Personal.Website">
    <meta property="og:url" content="http://dannycho.net">
    <meta property="og:image" content="http://dannycho.net/public_html/images/project/PersonalSite.png">
    <title> @yield('title') </title>
    <link rel="canonical" href="http://dannycho.net">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/build.css') }}">
  </head>
  <body onresize="menuswitch()">
    <?php
      function isActive($route) {
        return Route::getCurrentRoute() && Route::getCurrentRoute()->getName() == $route;
      }
    ?>
    <?php
      $links = [
        [
          'href' => URL::route('index'),
          'display' => 'home',
          'active' => isActive('index')
        ],
        [
          'href' => URL::route('projects'),
          'display' => 'projects',
          'active' => isActive('projects')
        ],
        [
          'href' => URL::route('photos'),
          'display' => 'photos',
          'active' => isActive('photos')
        ]
      ];
    ?>

    @include('layouts.navbar', ['links' => $links])
    <div id='webpage'>
      @yield('content')
    </div><!--loaded-->


  </body>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    <script src = 'js/build.js'></script>
</html>
