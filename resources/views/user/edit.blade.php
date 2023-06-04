@extends('layouts.adminpage')

@section('title','User')
@section('_content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> User Edit </h3>

        </div>
        <form action="{{ route('editUser')}}" method="POST" >
            @csrf
            <div>
                <div class="card">
                    <div class="card-body">
                        <input type="hidden" name="id" value="{{$data->id}}"/>
                            <div class="form-group">
                                <label>Name</label>
                                <input id="name" type="text" value="{{$data->name}}" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Lastname</label>
                                <input id="lastName" type="text" value="{{$data->lastName}}" name="lastName" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>phone</label>
                                <input id="phone" type="text" value="{{$data->phone}}" name="phone" class="form-control">
                            </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input id="email" type="text" value="{{$data->email}}" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="text" value="{{$data->password}}" name="password" class="form-control">
                        </div>

                        <b>Role:</b>
                        <input id="role" type="radio" value="Customer" name="role"> Customer
                        <input id="role" type="radio" value="Admin" name="role"> Admin
                        <br><br>

                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update User</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>

    </div>




@endsection

