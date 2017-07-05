<div id="navigation" class="gradient">
  <div id = "logo">
    <a href="/">
      <img src="{{ URL::asset('images/social/logo1.png') }}" href="#" />
    </a>
  </div>
  <a id="menu-icon" class="navselect" onclick="reveal()">
    <img src="{{ URL::asset('images/menu-icon.png') }}" id="menuimg" />
    <img src="{{ URL::asset('images/exit.png') }}" id="exit" />
  </a>
  <div id="container">
    <div id="menubar">
      <ul class="menu-content">
        @foreach ($links as $link)
          <li class="linknav">
            @if ($link['active'])
              <a href="{{ $link['href'] }}" class="navselect active">{{ $link['display'] }}</a>
            @else
              <a href="{{ $link['href'] }}" class="navselect">{{ $link['display'] }}</a>
            @endif
          </li>
        @endforeach
      </ul>
    </div><!--menubar-->
  </div><!--container-->
</div>