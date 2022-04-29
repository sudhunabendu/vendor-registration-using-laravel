@extends('Layout.LayoutVendor')

@section('Title')
 Vendor - Change Password
@endsection

@section('MainContent')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Change Passowrd</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Password</li>
        </ol>
        </div>
    </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-6" style="margin-left:250px;">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Password</h3>
            </div>

            <form name="frmVendorChangePassword" id="frmVendorChangePassword" action="{{route('VUpdatePassword')}}" accept-charset="UTF-8" method="post">
            @csrf 
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="hidden" name="txtUserID" id="txtUserID" value="<?php echo session()->get('VendorId');?>" readonly placeholder="Enter email" />
                    <input type="email" class="form-control" name="txtEmailID" id="txtEmailID" value="<?php echo session()->get('VendorEmail');?>" readonly placeholder="Enter email" />
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="txtPassword" id="txtPassword"  placeholder="Password" required />
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        </div>         
    </div>
    </div>
</section>
@endsection