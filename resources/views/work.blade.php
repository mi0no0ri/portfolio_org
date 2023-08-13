@extends('toppage')

@section('contents')

<article class="workWrap work">
  <h2>Works</h2>
  <div class="worksList">
    @foreach($images as $index => $image)
    <div class="worksContents">
      <div>
        <a href="{{ route('work.details', $image->id) }}">
          <img src="{{ asset('storage/'.$image->postdetails[0]['image']) }}" alt="" class="workTopImage">
        </a>
        <h4>{{ $image->title }}</h4>
        <p class="languageTitle">使用言語：</p>
        @foreach($image->language as $language)
          <small class="languageList">{{ $language->usableLanguage->language }}</small>
        @endforeach
        <div class="moreLink">
          <a href="{{ route('work.details', $image->id) }}">more...</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="return">
    <a href="{{ route('top') }}">TOP</a>
  </div>
</article>

@endsection
