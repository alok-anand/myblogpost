@extends('layouts.app')


@section('title','Blog Post')


@section('content')
@foreach($posts as $post)

@if($post['is_new'])
A New Post ..!
@elseif(!$post['is_new'])
Old Post !
@endif

<h1>  {{ $post['title'] }}  </h1>
<p> {{ $post['content'] }}   </p>
@endforeach


@endsection