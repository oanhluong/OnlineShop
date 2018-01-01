@extends('admin.layout.master')
@section('page-header')
User Management
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                List of Users
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $k => $user)
                               <tr class="{{$k % 2 == 0 ? 'odd' : 'even'}}">
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    <a href="{{route('admin-user-create')}}" class="btn btn-outline btn-primary btn-xs">Create new</a>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection