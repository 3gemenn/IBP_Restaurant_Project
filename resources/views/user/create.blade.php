@extends('layouts.adminpage')

@section('title','Add User')


@section('_content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Add User </h3>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{route('createUser')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input id="name" type="text"  name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Lastname</label>
                            <input id="name" type="text"  name="lastName" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input id="name" type="text"  name="phone" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input id="name" type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input id="name" type="text"  name="password" class="form-control">
                        </div>
                        <b>Role:</b>
                        <input id="role" type="radio" value="Customer" name="role"> Customer
                        <input id="role" type="radio" value="Admin" name="role"> Admin
                        <br><br>

                        <button type="submit" class="btn btn-primary mr-2"> Add User </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
