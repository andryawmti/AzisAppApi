@extends('layouts.appv2')

@section('page_title')
    Dashboard
@endsection

@section('header_title')
    Dashboard
@endsection
@section('main_content')
    <div class="content-heading bg-white">
        <div class="row">
            <div class="col-sm-9">
                <h4 class="m0 text-thin">Welcome to Wisata Kebumen Dashboard</small>
            </div>
            {{--<div class="col-sm-3 text-right d-none d-sm-block">
                <button class="mt-sm btn btn-labeled btn-secondary ripple" type="button">Apps<span class="btn-label btn-label-right"><i class="ion-plus-round"></i></span></button>
            </div>--}}
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-md-6 col-xl-3">
                <div class="cardbox">
                    <div class="cardbox-body pv">
                        <div class="clearfix">
                            <div class="float-left">
                                <h4 class="m0 text-thin">{{ $params->dtotal }}</h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-up-b"></em>Destinations</small>
                            </div>
                            <div class="float-right mt-lg">
                                <div class="sparkline" id="sparkline2" data-line-color="#4caf50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-6 col-xl-3">
                <div class="cardbox">
                    <div class="cardbox-body pv">
                        <div class="clearfix">
                            <div class="float-left">
                                <h4 class="m0 text-thin">{{ $params->ctotal }}</h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-down-b"></em>Contributions</small>
                            </div>
                            <div class="float-right mt-lg">
                                <div class="sparkline" id="sparkline1" data-line-color="#03A9F4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-6 col-xl-3 d-none d-xl-block">
                <div class="cardbox">
                    <div class="cardbox-body pv">
                        <div class="clearfix">
                            <div class="float-left">
                                <h4 class="m0 text-thin">{{ $params->utotal }}</h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-up-b"></em>User</small>
                            </div>
                            <div class="float-right mt-lg">
                                <div class="sparkline" id="sparkline3" data-line-color="#ab47bc"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-6 col-xl-3 d-none d-xl-block">
                <div class="cardbox">
                    <div class="cardbox-body pv">
                        <div class="clearfix">
                            <div class="float-left">
                                <h4 class="m0 text-thin">{{ $params->atotal }}</h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-up-b"></em>Administrator</small>
                            </div>
                            <div class="float-right mt-lg">
                                <div class="sparkline" id="sparkline4" data-line-color="#e91e63"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cardbox">
                            <!-- START table-responsive-->
                            <div class="col-md-12">
                                <h6>Last 5 Added Destinations</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Title</th>
                                        <th>Picture</th>
                                        <th class="text-right">Added At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($params->lastdes as $d)
                                        <tr>
                                            <td class="va-middle"><span class="badge bg-indigo-500">{{ $d->id }}</span></td>
                                            <td>
                                                <p class="m0">{{ $d->title }}<br><small class="text-thin"></small></p>
                                            </td>
                                            <td class="va-middle"><img class="rounded-circle thumb32" src="@if($d->picture){{ url($d->picture) }}@else {{ url('centric/images/pic2.jpg') }} @endif" alt="Picture"></td>
                                            <td class="text-right va-middle">{{ date("d-m-Y", strtotime($d->created_at)) }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- END table-responsive-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cardbox">
                            <div class="col-md-12">
                                <h6>Last 5 Registered Users</h6>
                            </div>
                            <!-- START table-responsive-->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th class="text-right">Registered At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $params->lastuser as $u )
                                            <tr>
                                                <td class="va-middle"><span class="badge bg-info">{{ $u->id }}</span></td>
                                                <td>
                                                    <p class="m0">{{ $u->first_name }} {{ $u->last_name }}<br><small class="text-thin">{{ $u->email }}</small></p>
                                                </td>
                                                <td class="va-middle"><img class="rounded-circle thumb32" src="@if($u->photo){{ url($u->photo) }}@else {{ url('centric/images/01.jpg') }} @endif" alt="Picture"></td>
                                                <td class="text-right va-middle">{{ date("d-m-Y", strtotime($u->created_at)) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- END table-responsive-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection