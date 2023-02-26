@extends('layout.navbar')
@section('content')
<style>
body
{
    background-image: url(https://www.racksolutions.com/news//app/uploads/AdobeStock_90603827-scaled.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    
}
.account-block {
    background-image: url(https://bootdey.com/img/Content/bg1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    position: relative;
}
.account-block .overlay {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    position: relative;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.4);
}
.account-block .account-testimonial {
    text-align: center;
    color: #fff;
    position: absolute;
    margin: 0 auto;
    padding: 0 1.75rem;
    bottom: 3rem;
    left: 0;
    right: 0;
}

.text-theme {
    color: #5369f8 !important;
}

.btn-theme {
    background-color: #5369f8;
    border-color: #5369f8;
    color: #fff;
}
#block{
    padding: 75px;
}

</style>
<div id="main-wrapper" class="container">
    <div id="block" class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-5">
                                    <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                </div>

                                <h6 class="h5 mb-0">Welcome back!</h6>
                                <p class="text-muted mt-2 mb-5">Enter your email address and password to access admin panel.</p>

                                <form method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label for="Email">Email address</label>
                                        <input type="email" class="form-control" name="email" required value="{{old('email')}}">
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="Password">Password</label>
                                        <input type="password" class="form-control" name="password" value="{{old('password')}}" required>
                                    </div>
                                    <div class="row justify-content-center">
                                        <input type="submit" class="btn btn-outline-primary" placeholder="Login">
                                        <a style="text-align:center" href="#l" class="forgot-link float-right text-primary">Forgot password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 d-none d-lg-inline-block">
                            <div class="account-block rounded-right">
                                <div class="overlay rounded-right"></div>
                                <div class="account-testimonial">
                                    <h4 class="text-white mb-4">Hello!</h4>
                                    <p class="lead text-white">"The best way to learn something new is practice"</p>
                                    <p>- Admin User</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

            <h2 class="lead text-white text-center mt-3 mb-0">Don't have an account? <a href="/register" class="text-primary ml-1">register</a></h2>

            <!-- end row -->

        </div>
        <!-- end col -->
    </div>
    <!-- Row -->
</div>
    </div>
@endsection


<footer class="text-center text-white" style="background-color: #f1f1f1;   position: fixed;
   bottom: 0;
   width: 100%;">

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:<b> Diseñado por Adrian</b>
  </div>
  <!-- Copyright -->
</footer>