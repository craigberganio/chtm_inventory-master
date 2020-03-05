@extends('layouts.master')
@extends('layouts.errors')
@section('content')

<form action ="/login" method = "POST">
	@csrf
  <div class="form-group">
    <label for="">Username</label>
    <input type="text" class="form-control" id="username" name ="username">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" id="password" name = "password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection