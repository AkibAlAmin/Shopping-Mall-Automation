@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    Welcome...You are logged in!
                    <br>
                    <a href="{{url("manage_category")}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Manage Category</a>
                    <a href="{{url("manage_floor")}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Manage Floors</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
