@extends('Layout.LayoutVendor')

@section('Title')
 Vendor - Profile
@endsection

@section('MainContent')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Update Profile</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
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
            <h3 class="card-title">Profile</h3>
            </div>

            <form name="frmVendorUpdateProfile" id="frmVendorUpdateProfile" action="{{route('VUpdateProfile')}}" accept-charset="UTF-8" method="post">
            @csrf 
                <div class="card-body">
                    <div class="form-group">
                        <label for="txtUserID">Email address</label>
                        <input type="hidden" name="txtUserID" id="txtUserID" value="<?php echo session()->get('VendorId');?>" readonly placeholder="Enter email" />
                        <input type="email" class="form-control" name="txtEmailID" id="txtEmailID" value="<?php echo session()->get('VendorEmail');?>" readonly placeholder="Enter email" />
                    </div>
                    @foreach($data as $item)
                    <div class="form-group">
                        <label for="txtFullName">Full Name</label>
                        <input type="text" class="form-control" name="txtFullName" id="txtFullName"  value="{{ $item->UserFullName }}" placeholder="Full Name" required />
                    </div>
                    <div class="form-group">
                        <label for="txtPhone">Phone</label>
                        <input type="number" class="form-control" name="txtPhone" id="txtPhone"  value="{{ $item->UserPhone }}" placeholder="Phone" required />
                    </div>
                    @endforeach
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