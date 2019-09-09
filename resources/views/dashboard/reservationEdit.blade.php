@extends('index')
@section('title', 'Edit Reservation')

@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>{{ $hotelInfo->name }} - <small class="text-muted">{{ $hotelInfo->location }}</small></h2>
        </div> 
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Book your stay now at the most magnificent resort in the world!</p>
            <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="room">Room Type</label>
                            <select class="form-control" name="room_id" value="{{ old('room_id', $reservation->room_id) }}">
                                @foreach ($hotelInfo->rooms as $option)
                                    <option value="{{$option->id}}">{{ $option->type }} - ${{ $option->price }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="guests">Number of guests</label>
                            <input class="form-control" name="num_of_guests" value="{{ old('num_of_guests', $reservation->num_of_guests) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="arrival">Arrival</label>
                            <input type="date" class="form-control" name="arrival" placeholder="03/21/2020" value="{{ old('arrival', $reservation->arrival) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="departure">Departure</label>
                            <input type="date" class="form-control" name="departure" placeholder="03/23/2020" value="{{ old('departure', $reservation->departure) }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <p class="text-right">
            <button type="submit" class="btn btn-sm text-danger">Delete reservation</button>
        </p>
    </form>
</div>
@endsection