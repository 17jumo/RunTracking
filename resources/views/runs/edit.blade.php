@extends('layouts.app')
@section('content')

    <div class="form-content">
        <form method="POST" action="/runs/{{$run->id}}">
            @method('PUT')
            @csrf

            <div class="row">
                <div class="form-group col-6">
                    <label for="title">runName</label>
                    <input type="text" class="form-control @error('runName') is-invalid @enderror" id="runName"
                           name="runName" value="{{$run->runName}}">
                </div>
                <div class="form-group col-6">
                    <label for="title">Run Description</label>
                    <input type="text" class="form-control @error('runDesc') is-invalid @enderror"
                           id="runDesc" name="runDesc" value="{{$run->runDesc}}">
                </div>
{{--                <div class="form-group col-6">--}}
{{--                    <label for="title">Start Longitude</label>--}}
{{--                    <input type="text" class="form-control @error('startLongitude') is-invalid @enderror"--}}
{{--                           id="startLongitude" name="startLongitude" value="{{$run->startLongitude}}">--}}
{{--                </div>--}}
{{--                <div class="form-group col-6">--}}
{{--                    <label for="title">End Latitude</label>--}}
{{--                    <input type="text" class="form-control @error('endLatitude') is-invalid @enderror" id="endLatitude"--}}
{{--                           name="endLatitude" value="{{$run->endLatitude}}">--}}
{{--                </div>--}}
{{--                <div class="form-group col-6">--}}
{{--                    <label for="title">Longitude</label>--}}
{{--                    <input type="text" class="form-control @error('longitude') is-invalid @enderror"--}}
{{--                           id="longitude" name="longitude" value="{{$run->longitude}}">--}}
{{--                </div>--}}
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Submit">
            <a class="btn btn-warning mx-1" href="/runs">Cancel</a>
        </form>
    </div>

@endsection
