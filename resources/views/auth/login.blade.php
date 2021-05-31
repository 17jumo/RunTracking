@extends('layouts.app')
@section('content')

    <div class="form-content">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        Email: <input name="email" type="text" class="form-control" placeholder=" " value="" width=50%>
                    </div>
                </div>
                <p>
                <div class="col-md-6">
                    <div class="form-group">
                        Password: <input name="password" type="password" class="form-control" placeholder=" " value="" width=50%/>
                    </div>
                </div>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary mx-1" >
        </form>
    </div>
    </div>
    </div>
@endsection


