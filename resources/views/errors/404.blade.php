@extends('layouts.app')

@section('title')
	Page not Found - Danny's Personal Site
@endsection

@section('content')
	@include('partials.landing', ['messagefront' => 'Page not found', 'messagebehind' => '404 . . . '])
@endsection