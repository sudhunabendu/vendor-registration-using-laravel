@extends('Layout.LayoutBlank')

@section('Title')
 Admin - Login
@endsection

@section('MainContent')
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0);"><b>VRP</b>&nbsp;Admin</a>
  </div>
  <div class="card">
   @include('Pages.notification')

    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign In</p>
      <form name="frmAdminLogin" id="frmAdminLogin" action="{{route('AdminLogin')}}" accept-charset="UTF-8" method="post">
        @csrf 
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="txtEmail" name="txtEmail" required  />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="txtPassword" name="txtPassword" required />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="chkAdminLoginRemmeber" name="chkAdminLoginRemmeber" />
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" name="subAdminLogin" id="subAdminLogin" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection