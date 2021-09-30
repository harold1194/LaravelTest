@extends('layouts.app')

@section('content')
<h1>Posts</h1>
@if(count($posts) > 1)
<div class="card">
    <ul class="list-group list-group-flash">
        @foreach($posts as $post)
        <li class="list-group-item">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
        </li>
        @endforeach
    </ul>
</div>
@else
<p>No post found</p>
@endif
@endsection