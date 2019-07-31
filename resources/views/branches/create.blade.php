@extends('layout')

@section('content')
  <div class="container">
    <h2>Create new branch</h2>
    <form method='post' action="{{ route('branches.store') }}">
      <div class="form-group">
        @csrf
        <label for="bank_id">Bank name:</label>
        <select class="form-control" id="bank_id" name="bank_id">
          @foreach($banks as $bankname)
            <option value="{{$bankname->id}}">{{$bankname->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="address">Address of the branch:</label>
        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
      </div>
      <div class="form-group">
        <label for="IFSC">IFSC code:</label>
        <input type="text" class="form-control" id="IFSC" placeholder="Enter IFSC code" name="IFSC">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection

