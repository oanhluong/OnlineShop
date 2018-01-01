@extends('admin.layout.master')
@section('page-header')
Create User
@endsection

@section('content')
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                User Information
            </div>
            <div class="panel-body">
                <form action="{{route('admin-user-create')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="repassword">Re-password:</label>
                        <input class="form-control" type="password" name="repassword" id="repassword" placeholder="Re-Password">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection