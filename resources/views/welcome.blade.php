@extends('layouts.app')

@section('content')

<h1 class="text-center py-3">Trips and Chips</h1>

<div class="container">

    <div class="row">

@forelse ($trips as $trip)

        <div class="col">
            <div class="card text-start">
            <img class="card-img-top" src="{{$trip->image}}" alt="{{$trip->city}}">
            <div class="card-body">
                <h4 class="card-title">Fly to {{$trip->city}} for {{$trip->price}}$</h4>
                <p class="card-text">Flight duration: {{$trip->flight_duration}}H</p>
            </div>
            </div>
        </div>

    

@empty
    
@endforelse

    </div>

</div>    

@endsection