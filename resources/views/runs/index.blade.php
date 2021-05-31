@extends('layouts.app')
@section('content')


    {{--    <div class="row">--}}
    {{--        <div class="col-md-6">--}}
    {{--            <div class="form-group">--}}
    {{--                Email: <input name="email" type="text" class="form-control" placeholder=" " value="" width=50%>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <p>--}}
    {{--        <div class="col-md-6">--}}
    {{--            <div class="form-group">--}}
    {{--                Password: <input name="password" type="password" class="form-control" placeholder=" " value="" width=50%/>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}



    <div class="row ">
        <div class="col-md-12">

            <table align="center" cellpadding="10" class="stdtable">
                <tr>
                    <th>Run ID</th>
                    <th>Run Name</th>
                    <th>Run Description</th>
{{--                    <th>New Longitude</th>--}}
{{--                    <th>End Latitude</th>--}}
{{--                    <th>End Longitude</th>--}}
                    <th></th>
                </tr>
                @foreach($runs as $run)
                    <tr>
                        <td>{{$run->id}}</td>
                        <td>{{$run->runName}}</td>
                        <td>{{$run->runDesc }}</td>
{{--                        <td>{{$run->longitude }}</td>--}}
{{--                        <td>{{$run->startLongitude }}</td>--}}
{{--                        <td>{{$run->endLatitude }}</td>--}}
{{--                        <td>{{$run->endLongitude }}</td>--}}
                        <td>
                            <form action="/runs/{{$run->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                @auth

                                <a class="btn btn-outline-primary mx-1 " href="/results/{{$run->id}}">Show result</a>
{{--                                <a class="btn btn-outline-secondary mx-1 " href="/runs/{{$run->id}}/showmap">Show Map</a>--}}
{{--                                @auth--}}
{{--                                    <a class="btn btn-outline-secondary mx-1" href="/runs/{{$run->id}}/edit">Edit</a>--}}
                                    <button type="submit" title="delete" class="btn btn-outline-primary mx-1">Delete</button>
                                @endauth
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <br>
            @auth
                <a class="btn btn-outline-primary mx-1" href="/results/create">Create</a>
            @endauth
            <br>        </div>
    </div>
    </div>
@endsection
