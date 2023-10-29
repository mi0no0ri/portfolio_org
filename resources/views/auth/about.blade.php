@extends('layouts.app')

@section('content')

<article class="container">
    <p>{{ Breadcrumbs::render('about') }}</p>
    <h2 class="panel-heading">About</h2>
    <ul>
        <li><a href="{{ route('admin.profile') }}">プロフィール変更</a></li>
        <li><a href="{{ route('admin.password') }}">パスワード変更</a></li>
        <li><a href="{{ route('admin.language') }}">使用言語登録</a></li>
        <li><a href="{{ route('admin.tool') }}">使用ツール登録</a></li>
    </ul>
    <div>
        <a href="{{ route('home') }}">Back</a>
    </div>
</article>

@endsection
