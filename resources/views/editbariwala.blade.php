Hurreeee...

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">



    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Laravel</title>

    <style>

@import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


body{
    margin: 0;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #212529;
    text-align: left;
    background-color: #f5f8fa;
}

.navbar-laravel
{
    box-shadow: 0 2px 4px rgba(0,0,0,.04);
}

.navbar-brand , .nav-link, .my-form, .login-form
{
    font-family: Raleway, sans-serif;
}


.my-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.my-form .row
{
    margin-left: 0;
    margin-right: 0;
}

.login-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.login-form .row
{
    margin-left: 0;
    margin-right: 0;
}

    </style>


    <script>

function validform() {

var a = document.forms["my-form"]["full-name"].value;
var b = document.forms["my-form"]["email-address"].value;
var c = document.forms["my-form"]["username"].value;
var d = document.forms["my-form"]["permanent-address"].value;
var e = document.forms["my-form"]["nid-number"].value;

if (a==null || a=="")
{
    alert("Please Enter Your Full Name");
    return false;
}else if (b==null || b=="")
{
    alert("Please Enter Your Email Address");
    return false;
}else if (c==null || c=="")
{
    alert("Please Enter Your Username");
    return false;
}else if (d==null || d=="")
{
    alert("Please Enter Your Permanent Address");
    return false;
}else if (e==null || e=="")
{
    alert("Please Enter Your NID Number");
    return false;
}

}

    </script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="#">Bariwala Information</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    </div>
    </div>
</nav>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Update Register</div>
                        <div class="card-body">
                            <form action="{{url('update_viewinfo')}}" method="POST">

                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <label for="nid_number" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card">NID</abbr> Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nid_number" class="form-control" name="nid-number" value="{{$alldata->Bid}}">
                                        <input type="hidden" id="nid_number" class="form-control" name="id-number" value="{{$alldata->id}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full-name" value="{{$alldata->Bname}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Present Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="present_address" name="present-address" class="form-control" value="{{$alldata->Badd}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" name="phone-number" class="form-control" value="{{$alldata->Bcontact}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email-address" value="{{$alldata->Bmail}}">
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Submit
                                        </button>
                                    </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Update
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
