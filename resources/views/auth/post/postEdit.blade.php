@extends('layouts.app')

@section('content')

<article class="container">
  <p>{{ Breadcrumbs::render('postedit', $post) }}</p>
  <h2 class="panel-heading">{{ $post->title }}</h2>
  <div class="panel-body">
    <form action="" method="post" enctype="multipart/form-data">
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
            <img src="{{ asset('storage/' . $post->postdetails[0]['image']) }}" alt="" class="adminPostImage">
          </label>
          <input type="file" name="postdetail[0][postdetail]" id="image1">
        </div>
        <div>
          <label for="image2">イメージ画像2
            <img src="{{ asset('storage/' . $post->postdetails[1]['image']) }}" alt="" class="adminPostImage">
          </label>
          <input type="file" name="postdetail[1][postdetail]" id="image2">
        </div>
        <div>
          <label for="image3">イメージ画像3
            <img src="{{ asset('storage/' . $post->postdetails[2]['image']) }}" alt="" class="adminPostImage">
          </label>
          <input type="file" name="postdetail[2][postdetail]" id="image3">
        </div>
      </div>
      <div>
        <div>
          <label for="">Languages</label>
          <?php
          ?>
          @foreach($langs as $index=>$lang)
            <input type="checkbox" name="language[]" value="{{ $lang->language }}" id="language{{ $index }}">
            <label for="language{{ $index }}">{{ $lang->language }}</label>
            @foreach($lang->lang_frames as $frame)
              <input type="checkbox" name="framework" value="{{ $frame->usableFramework->framework }}" id="framework{{ $index }}">
              <label for="framework{{ $index }}">{{ $frame->usableFramework->framework }}</label>
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
