@extends('layout')

@section('content')
  <div class="container">
    <h2>Create new branch</h2>
    <form method='post' action="{{ route('banks.store') }}">
      <div class="form-group">
        @csrf
        <label for="bankname">Bank name:</label>
        <select class="form-control" id="bankname">
          @foreach($banks as $bankname)
            <option>{{$bankname->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="name">Address of the branch:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter address" name="name">
      </div>
      <div class="form-group">
        <label for="name">IFSC code:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter IFSC code" name="name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection

