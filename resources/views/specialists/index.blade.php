@extends('layouts.app')

@section('content')
    <h1>Customers</h1>

    @if(count($customers) > 0)
        @foreach($customers as $customer)
            <div class='card p-3 mt-3 mb-3'>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3>{{$customer->name}}</h3>
                        <small>Registration time: {{$customer->created_at->format('H:i:s')}}</small>
                    </div>
                    {!! Form::open(['action' => ['CustomersController@destroy', $customer->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Are You Sure?")', 'style' => 'display:inline']) !!}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        @endforeach
    @else
        <h3>No customers found</h3>
    @endif
@endsection