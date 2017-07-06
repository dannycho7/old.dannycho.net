<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danny's Personal Website</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/theme.css') }}">
  </head>
  <body onresize="menuswitch()">
    <?php
      $links = [
        [
          'href' => URL::route('index'),
          'display' => 'home',
          'active' => (Route::getCurrentRoute()->getName() == 'index')
        ],
        [
          'href' => URL::route('projects'),
          'display' => 'projects',
          'active' => (Route::getCurrentRoute()->getName() == 'projects')
        ],
        [
          'href' => URL::route('photos'),
          'display' => 'photos',
          'active' => (Route::getCurrentRoute()->getName() == 'photos')
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
    <script src = 'js/web.js'></script>
    <script src = 'js/index.js'></script>
    <script src = 'js/photo.js'></script>
    <script type="text/javascript" src="js/projects.js"></script>
</html>
