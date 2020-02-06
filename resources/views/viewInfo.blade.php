

@foreach($alldata as $data)

{{$data->Bid}}</br>
{{$data->Bname}}</br>
{{$data->Badd}}</br>
{{$data->Bcontact}}</br>
{{$data->Bmail}}</br>

<div>
<a href="{{url('editbariwala/'.$data->id)}}">Submit</a>
</div>

<div>
    <a href="{{url('editbariwala/'.$data->id)}}">Edit</a>
</div>

</br>


@endforeach

