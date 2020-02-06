@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Manage Floors <br> <a href="{{url("FloorAdd")}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Floor</a></div>

                <div class="card-body">



                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Floors Name</th>
                            <th scope="col">Floors Category</th>
                            <th scope="col">Blocks</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach($alldata as $data)
                          <tr>
                            <th scope="row">{{$data->id}}</th>
                            <th scope="row">{{$data->name}}</th>
                            <th scope="row">{{$data->categori_name}}</th>
                            <td>{{$data->blocks}}</td>

                          <th> <a class="btn btn-primary" href="{{url('view_update_floor/'.$data->id)}}" role="button">Edit</a></th>
                          <td> <a class="btn btn-primary" href="{{url('delete_floor/'.$data->id)}}" role="button">Delete</a></td>

                          </tr>
                          @endforeach
                        </tbody>
                      </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
