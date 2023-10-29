@extends('layouts.app')

@section('content')

<article class="container">
  <p>{{ Breadcrumbs::render('contactlist') }}</p>
  <h2 class="panel-heading">Contact List</h2>
  <div class="panel-body">
    @if($contacts->count() > 0)
    <table>
      <tr>
        <th class="contactList">お名前</th>
        <th class="contactList">email</th>
        <th class="contactList">タイトル</th>
        <th>内容</th>
      </tr>
      @foreach($contacts as $contact)
      <tr>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->title }}</td>
        <td>{{ $contact->contact }}</td>
      </tr>
      @endforeach
    </table>
    @else
      <p>お問い合わせはありません</p>
    @endif
  </div>
  <div>
    <a href="{{ route('home') }}">Back</a>
  </div>
</article>

@endsection
