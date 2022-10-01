<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/')}}/admin/register/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('/')}}/admin/register/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}/admin/register/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('/')}}/admin/register/css/style.css">

    <title>Registration</title>
</head>
<body>



<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('/')}}/admin/register/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Registration Form</h3>
                        </div>
                        <form action="{{route('register')}}" method="post" name="register" >
                            @csrf
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Name" name="name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="number"  id="roll" class="form-control" placeholder="Student Roll" name="roll">
                            </div>
                            <div class="form-group">
                                <input type="number" id="t_id" class="form-control" placeholder="Teacher Id" name="t_id">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" class="form-control" placeholder="Password" name="password">
                            </div>

                            <div class="d-flex mb-5 align-items-center mt-5" >

                            <button type="submit" value="register" class="btn btn-block btn-primary">Register</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="{{asset('/')}}/admin/register/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('/')}}/admin/register/js/popper.min.js"></script>
<script src="{{asset('/')}}/admin/register/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}/admin/register/js/main.js"></script>
</body>
</html>