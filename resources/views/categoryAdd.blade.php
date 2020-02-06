@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Category</div>


            <form action="{{url("save_category")}}" method="POST">

                @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Floor Category</label>
                      <input type="text" class="form-control" name="floor_category" placeholder="Enter Floor Category">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Category</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
