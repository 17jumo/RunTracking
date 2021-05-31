@extends('layouts.app')
@section('content')

    <div class="form-content">
        <form method="POST" action="/results/{{$result->id}}">
            @method('PUT')
            @csrf

            <div class="row" >
                <div class="col-sm-8 my-1">
                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-text">Run Date: {{$result->runDate}}</h5>
                            <h5 class="card-text">Run Time: {{$result->runTime}} minutes</h5>
                            <h5 class="card-text">Start Latitude: {{$result->startLatitude}}, Longitude: {{$result->startLongitude}}</h5>
                            <h5 class="card-text">End Latitude: {{$result->endLatitude}}, Longitude: {{$result->endLongitude}}</h5>
                            <p class="card-title">ID: {{$result->id}}</p>

                            <a class="btn btn-primary mx-1" href="/results/{{$result->id}}/edit">Edit</a>
                            <a class="btn btn-warning mx-1" href="/results/">Cancel</a>

                            {{--                            <form action="/posts/{{$result->id}}" method="POST">--}}
                            {{--                                @method('DELETE')--}}
                            {{--                                @csrf--}}

                            {{--                                <a class="btn btn-primary mx-1 " href="/posts/{{{$result->id}}">Show</a>--}}
                            {{--                                @auth--}}
                            {{--                                    <a class="btn btn-success mx-1" href="/posts/{{$result->id}}/edit">Edit</a>--}}
                            {{--                                    <button type="submit" title="delete" class="btn btn-danger mx-1">Delete</button>--}}
                            {{--                                @endauth--}}
                            {{--                            </form>--}}
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="600" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q={{$result->startLatitude }},%20{{$result->startLongitude}}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <style>.mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 600px;
                    }</style>
                <style>.gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 600px;
                    }</style>
            </div>
        </div>
        </td>
        </tr>


        </table>


        {{--            <div class="row">--}}
        {{--                <div class="form-group col-12">--}}
        {{--                    <label for="title">Id</label>--}}
        {{--                    <input type="text" class="form-control @error('id') is-invalid @enderror" id="id"--}}
        {{--                           name="id" value="{{$result->id}}">--}}
        {{--                </div>--}}
        {{--                <div class="form-group col-6">--}}
        {{--                    <label for="title">Run Date</label>--}}
        {{--                    <input type="text" class="form-control @error('runDate') is-invalid @enderror"--}}
        {{--                           id="runDate" name="runDate" value="{{$result->runDate}}">--}}
        {{--                </div>--}}
        {{--                <div class="form-group col-6">--}}
        {{--                    <label for="title">Run Time</label>--}}
        {{--                    <input type="text" class="form-control @error('runTime') is-invalid @enderror"--}}
        {{--                           id="runTime" name="runTime" value="{{$result->runTime}}">--}}
        {{--                </div>--}}

        {{--                <div class="form-group col-6">--}}
        {{--                    <label for="title">Start Latitude</label>--}}
        {{--                    <input type="text" class="form-control @error('startLatitude') is-invalid @enderror"--}}
        {{--                           id="startLatitude" name="startLatitude" value="{{$result->startLatitude}}">--}}
        {{--                </div>--}}

        {{--                <div class="form-group col-6">--}}
        {{--                    <label for="title">Start Longitude</label>--}}
        {{--                    <input type="text" class="form-control @error('startLongitude') is-invalid @enderror"--}}
        {{--                           id="startLongitude" name="startLongitude" value="{{$result->startLongitude}}">--}}
        {{--                </div>--}}

        {{--                <div class="form-group col-6">--}}
        {{--                    <label for="title">End Latitude</label>--}}
        {{--                    <input type="text" class="form-control @error('endLatitude') is-invalid @enderror"--}}
        {{--                           id="endLatitude" name="endLatitude" value="{{$result->endLatitude}}">--}}
        {{--                </div>--}}

        {{--                <div class="form-group col-6">--}}
        {{--                    <label for="title">End Longitude</label>--}}
        {{--                    <input type="text" class="form-control @error('endLongitude') is-invalid @enderror"--}}
        {{--                           id="endLongitude" name="endLongitude" value="{{$result->endLongitude}}">--}}
        {{--                </div>--}}

        {{--    </div>--}}
        {{--    <br>--}}
        {{--    <a class="btn btn-outline-secondary mx-1" href="/results/{{$result->id}}/edit">Edit</a>--}}
        {{--    <a class="btn btn-outline-secondary mx-1" href="/results/">Cancel</a>--}}


        {{--        <iframe--}}
        {{--            src="https://www.google.com/maps/embed?pb=!1m25!1m12!1m3!1d360732.12628213875!2d{{$result->startLatitude }}2805435616!3d{{$result->startLongitude }}53411505135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m10!3e6!4m3!3m2!1d-44.94!2d168.66!4m4!2s{{$result->endLatitude }}%2C%20169.3340!3m2!1d{{$result->endLatitude }}!2d{{$result->endLongitude }}!5e0!3m2!1sen!2sus!4v1622275820266!5m2!1sen!2sus"--}}
        {{--            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>--}}
    </div>
    </div>
@endsection
