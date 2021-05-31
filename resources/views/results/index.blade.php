@extends('layouts.app')
@section('content')

    <div class="row ">
        <div class="col-md-12">

            <table align="center" cellpadding="10" class="stdtable">
                <tr>
                    <th>result id</th>
                    <th>Run Date</th>
                    <th>Run Time</th>
                    <th>Start Latitude</th>
                    <th>Start Longitude</th>
                    <th>End Latitude</th>
                    <th>End Longitude</th>
                    <th>Actions</th>
                </tr>
                @foreach($results as $result)
                    <tr>
                        <td>{{$result->id}}</td>
                        <td>{{$result->runDate}}</td>
                        <td>{{$result->runTime }}</td>
                        <td>{{$result->startLatitude}}</td>
                        <td>{{$result->startLongitude}}</td>
                        <td>{{$result->endLatitude }}</td>
                        <td>{{$result->endLongitude }}</td>
                        <td>
                            <form action="/results/{{$result->id}}" method="POST">
                                @method('DELETE')
                                @csrf

                                <a class="btn btn-outline-primary mx-1 " href="/results/{{$result->id}}">Result</a>

                                @auth
                                    <a class="btn btn-outline-primary mx-1" href="/results/{{$result->id}}/edit">Edit</a>
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

        </div>
    </div>
    </div>
@endsection
