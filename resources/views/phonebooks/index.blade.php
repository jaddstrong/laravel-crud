
@extends('layouts.app')

@section('content')
    
        <div class="row">
            <div class="col-md-4 form-group">
                {!! Form::open(['action' => 'PhoneBooksController@index', 'method' => 'POST']) !!}
                    {{Form::label('name', 'Name:', ['for' => 'name'])}}
                    {{Form::text('name', '', ['placeholder' => 'Enter name', 'class' => 'form-control'])}}

                    {{Form::label('number', 'Number:', ['for' => 'number'])}}
                    {{Form::text('number', '', ['placeholder' => 'Enter number', 'class' => 'form-control'])}}
                    <br>
                    {{Form::submit('Submit', ['class' => 'btn btn-success'])}}

                {!! Form::close() !!}
            </div>
            <div class="col-md-8">
                <table  class="table table-hover" id="tab">
                    <thead>
                        <th>ID #</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Date</th>
                        <th>Update</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @if(count($sql) > 0)
                            @foreach($sql as $key)
                                <tr>
                                    <td>{{$key->id}}</td>
                                    <td>{{$key->name}}</td>
                                    <td>{{$key->number}}</td>
                                    <td>{{$key->created_at}}</td>
                                    <td>{{$key->updated_at}}</td>
                                    <td class="btn-group">
                                        <a href="/phonebooks/{{$key->id}}/edit" role="button" class="btn btn-sm btn-primary">Edit</a>
                                        {!! Form::open(['action' => ['PhoneBooksController@destroy', $key->id], 'method' => 'POST']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-sm btn-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        @endif
                    </tbody>
                </table>
                {{ $sql->links() }}
            </div>
        </div>
@endsection

