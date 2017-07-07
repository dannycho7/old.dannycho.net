@extends('layouts.app')

@section('title')
  Danny Cho's Photography
@endsection

@section('content')

  @include('partials.landing', ['messagefront' => 'Photos &amp; Moments', 'messagebehind' => 'I see through. .  .'])

  <div id='content-container'>
    @if($_GET && $_GET["folder"])
      <div class="photonav">
        <h1 class="info">{{ $_GET["folder"] }}</h1>
        <p>Let me know what you think!</p>
        <a onclick="showPhoto('');" class="back-btn">
          <img src="images/photography/arrow-back.png" id="photo-album-icon">
        </a>
        <span>Get back to the Directory</span>
      </div>

      <div id="photo-container">
        @include('partials.photos.open_folder')
      </div>
    @else
      <div class="photonav">
        <h1 class="info">Directory</h1>
        <p>My Photo Collection</p>
        <p><img id="photo-album-icon" src="{{ URL::asset('images/photography/cam.png') }}">I no longer take photos</p>
        <p>Feel free to choose an album to look at!</p>
      </div>

      <div id="photo-container">
        @include('partials.photos.view_folders')
      </div>

    @endif
  </div>

@endsection