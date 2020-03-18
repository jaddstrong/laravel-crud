@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4 form-group">
            {!! Form::open(['action' => ['PhoneBooksController@update', $query->id], 'method' => 'POST']) !!}
                {{Form::label('name', 'Name:', ['for' => 'name'])}}
                {{Form::text('name', $query->name, ['class' => 'form-control'])}}

                {{Form::label('number', 'Number:', ['for' => 'number'])}}
                {{Form::text('number', $query->number, ['class' => 'form-control'])}}
                <br>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-success'])}}

            {!! Form::close() !!}
        </div>
    </div>
@endsection
