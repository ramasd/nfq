<h1>Customers</h1>

@if(count($customers) > 0)
    @foreach($customers as $customer)
        <div class="col-md-8 col-sm-8">
            <h3>{{$customer->name}}</h3>
            <small>Counter: {{$customer->specialist->counter}}</small>
            <br>
            <small>Specialist: {{$customer->specialist->name}}</small>
        </div>
        <hr>
    @endforeach
@else
    <h3>No clients found</h3>
@endif