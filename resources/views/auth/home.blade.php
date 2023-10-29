@extends('layouts.app')

@section('content')

<article class="container">
    <p>{{ Breadcrumbs::render('home') }}</p>
    <h2 class="panel-heading">Home</h2>
    <ul class="panel-body">
        <li><a href="{{ route('admin.about') }}">About</a></li>
        <li><a href="{{ route('admin.post') }}">Post</a></li>
        <li><a href="{{ route('admin.contactlist') }}">Contact</a></li>
    </ul>
</article>

@endsection
