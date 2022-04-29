@extends('Layout.LayoutFrontend')

@section('Title')
 Vendor Sign Up
@endsection

@section('MainContent')
<div class="register-box" style="margin-left:500px;padding-top:50px;">
  <div class="register-logo">
    <a href="javascript:void(0);"><b>Vendor</b>&nbsp;Registration</a>
  </div>
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Sign Up</p>
      <!-- id="frmVendorSignUp" -->
      <form name="frmVendorSignUp" id="frm" action="{{route('VSignUp')}}" accept-charset="UTF-8" method="post">
        @csrf 
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" id="txtFullName" name="txtFullName" required/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="txtEmail" name="txtEmail" required  />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control phone" placeholder="Phone" id="txtPhone" name="txtPhone" required  />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
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
              <input type="checkbox" id="chkAgreeTerms" name="chkAgreeTerms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div> -->
          <div class="col-4">
            <button type="submit" name="subVendorSignUp" id="subVendorSignUp" class="btn btn-primary btn-block">Sign Up</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div> 
@endsection