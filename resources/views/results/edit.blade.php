@extends('layouts.app')
@section('content')

    <div class="form-content">
        <form method="POST" action="/results/{{$result->id}}">
            @method('PUT')
            @csrf

            <div class="row">

                <div class="form-group col-12">
                    <label for="title">Result id</label>
                    <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{$result->id}}">
                </div>

                <div class="form-group col-6">
                    <label for="title">Run Date</label>
                    <input type="text" class="form-control @error('runDate') is-invalid @enderror" id="runDate" name="runDate" value="{{$result->runDate}}">
                </div>

                <div class="form-group col-6">
                    <label for="title">Run Time</label>
                    <input type="text" class="form-control @error('runTime') is-invalid @enderror" id="runTime" name="runTime" value="{{$result->runTime}}">
                </div>

                <div class="form-group col-3">
                    <label for="title">Start Latitude</label>
                    <input type="text" class="form-control @error('startLatitude') is-invalid @enderror"
                           id="startLatitude" name="startLatitude" value="{{$result->startLatitude}}">
                </div>

                <div class="form-group col-3">
                    <label for="title">Start Longitude</label>
                    <input type="text" class="form-control @error('startLongitude') is-invalid @enderror"
                           id="startLongitude" name="startLongitude" value="{{$result->startLongitude}}">
                </div>

                <div class="form-group col-3">
                    <label for="title">End Latitude</label>
                    <input type="text" class="form-control @error('endLatitude') is-invalid @enderror"
                           id="endLatitude" name="endLatitude" value="{{$result->endLatitude}}">
                </div>

                <div class="form-group col-3">
                    <label for="title">End Longitude</label>
                    <input type="text" class="form-control @error('endLongitude') is-invalid @enderror"
                           id="endLongitude" name="endLongitude" value="{{$result->endLongitude}}">
                </div>
            </div>

            <br>
            <input class="btn btn-outline-primary mx-1" type="submit" value="Submit">
            <a class="btn btn-outline-warning mx-1" href="/results/">Cancel</a>
        </form>
    </div>

@endsection
