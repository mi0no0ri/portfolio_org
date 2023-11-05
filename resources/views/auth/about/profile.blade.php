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
            <label for="userImage">Top Image
                <img src="{{ asset('storage/about/'.$user->image) }}" alt="トップ写真" class="profileImage" id="profileImage">
                <input type="file" name="image" id="userImage" class="inputHidden">ファイルを選択
                <p id="imageTitle">{{ $user->image }}</p>
            </label>
        </div>
        <div>
            <label for="userBackground">Background
                <img src="{{ asset('storage/about/'.$user->background) }}" alt="背景写真" class="profileBackground" id="profileBackground">
                <input type="file" name="background" id="userBackground" class="inputHidden">ファイルを選択
                <p id="backTitle">{{ $user->background }}</p>
            </label>
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
// 画像選択表示切り替え
$(function(){
  $('#userImage').on('change', function(e){
    var file = $(this).prop('files')[0];
    $('#imageTitle').text(file.name);
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#profileImage').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  $('#userBackground').on('change', function(e){
    var file = $(this).prop('files')[0];
    $('#backTitle').text(file.name);
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#profileBackground').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
});
</script>

@endsection
