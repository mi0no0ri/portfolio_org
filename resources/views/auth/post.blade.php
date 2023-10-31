@extends('layouts.app')

@section('content')

<article class="container">
  <p>{{ Breadcrumbs::render('post') }}</p>
  <h2 class="panel-heading">Post</h2>
  <div>
    <a href="{{ route('admin.postlist') }}">投稿一覧はこちら</a>
  </div>
  <div class="panel-body">
    <form action="{{ route('admin.create') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="adminPostWrap">
        @foreach($errors->all() as $error)
          <p class="error">{{ $error }}</p>
        @endforeach
        <div class="adminPostList">
          <label for="title" class="adminPostItem">タイトル</label>
          <input type="text" name="title" id="title">
        </div>
        <div class="adminPostList">
          <label for="description" class="adminPostItem">説明</label>
          <input type="textarea" name="description" id="description">
        </div>
        <div class="adminPostList">
          <label for="image1" class="adminPostItem">イメージ画像1</label>
          <input type="file" name="image[0][image]" id="image1">
        </div>
        <div class="adminPostList">
          <label for="image2" class="adminPostItem">イメージ画像2</label>
          <input type="file" name="image[1][image]" id="image2">
        </div>
        <div class="adminPostList">
          <label for="image3" class="adminPostItem">イメージ画像3</label>
          <input type="file" name="image[2][image]" id="image3">
        </div>
        <div class="adminPostList">
          <label for="url" class="adminPostItem">URL</label>
          <input type="text" name="url" id="url">
        </div>
        <div  class="adminPostList">
          <label class="adminPostItem">使用言語</label>
          <div class="adminPostLang">
            @foreach($languages as $index=>$language)
              <label for="{{ $language->language }}">
                <input type="checkbox" name="language[' {{ $index }} '][language]" value="{{ $language->id }}" id="{{ $language->language }}">
                {{ $language->language }}
              </label>
              @foreach($language->lang_frames as $frame)
                <label for="{{ $frame->usableFramework->framework }}">
                  <input type="checkbox" name="framework[' {{ $index }} '][framework]" value="{{ $frame->usableFramework->id }}" id="{{ $frame->usableFramework->framework }}">
                  {{ $frame->usableFramework->framework }}
                </label>
              @endforeach
            @endforeach
          </div>
        </div>
        <div class="adminPostBtn">
          <input type="submit" value="登録">
        </div>
        <div>
          <a href="{{ route('home') }}">Back</a>
        </div>
      </div>
    </form>
  </div>
</article>

@endsection
