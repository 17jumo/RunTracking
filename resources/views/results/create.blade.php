@extends('layouts.app')
@section('content')

    <div class="form-content">
        <form method="POST" action="/results">

            @csrf

            <div class="row">

                {{--                <div class="form-group col-6">--}}
                {{--                    <label for="title">Run id</label>--}}
                {{--                    <input type="text" class="form-control @error('id') is-invalid @enderror" id="id"--}}
                {{--                           name="id" value="">--}}
                {{--                </div>--}}

                <div class="form-group col-12">
                    <label for="title">Run Name</label>
                    <input type="text" class="form-control @error('runName') is-invalid @enderror" id="runName" name="runName" value="">
                </div>

                <div class="form-group col-12">
                    <label for="title">Run Description</label>
                    <input type="text" class="form-control @error('runDesc') is-invalid @enderror" id="runDesc" name="runDesc" value="">
                </div>

                <div class="form-group col-6">
                    <label for="title">Run Date</label>
                    <input type="text" class="form-control @error('runDate') is-invalid @enderror" id="runDate"
                           name="runDate" value="">
                </div>

                <div class="form-group col-6">
                    <label for="title">Run Time</label>
                    <input type="text" class="form-control @error('runTime') is-invalid @enderror" id="runTime"
                           name="runTime" value="">
                </div>

                <div class="form-group col-3">
                    <label for="title">Start Latitude</label>
                    <input type="text" class="form-control @error('startLatitude') is-invalid @enderror"
                           id="startLatitude" name="startLatitude" value="">
                </div>

                <div class="form-group col-3">
                    <label for="title">Start Longitude</label>
                    <input type="text" class="form-control @error('startLongitude') is-invalid @enderror"
                           id="startLongitude" name="startLongitude" value="">
                </div>

                <div class="form-group col-3">
                    <label for="title">End Latitude</label>
                    <input type="text" class="form-control @error('endLatitude') is-invalid @enderror"
                           id="endLatitude" name="endLatitude" value="">
                </div>

                <div class="form-group col-3">
                    <label for="title">End Longitude</label>
                    <input type="text" class="form-control @error('endLongitude') is-invalid @enderror"
                           id="endLongitude" name="endLongitude" value="">
                </div>
            </div>

            <br>
            <input class="btn btn-outline-primary" type="submit" value="Submit">
            <a class="btn btn-outline-warning mx-1" href="/results/">Cancel</a>
        {{--        </form>--}}


        {{--                <div class="form-group col-6">--}}
        {{--                    <label for="title">Run id</label>--}}
        {{--                    <input type="text" class="form-control @error('run_id') is-invalid @enderror" id="run_id" name="run_id" value="{{$run->run_id}}">--}}
        {{--                </div>--}}

        {{--                <div class="form-group col-6">--}}
        {{--                    <label for="title">ID</label>--}}
        {{--                    <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="">--}}
        {{--                </div>--}}

        {{--                <div class="form-group col-6">--}}
        {{--                    <label for="title">Run Date</label>--}}
        {{--                    <input type="text" class="form-control @error('runDate') is-invalid @enderror" id="runDate" name="runDate" value="">--}}
        {{--                </div>--}}

        {{--                <div class="form-group col-6">--}}
        {{--                    <label for="title">Run Time</label>--}}
        {{--                    <input type="text" class="form-control @error('runTime') is-invalid @enderror" id="runTime" name="runTime" value="">--}}
        {{--                </div>--}}

    </div>
    </form>

    </div>

@endsection

