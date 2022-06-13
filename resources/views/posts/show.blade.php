@extends('layouts.app')


@section('title',$post['title'])


@section('content')
@if($post['is_new'])
A New Post !
@elseif(!$post['is_new'])
Old Post !
@endif

<h1>  {{ $post['title'] }}  </h1>
<p> {{ $post['content'] }}   </p>

@endsection