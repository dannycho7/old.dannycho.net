@extends('layouts.app')

@section('content')
    @include('partials.landing', ['messagefront' => 'Software Developer', 'messagebehind' => 'Who I am. . .'])
    <div id='content-container'>
        <div class="content">
        <article>
            @include('partials.index.social')
            @include('partials.index.intro_descr')
        </article>
        </div>

        <div class="content" id='projects'>
            @include('partials.index.project_overview')
        </div>
    </div>
@endsection