@extends('toppage')

@section('contents')

<article class="body">
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
                  <p class="languageTitle">使用言語：</p>
                  @foreach($image->language as $language)
                    <small class="languageList">{{ $language->usableLanguage->language }}</small>
                  @endforeach
                </div>
                <div class="imageList">
                  @foreach($image->postdetails as $detail)
                    <img src="{{ asset('storage/'.$detail->image) }}" alt="" class="workImage">
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
</article>

@endsection
