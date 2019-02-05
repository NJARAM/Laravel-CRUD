@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Book
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
      <form method="post" action="{{ route('books.update', $book->isbno) }}">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="name">BOOK NAME :</label>
          <input type="text" class="form-control" name="name" value={{ $book->name }} />
        </div>
        <div class="form-group">
          <label for="category">BOOK CATEGORY :</label>
          <input type="text" class="form-control" name="category" value={{ $book->category }} />
        </div>
        <div class="form-group">
          <label for="description">Book D:</label>
          <input type="text" class="form-control" name="description" value={{ $book->description }} />
        </div>
       
        <div class="">
        <button type="submit" class="btn btn-primary">Update</button>
                            </div>
      </form>
  </div>
</div>
@endsection