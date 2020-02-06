@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Floor</div>



            <form action="{{url("update_floor")}}" method="POST">

                @csrf
                    <div class="form-group">
                        <input type="text" hidden value='{{$users->id}}' class="form-control" name="id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Floor Category</label>
                        <select name="category">
                            @foreach($allCategories as $data)
                        <option value="{{$data->id}}">{{$data->categori_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Block</label>
                        <select name="blocks" value='{{$users->blocks}}'>
                          <option value="East">East</option>
                          <option value="West">West</option>
                          <option value="North">North</option>
                          <option value="South">South</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Floor Name</label>
                        <input type="text" value='{{$users->name}}' class="form-control" name="floor_name" required placeholder="Enter Floor Name">
                      </div>




                    <button type="submit" class="btn btn-primary">Update Floor</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
