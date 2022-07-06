@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica il Post: {{ $post->title}} </h1>

    <form>
        <div class="mb-3">
          <label for="title" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection
