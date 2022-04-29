@extends('Layout.LayoutFrontend')

@section('Title')
 Vendor Sign In
@endsection

@section('MainContent')
@include('Pages.notification')
<div class="register-box" style="margin-left:500px;padding-top:50px;">
  <div class="register-logo">
    <a href="javascript:void(0);"><b>Vendor</b>&nbsp;Login</a>
  </div>
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Sign In</p>

      <!-- id="frmVendorSignUp" -->
      <form name="frmVendorSignUp" id="frm" action="{{route('VSignIn')}}" accept-charset="UTF-8" method="post">
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
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="chkVendorLoginRemmeber" name="chkVendorLoginRemmeber">
              <label for="remember">
               Remember Me
              </label>
            </div>
          </div> -->
          <div class="col-4">
            <button type="submit" name="subVendorSignIn" id="subVendorSignIn" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div> 
@endsection