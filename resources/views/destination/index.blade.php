@extends('layouts.appv2')

@section('page_title')
Destinations
@endsection

@section('header_title')
Destinations
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="cardbox">
            <div class="cardbox-heading">Destination List</div>
            <div class="cardbox-body">
                <div class="form-group">
                    <a href="{{ route('destination.create') }}" class="btn btn-primary">Create or Add New</a>
                </div>
                <div class="table-responsive">
                    <table class="table-datatable table table-striped table-hover mv-lg" id="datatable1">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th class="short-alpha">Name</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $destinations as $d )
                        <tr class="gradeX">
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->title }}</td>
                            <td>{{ $d->latitude }}</td>
                            <td>{{ $d->longitude }}</td>
                            <td>{{ date('d-m-Y H:i:s', strtotime($d->created_at)) }}</td>
                            <td>@if( $d->updated_at ) {{ date('d-m-Y H:i:s', strtotime($d->updated_at)) }} @else - @endif</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-4"><a href="{{ route('destination.edit', ['destination' => $d->id]) }}" class="btn btn-xs btn-info">Edit</a></div>
                                    <div class="col-md-4">
                                        <form id="delete_{{ $d->id }}" method="post" action="{{ route( 'destination.destroy', ['destination' => $d->id] ) }}">
                                            @csrf
                                            <input type="hidden" value="DELETE" name="_method">
                                            <a href="#" id="{{ $d->id }}" onclick="deleteItem(this.id)" class="btn btn-xs btn-danger">Delete</a>
                                        </form>
                                    </div>
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