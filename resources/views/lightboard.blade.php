@extends('layouts.app')

@section('content')
    <h1>Customers</h1>
    <br>

    @if(count($customers) > 0)
        @foreach($customers as $customer)
            <div class='card p-3 mt-3 mb-3'>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3>{{$customer->name}}</h3>
                        <h5>Counter: <strong>{{$customer->specialist->counter}}</strong></h5>
                        <small>Specialist: {{$customer->specialist->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <h3>No clients found</h3>
    @endif
@endsection