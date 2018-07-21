@extends('layouts.appv2')

@section('page_title')
    User Management
@endsection

@section('header_title')
    User Management
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="cardbox">
            <div class="cardbox-heading">Registered User List</div>
            <div class="cardbox-body">
                <div class="form-group">
                    <a href="{{ route('user.create') }}" class="btn btn-primary">Create or Add New</a>
                </div>
                <div class="table-responsive">
                    <table class="table-datatable table table-striped table-hover mv-lg" id="datatable1">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th class="short-alpha">Name</th>
                            <th>Email</th>
                            <th>Birth Date</th>
                            <th>Registered At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $users as $u )
                            <tr class="gradeX">
                                <td>{{ $u->id }}</td>
                                <td>{{ $u->first_name }} {{ $u->last_name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ date('d-m-Y', strtotime($u->birth_date)) }}</td>
                                <td>{{ date('d-m-Y H:i:s', strtotime($u->created_at)) }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4"><a href="{{ route('user.edit', ['user' => $u->id]) }}" class="btn btn-xs btn-info">Edit</a></div>
                                        <div class="col-md-4"><a href="#" class="btn btn-xs btn-danger">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection