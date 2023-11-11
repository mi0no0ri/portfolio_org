@extends('toppage')

@section('contents')

<article class="workWrap work fadeIn">
  <h2>Works</h2>
  <div class="worksList">
    @foreach($images as $index => $image)
    <div class="worksContents">
      <a href="{{ route('work.details', $image->id) }}">
        <img src="{{ asset('storage/work/'.$image->postdetails[0]['image']) }}" alt="" class="workTopImage">
      </a>
      <h4>{{ $image->title }}</h4>
      <p class="languageTitle">使用言語：</p>
      @foreach($image->language as $language)
        <small class="languageList">{{ $language->usableLanguage->language }}</small>
      @endforeach
      <p class="languageTitle">使用フレームワーク</p>
      @foreach($image->framework as $framework)
        <small class="languageList">{{ $framework->usableFramework->framework }}</small>
      @endforeach
      <div class="moreLink">
        <a href="{{ route('work.details', $image->id) }}">more...</a>
      </div>
    </div>
    @endforeach
  </div>
  <div class="return">
    <a href="{{ route('top') }}">TOP</a>
  </div>
</article>
<div class="toUp">
  <a href="#" class="toUpLink"><i class="fa-solid fa-arrow-up"></i></a>
</div>

@endsection
