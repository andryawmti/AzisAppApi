@extends('layouts.appv2')

@section('page_title')
    Contributoins
@endsection

@section('header_title')
    Contributions
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="cardbox">
            <div class="cardbox-heading">Contribution List</div>
            <div class="cardbox-body">
                <div class="table-responsive">
                    <table class="table-datatable table table-striped table-hover mv-lg" id="datatable1">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th class="short-alpha">Title</th>
                            <th>Added On</th>
                            <th>Added By</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $contributions as $c )
                            <tr class="gradeX">
                                <td>{{ $c->contribution_id }}</td>
                                <td>{{ $c->title }}</td>
                                <td>{{ date('d-m-Y', strtotime($c->created_at)) }}</td>
                                <td>{{ $c->first_name }} {{ $c->last_name }}</td>
                                <td>
                                    @if($c->status == "pending")
                                        <span class="label label-warning">{{ $c->status }}</span>
                                    @elseif($c->status == "approved")
                                        <span class="label label-success">{{ $c->status }}</span>
                                    @else
                                        <span class="label label-danger">{{ $c->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="row" style="text-align: left">
                                        <a style="margin-left: 5px;" href="{{ route('contribution.edit', ['contribution' => $c->id]) }}" class="btn btn-xs btn-info">Detail</a>
                                        <form action="{{ route('contribution.approve', ['contribution' => $c->contribution_id]) }}" method="post">
                                            <input type="hidden" name="_method" value="PUT">
                                            {{ csrf_field() }}
                                            <button type="submit" style="margin-left: 5px;" class="btn btn-xs btn-success">Approve</button>
                                        </form>
                                        <form action="{{ route('contribution.disapprove', ['contribution' => $c->contribution_id]) }}" method="post">
                                            <input type="hidden" name="_method" value="PUT">
                                            {{ csrf_field() }}
                                            <button type="submit" style="margin-left: 5px;" class="btn btn-xs btn-warning">Disapprove</button>
                                        </form>
                                        <form id="delete_{{ $c->contribution_id }}" method="post" action="{{ route( 'contribution.destroy', ['contribution' => $c->contribution_id] ) }}">
                                            @csrf
                                            <input type="hidden" value="DELETE" name="_method">
                                            <a style="margin-left: 5px;" href="#" id="{{ $c->contribution_id }}" onclick="deleteItem(this.id)" class="btn btn-xs btn-danger">Delete</a>
                                        </form>
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