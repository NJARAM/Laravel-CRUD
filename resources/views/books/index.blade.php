@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ISBNO</td>
          <td>BOOK NAME</td>
          <td>BOOK CATEGORY</td>
          <td>BOOK DESCRIPTION</td>
          <td colspan="2">ACTION</td>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{$book->isbno}}</td>
            <td>{{$book->name}}</td>
            <td>{{$book->category}}</td>
            <td>{{$book->description}}</td>
            <td><a href="{{ route('books.edit',$book->isbno)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('books.destroy', $book->isbno)}}" method="post">
                {{ csrf_field() }}
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection