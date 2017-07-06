@extends('layouts.app')

@section('content')

  @include('partials.landing', ['messagefront' => 'Photos &amp; Moments', 'messagebehind' => 'I see through. .  .'])

  <div id='content-container'>
  	@if($_GET && $_GET["folder"])
  		<?php 
        $dirname = 'images/photography/photos/'.$_GET["folder"].'/';
  		  $imgs = glob($dirname."*");
      ?>
  		<div class="photonav">
        <h1 class="info">{{ $_GET["folder"] }}</h1>
        <p>Let me know what you think!</p>
  		  <a onclick="showPhoto('');" class="back-btn">
          <img src="images/photography/arrow-back.png" id="photo-album-icon">
        </a>
        <span>Get back to the Directory</span>
      </div>
  		<div id="photo-container">
    		@foreach ($imgs as $imgname)
      		<?php 
            $imgdescr = $imgname;
        		$imgdescr = str_replace(".JPG", "", $imgdescr);
        		$imgdescr = str_replace($dirname,"",$imgdescr);
          ?>
      		<img src="{{ $imgname }}" title="{{ $imgdescr }}">
    		@endforeach
      </div>
  	@else
      <?php 
        $dirname = 'images/photography/photos/';
        $folders = glob($dirname."*");
      ?>

      <div class="photonav">
        <h1 class="info">Directory</h1>
        <p>My Photo Collection</p>
        <p><img id="photo-album-icon"src="images/photography/cam.png">I no longer take photos</p>
        <p>Feel free to choose an album to look at!</p>
      </div>

      <div id="photo-container">
        <form method="get" onsubmit="return false;">
          @foreach($folders as $foldername)
            <?php 
              $newdir = $foldername.'/';
              $value = $foldername;
              $value = str_replace(".JPG","",$value);
              $value = str_replace($dirname,"",$value);
              $folderthumb = glob($newdir."*");
            ?>

            @if($folderthumb)
              <div class="album">
                <input type="image" src="{{ $folderthumb[0] }}" onclick="showPhoto('{{ $value }}')" name="folder" value='{{ $value }}'>
                  <p>{{ $value }}</p>
                  <span>DC</span>
                </input>
              </div>
            @endif
          @endforeach
        </form>
      </div>
  	@endif
  </div>

@endsection