<!doctype html>
<html lang="en">
<head>
    <title>Admin Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('/')}}admin/css/style.css">

</head>
<body class="img js-fullheight" style="background-image: url({{asset('/')}}admin/images/bg_p.jpg);">
<section class="ftco-section">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-3  ">
                <h1 class="heading-section pt-5 ">Welcome To TC_CSE-infoHub</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Admin Login</h3>

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{route('login')}}" class="signin-form">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email"required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Log In</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="{{ route('password.request') }}" style="color: #fff">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('/')}}admin/js/jquery.min.js"></script>
<script src="{{asset('/')}}admin/js/popper.js"></script>
<script src="{{asset('/')}}admin/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}admin/js/main.js"></script>

</body>
</html>

