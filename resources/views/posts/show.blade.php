@extends('layouts.app')

@section('title', $post['title'])

@section('content')
</h2>{{$post['title'] }}</h2>
<p>{{$post['body'] }}</p>
<a href="/posts" class="btn-secondary"><- Back to all posts</a>
@endsection