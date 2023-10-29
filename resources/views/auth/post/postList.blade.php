@extends('layouts.app')

@section('content')

<article class="container">
  <p>{{ Breadcrumbs::render('postlist') }}</p>
  <h2 class="panel-heading">Post List</h2>
  <div class="panel-body">
    <ul class="adminPostlist">
      @foreach($posts as $post)
      <div class="adminPostlistContents">
        <a href="{{ route('admin.postEdit', $post->id) }}">
          <h4>{{ $post->title }}</h4>
          <img src="{{ asset('storage/'. $post->postdetails[0]['image']) }}" alt="" class="adminPostImage">
          <li class="adminPostDetails">{{ $post->description }}</li>
        </a>
      </div>
      @endforeach
    </ul>
  </div>
  <div>
    <a href="{{ route('admin.post') }}">Back</a>
  </div>
</article>

@endsection
