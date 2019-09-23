@extends('layouts.app')

@section('content')
    <h1>Create Customer / Register</h1>
    {!! Form::open(['action' => 'CustomersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('specialist_id', 'Specialist')}}
            {{Form::select('specialist_id', $specialists, null, ['placeholder' => 'Pick a Specialist...'])}}
            <br>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        </div>

    {!! Form::close() !!}
@endsection