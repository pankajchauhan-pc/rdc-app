@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-account-multiple"></i>
          </span> Users
        </h3>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
              <a href="users/add" class="btn btn-gradient-primary"><i class="mdi mdi-account-plus"></i>&nbsp;&nbsp;Add New User</a>
          </ul>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Listing</h4>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Email Verified At</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>

                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->email_verified_at}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                        </tr>
                    @endforeach


                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
