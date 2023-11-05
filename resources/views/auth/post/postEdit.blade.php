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
          <label for="edit0">イメージ画像1
            <img src="{{ asset('storage/work/' . $post->postdetails[0]['image']) }}" alt="" class="adminPostImage" id="editImg0">
            <input type="hidden" name="imageId[0]" value="{{ $post->postdetails[0]['id'] }}">
            <input type="file" name="image[0][0]" id="edit0" class="inputHidden">ファイルを選択
          </label>
          <p id="editName0">{{ $post->postdetails[0]['image'] }}</p>
        </div>
        <div>
          <label for="edit1">イメージ画像2
            <img src="{{ asset('storage/work/' . $post->postdetails[1]['image']) }}" alt="" class="adminPostImage" id="editImg1">
            <input type="hidden" name="imageId[1]" value="{{ $post->postdetails[1]['id'] }}">
            <input type="file" name="image[1][1]" id="edit1" class="inputHidden">ファイルを選択
          </label>
          <p id="editName1">{{ $post->postdetails[1]['image'] }}</p>
        </div>
        <div>
          <label for="edit2">イメージ画像3
            <img src="{{ asset('storage/work/' . $post->postdetails[2]['image']) }}" alt="" class="adminPostImage" id="editImg2">
            <input type="hidden" name="imageId[2]" value="{{ $post->postdetails[2]['id'] }}">
            <input type="file" name="image[2][2]" id="edit2" class="inputHidden">ファイルを選択
          </label>
          <p id="editName2">{{ $post->postdetails[2]['image'] }}</p>
        </div>
      </div>
      <div>
        <div>
          <label for="">Languages</label>
          <?php
          ?>
          @foreach($langs as $index=>$lang)
            <label for="{{ $lang->language }}">
              <input type="checkbox" name="language[' {{ $index }} '][language]" value="{{ $lang->id }}" id="{{ $lang->language }}" {{DB::table('languages')->where('post_id', $post->id)->where('language_id', $lang->id)->exists() ? 'checked': ''}}>
              {{ $lang->language }}
            </label>
            @foreach($lang->lang_frames as $frame)
              <label for="{{ $frame->usableFramework->framework }}">
                <input type="checkbox" name="framework[' {{ $index }} '][framework]" value="{{ $frame->usableFramework->id }}" id="{{ $frame->usableFramework->framework }}" {{ DB::table('frameworks')->where('post_id', $post->id)->where('framework_id', $frame->id)->exists() ? 'checked': ''}}>
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

<script>
// 画像選択表示切り替え
$(function(){
  $('#edit0').on('change', function(e){
    var file = $(this).prop('files')[0];
    $('#editName0').text(file.name);
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#editImg0').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  $('#edit1').on('change', function(e){
    var file = $(this).prop('files')[0];
    $('#editName1').text(file.name);
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#editImg1').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  $('#edit2').on('change', function(e){
    var file = $(this).prop('files')[0];
    $('#editName2').text(file.name);
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#editImg2').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
});
</script>

@endsection
