@extends('layouts.app')

@section('content')
<div class="container">
    <h3>{{ $post -> title}}</h3>
    <p>{{ $post -> content}}</p>
    <a class="btn btn-warning mx-1" href="{{ route('admin.post.edit', $post)}}">MODIFICA</a>
</div>
@endsection
