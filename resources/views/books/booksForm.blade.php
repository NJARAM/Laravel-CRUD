@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    ADD BOOKS TO THE DATABASE
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('book_store') }}">
      {{ csrf_field() }}
          <div class="form-group">
              <label for="name">ISBN NO :</label>
              <input type="text" class="form-control" name="isbno"/>
          </div>
          <div class="form-group">
              <label for="price">NAME :</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="quantity">CATEGORY :</label>
              <input type="text" class="form-control" name="category"/>
          </div>
          <div class="form-group">
              <label for="quantity">DESCRIPTION :</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <button type="submit" class="btn btn-primary">SUBMIT</button>
      </form>
  </div>
</div>
@endsection