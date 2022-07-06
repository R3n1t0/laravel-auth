@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Modifica il Post: {{ $post->title}}</h1>

    <form action="{{ route('admin.post.update', $post)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Titotlo</label>
          <input value="{{ old('title'), $post->title }}" type="text" class="form-control" name="title" id="title" placeholder="Post Title" >
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Contenuto</label>
          <textarea class="form-control"  name="content" id="content" cols="30" rows="10">{{ old('content'), $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection
