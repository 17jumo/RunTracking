@extends('layouts.app')
@section('content')

    <div class="form-content">
        <form method="POST" action="/runs">

            @csrf

            <div class="row">

                <div class="form-group col-12">
                    <label for="title">Run Name</label>
                    <input type="text" class="form-control @error('runName') is-invalid @enderror" id="runName" name="runName" value="">
                </div>
                <div class="form-group col-12">
                    <label for="title">Run Desc</label>
                    <input type="text" class="form-control @error('runDesc') is-invalid @enderror" id="runDesc" name="runDesc" value="">
                </div>


            </div>

            <br>
            <input class="btn btn-primary" type="submit" value="Submit">
            <a class="btn btn-warning mx-1" href="/runs/">Cancel</a>
        </form>


    </div>

@endsection

