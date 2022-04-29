@extends('Layout.LayoutBackend')

@section('Title')
 Admin - Manage User
@endsection

@section('MainContent')
 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Active</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $item)
                  <tr>
                    <td>{{ $item->UserId }}</td>
                    <td>{{ $item->UserFullName }}</td>
                    <td>{{ $item->UserEmail }}</td>
                    <td>{{ $item->RoleName }}</td>
                    <td>{{ ($item->IsActive == 1) ? 'Yes' : 'No' }}</td>
                    <td><a href="{{ url('/Admin/' . $item->UserId . '/' . $item->IsActive . '/UserStatusUpdate') }}" class="badge {{ ($item->IsActive == 1) ? 'bg-danger' : 'bg-success'  }}" style="cursor:pointer">{{ ($item->IsActive == 1) ? 'Block' : 'Activate' }}</span></td>
                  </tr> 
                  @endforeach
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



@endsection