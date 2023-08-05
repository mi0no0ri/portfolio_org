@extends('toppage')

@section('contents')

<div class="body">
  <div class="article">
    <div>
      <img src="{{ asset('storage/'.$user->background) }}" alt="トップ写真" class="topPic">
    </div>
    <div class="introduce">
      <h2>About</h2>
      <div class="introduceContents">
        <img src="{{ asset('storage/'.$user->image) }}" alt="" class="profileImage">
        <div class="introduceText">
          <p>NAME: <strong>{{ $user->name }}</strong></p>
          <p>{{ $user->introduce }}</p>
          <a href="{{ route('about') }}">more...</a>
        </div>
      </div>
    </div>
    <div class="work">
      <h2>Works</h2>
      <div class="workContents">
        <div class="modalList">
          @foreach($images as $index => $image)
            <div class="functionWrap">
              <div class="workList workList{{$index}}">
                <div class="workTitle">
                  <h4>{{ $image->title }}</h4>
                  <p>{{ $image->description }}</p>
                  <p class="languagueTitle">使用言語：</p>
                  @foreach($image->languague as $langs)
                    <small class="languagueList">{{ $langs->languague }}</small>
                  @endforeach
                </div>
                <div class="imageList">
                  @foreach($image->postdetails as $detail)
                    <img src="{{ asset('storage/'.$detail->image) }}" alt="" class="workDetailImage">
                  @endforeach
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="moreLink">
          @if($images->count() >= 4)
            <a href="{{ route('work') }}">more...</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
