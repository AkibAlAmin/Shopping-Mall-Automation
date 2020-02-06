@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Manage Category <br> <a href="{{url("categoryAdd")}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Categoty</a></div>

                <div class="card-body">


                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Category Name</th>
                          </tr>
                        </thead>
                        <tbody>


                          @foreach($alldata as $data)
                          <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->categori_name}}</td>

                          <th> <a class="btn btn-primary" href="{{url('view_update_category/'.$data->id)}}" role="button">Edit</a></th>
                          <td> <a class="btn btn-primary" href="{{url('delete_category/'.$data->id)}}" role="button">Delete</a></td>

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
