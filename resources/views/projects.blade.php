@extends('layouts.app')

@section('title')
  Danny Cho's Projects
@endsection

@section('content')
  
  @include('partials.landing', ['messagefront' => 'Project Involvement', 'messagebehind' => 'What I do. . .'])

  <div id='content-container'>
    <div class='proj-content proj-overview'>
      <img src="{{ URL::asset('images/project/work-icon.png') }}" />
      <h1>Project Overview</h1>
      <p>Here are a few of the projects that I have worked on. If you would like to collaborate, don't hesitate to reach out!</p>
    </div>

    @foreach($projects as $proj)
      @include('partials.projects.print_project')
    @endforeach
  </div>

@endsection
