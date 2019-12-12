@extends('layouts.admin')
@section('content')
<div class="container">
  <h1 class="display-4 text-center">Bill Admin Registration Form</h1>
  <form action="#" method="post">
    <div class="form-group">
      <label for="name">Name: </label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label for="phone">Phone: </label>
      <input type="text" class="form-control" name="phone">
    </div>
    <div class="form-group">
      <label for="email">Email: </label>
      <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
      <label for="address">Address: </label>
      <input type="text" class="form-control" name="address">
    </div>
    <div class="form-group">
      <label for="date">Date: </label>
      <input type="text" class="form-control" name="date">
    </div>
    <input type="submit" value="Submit" class="btn btn-primary">
  </form>
</div>
@endsection