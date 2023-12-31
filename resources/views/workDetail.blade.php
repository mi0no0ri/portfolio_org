@extends('toppage')

@section('contents')

<article class="workWrap work workDetail fadeIn">
  <h2>{{ $detail->title }}</h2>
  <div class="workDetailWrap">
    <div class="workDetailDescription">
      <div>
        <h4>概要</h4>
        <p>{{ $detail->description }}</p>
      </div>
      <div>
        <h4>使用言語</h4>
        @foreach($detail->language as $language)
          <small class="languageList">{{ $language->usableLanguage->language }}</small>
        @endforeach
      </div>
      <div>
        <h4>使用フレームワーク</h4>
        @foreach($detail->framework as $framework)
          <small class="languageList">{{ $framework->usableFramework->framework }}</small>
        @endforeach
      </div>
      @if($detail->url != null)
      <div class="workUrl">
        <h4>URL</h4>
        <a href="{{ $detail->url }}">{{ $detail->url }}</a>
      </div>
      @endif
      <ul>
        <h4>機能一覧</h4>
        @foreach($detail->functions as $function)
          <li>{{ $function->name }}</li>
        @endforeach
      </ul>
    </div>
    <div class="workDetailImageWrap">
      @foreach($images as $image)
        <img src="{{ asset('storage/work/'.$image->image) }}" alt="" class="workDetailImage">
      @endforeach
    </div>
  </div>
  <div class="return">
    <a href="{{ route('work') }}">Back</a>
  </div>
</article>
<div class="toUp">
  <a href="#" class="toUpLink"><i class="fa-solid fa-arrow-up"></i></a>
</div>

@endsection
