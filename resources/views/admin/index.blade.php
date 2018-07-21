@extends('layouts.appv2')

@section('page_title')
    Admin Management
@endsection

@section('header_title')
    Admin Management
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="cardbox">
            <div class="cardbox-heading">Admin List</div>
            <div class="cardbox-body">
                <div class="form-group">
                    <a href="{{ route('admin.create') }}" class="btn btn-primary">Create or Add New</a>
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
                        @foreach( $admins as $a )
                            <tr class="gradeX">
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->first_name }} {{ $a->last_name }}</td>
                                <td>{{ $a->email }}</td>
                                <td>@if($a->birth_date){{ date('d-m-Y', strtotime($a->birth_date)) }}@else - @endif</td>
                                <td>{{ date('d-m-Y H:i:s', strtotime($a->created_at)) }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4"><a href="{{ route('admin.edit', ['admin' => $a->id]) }}" class="btn btn-xs btn-info">Edit</a></div>
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