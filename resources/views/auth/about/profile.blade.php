@extends('layouts.app')

@section('content')

<article class="container">
    <p>{{ Breadcrumbs::render('profile') }}</p>
    <h2 class="panel-heading">プロフィール変更</h2>
    @foreach($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach
    <form action="{{ route('admin.updateProfile') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div>
            <label for="name">NAME:</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}">
        </div>
        <div>
            <label for="introduce">Introduce</label>
            <input type="textarea" name="introduce" id="introduce" value="{{ $user->introduce }}">
        </div>
        <div>
            <label for="image">Top Image</label>
            <img src="{{ asset('storage/'.$user->image) }}" alt="トップ写真" class="profileImage">
            <input type="file" name="image" id="image">
        </div>
        <div>
            <label for="background">Background</label>
            <img src="{{ asset('storage/'.$user->background) }}" alt="背景写真" class="profileBackground">
            <input type="file" name="background" id="background">
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
    </form>
    <div>
        <a href="{{ route('admin.about') }}">Back</a>
    </div>
</article>

@endsection

@section('script')

<script>
    var image = {{ $user->image }};
    var background = {{ $user->background }};
    $('#image').val(image);
    $('#background').val(background);
</script>

@endsection
