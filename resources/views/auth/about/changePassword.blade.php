@extends('layouts.app')

@section('content')

<article class="container">
    <p>{{ Breadcrumbs::render('password') }}</p>
    <h2 class="panel-heading">パスワード変更</h2>
    @foreach($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach
    <form action="{{ route('admin.updatePassword') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
        <div>
            <label for="password">現在のパスワード</label>
            <input type="password" name="currentPassword" id="password">
        </div>
        <div>
            <label for="newPassword">新しいパスワード</label>
            <input type="password" name="password" id="newPassword">
        </div>
        <div>
            <label for="confirmPassword">新しいパスワード（確認用）</label>
            <input type="password" name="confrimPassword" id="confirmPassword">
        </div>
        <div>
            <input type="submit" value="Change">
        </div>
        <div>
            <a href="{{ route('admin.about') }}">Back</a>
        </div>
    </form>
</article>

@endsection
