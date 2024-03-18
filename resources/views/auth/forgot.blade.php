@extends('layouts.custome')

@section('auth')

<div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="login-brand">
          <img src="{{asset('assets/img/bandaradeo/deo.jpg')}}" alt="logo" width="100" class="shadow-light rounded-circle">
        </div>

        <div class="card card-danger">
          <div class="card-header"><h4 class="text-danger text-center">Forgot Password</h4></div>

          <div class="card-body">
            <p class="text-muted">We will send a link to reset your password</p>
            <form method="POST">
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-danger btn-lg btn-block" tabindex="4">
                  Forgot Password
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="simple-footer">
          Copyright &copy; Bandara Deo Airport <?= date('Y')?>
        </div>
      </div>
    </div>
  </div>

@endsection
