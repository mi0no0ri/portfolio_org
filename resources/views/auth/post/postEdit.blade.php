@extends('layouts.app')

@section('content')

<article class="container">
  <p>{{ Breadcrumbs::render('postedit', $post) }}</p>
  <h2 class="panel-heading">{{ $post->title }}</h2>
  <form action="{{ route('admin.postDelete', $post->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <input type="submit" value="削除" onclick="return confirm('投稿を削除しますか?')">
  </form>
  <div class="panel-body">
    <form action="{{ route('admin.postUpdate', $post->id) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('put') }}
      <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
      </div>
      <div>
        <label for="description">Description</label>
        <input type="textarea" name="description" id="description" value="{{ $post->description }}">
      </div>
      <div>
        <label for="url">URL</label>
        <input type="text" name="url" id="url" value="{{ $post->url }}">
      </div>
      <div>
        <div>
          <label for="image1">イメージ画像1
            <img src="{{ asset('storage/work/' . $post->postdetails[0]['image']) }}" alt="" class="adminPostImage">
          </label>
          <input type="file" name="image[0][image]" id="image1" value="{{ $post->postdetails[0]['image'] }}">
        </div>
        <div>
          <label for="image2">イメージ画像2
            <img src="{{ asset('storage/work/' . $post->postdetails[1]['image']) }}" alt="" class="adminPostImage">
          </label>
          <input type="file" name="image[1][image]" id="image2" value="{{ $post->postdetails[1]['image'] }}">
        </div>
        <div>
          <label for="image3">イメージ画像3
            <img src="{{ asset('storage/work/' . $post->postdetails[2]['image']) }}" alt="" class="adminPostImage">
          </label>
          <input type="file" name="image[2][image]" id="image3" value="{{ $post->postdetails[2]['image'] }}">
        </div>
      </div>
      <div>
        <div>
          <label for="">Languages</label>
          <?php
          ?>
          @foreach($langs as $index=>$lang)
            <label for="{{ $lang->language }}">
              <input type="checkbox" name="language[' {{ $index }} '][language]" value="{{ $lang->id }}" id="{{ $lang->language }}">
              {{ $lang->language }}
            </label>
            @foreach($lang->lang_frames as $frame)
              <label for="{{ $frame->usableFramework->framework }}">
                <input type="checkbox" name="framework[' {{ $index }} '][framework]" value="{{ $frame->usableFramework->id }}" id="{{ $frame->usableFramework->framework }}">
                {{ $frame->usableFramework->framework }}
              </label>
            @endforeach
          @endforeach
        </div>
      </div>
      <div>
        <input type="submit" value="更新">
      </div>
    </form>
  </div>
  <div>
    <a href="{{ route('admin.postlist') }}">Back</a>
  </div>
</article>

@endsection

@section('script')

@endsection
