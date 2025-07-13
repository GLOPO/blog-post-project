@extends('layouts.layout')

@section('title', 'All Posts')

@section('content')
<h2>All Blog Posts</h2>
@foreach($posts as $post)
<div style="margin-bottom: 20px;">
<h3>{{ $post->title}}</h3>
<p>{{ $post->body}}</p>
</div>
@endforeach
@endsection