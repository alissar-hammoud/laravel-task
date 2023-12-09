@extends('layouts.app')

@section('title', 'Posts')

@section('content')
@include('partials.navbar')
<h1>Posts</h1>
@php
$posts = [
[
'title' => 'First Post',
'description' => 'This is the first post.',
],
[
'title' => 'Second Post',
'description' => 'This is the second post.',
],
[
'title' => 'Third Post',
'description' => 'This is the third post.',
],
];
@endphp
<ul>
    @forelse ($posts as $post)
    <li>
        <h2>{{ $post['title'] }}</h2>
        <p>{{ $post['description'] }}</p>
    </li>
    @empty
    <h2>No Posts</h2>
    @endforelse
</ul>
@endsection