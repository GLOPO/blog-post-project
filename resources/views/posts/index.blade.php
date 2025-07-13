@extends('layouts.app')

@section('title', 'All posts')

@section('content')
<h3> All Blog Posts</h3>

@foreach($posts as $post)
<div class="card mb-3">
    <div class="card-body">
        <h4>{{ $post['title'] }}</h4>
        <p>{{$post['excerpt'] }}</p>
        <a>href="/posts/{{$post['id'] }}" class="btn btn-primary">Read More</a>
</div>
</div>
@endforeach
@endsection