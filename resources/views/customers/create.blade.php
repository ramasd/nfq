@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class='alert alert-danger'>
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class='alert alert-success'>
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class='alert alert-danger'>
        {{session('error')}}
    </div>
@endif

<h1>Create Customer</h1>
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