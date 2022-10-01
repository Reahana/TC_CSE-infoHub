<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>User Login Page</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="./assets/css/login.css"/>
</head>
<body>
<div class="container user-login">
    <div class="row">
        <div class="col-md-5 user-login-left">
            <h5>Be a Builder</h5>
            <img src="./assets/img/login-images/Logo1.png" alt="" >
            <h6>Dept of CSE</h6>
            <br>
            <h1 >Welcome To <br/> TC_CSE-infoHub</h1>
            <br><br>
            <h6 class="text-warning">Visit our College and Club Website -</h6>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <a href="https://www.tejgaoncollege.edu.bd/" target="blank" class="mr-3"><img src="./assets/img/login-images/clg_logo.png"  alt="" ></a>
                    <a href="https://www.tcprogramming.club/" target="blank" class="mr-3"><img src="./assets/img/login-images/clubLogo.jpg"  alt="" ></a>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="col-md-7 user-login-right">
            <ul class="nav nav-tabs nav-justified " id="myTab" role="tablist">
                <li class="nav-item ">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Teacher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link "  id="index-tab" data-toggle="tab" href="#index" role="tab" aria-controls="profile" aria-selected="false">Guest_T</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="user-login-heading">Student Login</h3>
                    <form class="form-horizontal user-login-form" action="{{route('student-login')}}" method="POST" name="student_login">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Student Roll :</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" placeholder="Enter Your Class Roll" value="" name="roll" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Password :</label>
                            <div class="col-md-8">
                                <input  type="password" class="form-control" placeholder="Password " value=""  name="password" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <button class="btn btn-outline-success btn-block mt-4 font-weight-bold" type="submit">Login</button>
                            </div>
                        </div>

                        <div class="ibox-body">
                            @if($message = Session::get('message'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{$message}}!</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                          
                                 </div>
                            @endif
                        </div>
                        
                    </form>
                </div>
                <div class="tab-pane fade show " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="user-login-heading">Teacher Login</h3>
                    <div class=" user-login-form">
                        <form action="{{route('teacher-login')}}" class="form-horizontal " method="POST" name="teacher_login">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Teacher ID :</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" placeholder="Enter Your ID" value=""  name="t_id" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Password :</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" placeholder="Password " value=""  name="password" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <button class="btn btn-outline-primary btn-block float-right mt-4 font-weight-bold  " type="submit">Login</button>
                                </div>
                            </div>

                            <div class="ibox-body">
                                @if($message = Session::get('message'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{$message}}!</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade show " id="index" role="tabpanel" aria-labelledby="index-tab">
                    <h3  class="user-login-heading">Guest Teacher Login</h3>
                    <div class=" user-login-form">
                        <form action="{{route('guest-login')}}" class="form-horizontal " method="POST" name="guest-login">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Teacher ID :</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" placeholder="Enter Your ID" value=""  name="g_id" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Password :</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" placeholder="Password " value=""  name="password" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <button class="btn btn-outline-info btn-block float-right mt-4 font-weight-bold  " type="submit">Login</button>
                                </div>
                            </div>

                            <div class="ibox-body">
                                @if($message = Session::get('message'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{$message}}!</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/jquery-3.6.0.js"></script>
<script src="./assets/js/bootstrap.js"></script>

</body>
</html>