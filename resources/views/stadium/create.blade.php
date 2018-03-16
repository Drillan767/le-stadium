@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <div class="row">
            {!! Form::open(['url' => '/admin/create']) !!}
                <div class="form-group">
                    <label for="title">Ticket Title:</label>
                    <input type="text" class="form-control" name="title"/>
                </div>
                <div class="form-group">
                    <label for="description">Ticket Description:</label>
                    <textarea cols="5" rows="5" class="form-control" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            {!! Form::close() !!}
            <form method="post" action="{{url('/admin/create')}}">

            </form>
        </div>
    </div>
@endsection