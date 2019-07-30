@extends('layout')

@section('content')
  <div class="container">
    <h2>Create new bank</h2>
    <form method='post' action="{{ route('banks.store') }}">
      <div class="form-group">
        @csrf
        <label for="name">Name of the bank:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection

