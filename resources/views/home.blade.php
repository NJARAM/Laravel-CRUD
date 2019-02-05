@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="pull-right">
                                <a href="{{ route('book_form') }}" class="btn btn-default btn-flat">Add Book</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('books.index') }}" class="btn btn-default btn-flat">View Book</a>
                            </div>
            </div>
        </div>
    </div>
</div>
@endsection
