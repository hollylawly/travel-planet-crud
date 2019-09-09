@extends('index')
@section('title', 'Reservations')

@section('content')
<div class="container mt-5">
    <h2>Your Reservations</h2>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">Hotel</th>
            <th scope="col">Arrival</th>
            <th scope="col">Departure</th>
            <th scope="col">Type</th>
            <th scope="col">Guests</th>
            <th scope="col">Price</th>
            <th scope="col">Manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->room->hotel['name'] }}</td>
                <td>{{ $reservation->arrival }}</td>
                <td>{{ $reservation->departure }}</td>
                <td>{{ $reservation->room['type'] }}</td>
                <td>{{ $reservation->num_of_guests }}</td>
                <td>${{ $reservation->room['price'] }}</td>
            <td><a href="/dashboard/reservations/{{ $reservation->id }}/edit" class="btn btn-sm btn-success">Edit</a></td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

@endsection