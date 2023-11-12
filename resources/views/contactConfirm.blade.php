@extends('toppage')

@section('contents')

<article class="contact">
  <h2>Contact Confirm</h2>
  <form class="contactForm" method="post" action="{{ route('contact.send') }}">
    {{ csrf_field() }}
    <div class="contactConfirmWrap">
      @foreach($errors->all() as $error)
        <p class="error">{{ $error }}</p>
      @endforeach
      <div class="contactConfirmContents">
        <label for="name">お名前</label>
        {{ $inputs['name'] }}
        <input type="hidden" name="name" value="{{ $inputs['name'] }}">
      </div>
      <div class="contactConfirmContents">
        <label for="email">メールアドレス</label>
        {{ $inputs['email'] }}
        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
      </div>
      <div class="contactConfirmContents">
        <label for="title">件名</label>
        {{ $inputs['title'] }}
        <input type="hidden" name="title" value="{{ $inputs['title'] }}">
      </div>
      <div class="contactConfirmContents">
        <label for="contact">お問い合わせ</label>
        {{ $inputs['contact'] }}
        <input type="hidden" name="contact" value="{{ $inputs['contact'] }}">
      </div>
    </div>
    <div class="submitBtnSpace">
      <div class="submitBtn">
        <button type="submit" name="back" value="back">Back</button>
      </div>
      <div class="submitBtn">
        <button type="submit">Send</button>
      </div>
    </div>
  </form>
  <div class="return">
    <a href="{{ route('top') }}">TOP</a>
  </div>
</article>

@endsection
