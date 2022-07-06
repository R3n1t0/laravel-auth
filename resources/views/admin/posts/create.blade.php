@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea un nuovo Post</h1>

    <form action="{{ route('admin.post.store')}}" method="POST">

        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Titotlo</label>
          <input value="{{old('title')}}" type="text" class="form-control" name="title" id="title" >
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Contenuto</label>
          <textarea class="form-control"  name="content" id="content" cols="30" rows="10">{{old('content')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection
