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
                <h4 class="m0 text-thin">Welcome to Centric dashboard</h4><small>Bootstrap admin dashboard template</small>
            </div>
            <div class="col-sm-3 text-right d-none d-sm-block">
                <button class="mt-sm btn btn-labeled btn-secondary ripple" type="button">Apps<span class="btn-label btn-label-right"><i class="ion-plus-round"></i></span></button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-md-6 col-xl-3">
                <div class="cardbox">
                    <div class="cardbox-body pv">
                        <div class="clearfix">
                            <div class="float-left">
                                <h4 class="m0 text-thin">350</h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-up-b"></em>New visitors</small>
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
                                <h4 class="m0 text-thin">10,200</h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-down-b"></em>Page views</small>
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
                                <h4 class="m0 text-thin">880</h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-up-b"></em>Last income</small>
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
                                <h4 class="m0 text-thin">780</h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-up-b"></em>Reservations</small>
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
            <div class="col-xl-9 col-lg-12">
                <div class="row">
                    <div class="col-xl-8 col-xs-12">
                        <div class="cardbox">
                            <div class="cardbox-heading">
                                <!-- START dropdown-->
                                <div class="float-right dropdown">
                                    <button class="btn btn-secondary btn-flat btn-flat-icon ripple" type="button" data-toggle="dropdown"><em class="ion-android-more-vertical"></em></button>
                                    <ul class="dropdown-menu md-dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Last 30 days</a></li>
                                        <li><a href="#">Last week</a></li>
                                        <li><a href="#">Last year</a></li>
                                    </ul>
                                </div>
                                <!-- END dropdown-->
                                <div class="cardbox-title">Analytic board</div><small>Nulla commodo blandit cursus.</small>
                            </div>
                            <div class="cardbox-body">
                                <div class="float-right pr-sm btn-group btn-group-sm" role="group" aria-label="...">
                                    <button class="btn btn-secondary btn-sm btn-secondary" type="button">Total</button>
                                    <button class="btn btn-secondary btn-sm btn-secondary" type="button">Average</button>
                                </div>
                                <div class="flot-chart flot-chart-lg flot-legend-left" id="flot-main-spline"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xs-12">
                        <div class="cardbox">
                            <div class="cardbox-heading">
                                <div class="float-right">
                                    <p class="m0 text-muted"><em class="mr-sm ion-arrow-up-b"></em>20%</p>
                                </div>
                                <div class="cardbox-title">Earnings</div><small>Based on last month analytics.</small>
                            </div>
                            <div class="cardbox-body">
                                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                    <button class="btn btn-secondary btn-sm btn-secondary" type="button">2015</button>
                                    <button class="btn btn-secondary btn-sm btn-secondary" type="button">2016</button>
                                </div>
                                <div class="flot-chart" id="flot-stacked-chart" data-height="245px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-4">
                        <div class="cardbox">
                            <div class="cardbox-heading">
                                <div class="float-right"><span class="mr"><em class="ion-record spr text-primary"></em><small class="va-middle">2016</small></span><span><em class="ion-record spr text-success"></em><small class="va-middle">2015</small></span></div>
                                <div class="cardbox-title">Sales</div>
                            </div>
                            <div class="cardbox-body">
                                <div class="flot-chart flot-chart-md" id="flot-bar-chart" data-height="235"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-8">
                        <div class="cardbox">
                            <!-- START table-responsive-->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project</th>
                                        <th>Completion</th>
                                        <th class="text-right">Trend</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="va-middle"><span class="badge bg-pink-500">1</span></td>
                                        <td>
                                            <p class="m0">Vestibulum<br><small class="text-thin">Nunc posuere eleifend lobortis.</small></p>
                                        </td>
                                        <td class="va-middle">50%</td>
                                        <td class="text-right va-middle"><em class="ion-arrow-graph-up-right text-success"></em></td>
                                    </tr>
                                    <tr>
                                        <td class="va-middle"><span class="badge bg-purple-400">2</span></td>
                                        <td>
                                            <p class="m0">Runfaster<br><small class="text-thin">Nunc posuere eleifend lobortis.</small></p>
                                        </td>
                                        <td class="va-middle">30%</td>
                                        <td class="text-right va-middle"><em class="ion-arrow-graph-down-right text-warning"></em></td>
                                    </tr>
                                    <tr>
                                        <td class="va-middle"><span class="badge bg-indigo-500">3</span></td>
                                        <td>
                                            <p class="m0">Medic Healthcare<br><small class="text-thin">Nunc posuere eleifend lobortis.</small></p>
                                        </td>
                                        <td class="va-middle">80%</td>
                                        <td class="text-right va-middle"><em class="ion-arrow-graph-up-right text-success"></em></td>
                                    </tr>
                                    <tr>
                                        <td class="va-middle"><span class="badge bg-info">4</span></td>
                                        <td>
                                            <p class="m0">Videotubeyou<br><small class="text-thin">Nunc posuere eleifend lobortis.</small></p>
                                        </td>
                                        <td class="va-middle">50%</td>
                                        <td class="text-right va-middle"><em class="ion-arrow-graph-down-right text-warning"></em></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END table-responsive-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-12">
                <!-- Activity feed-->
                <div class="cardbox">
                    <div class="cardbox-heading">
                        <!-- START dropdown-->
                        <div class="float-right dropdown">
                            <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown"><em class="ion-android-more-vertical"></em></button>
                            <ul class="dropdown-menu md-dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="#">Last 30 days</a></li>
                                <li><a href="#">Last week</a></li>
                                <li><a href="#">Last year</a></li>
                            </ul>
                        </div>
                        <!-- END dropdown-->
                        <div class="cardbox-title">Activity</div><small>What's people doing right now</small>
                    </div>
                    <div class="cardbox-body bb">
                        <p class="float-left mr"><a href="#"><img class="rounded-circle thumb32" src="{{ asset('centric/images/04.jpg') }}" alt="User"></a></p>
                        <div class="oh">
                            <p><strong class="spr">Adam</strong><span class="spr">posted in</span><a href="#">Material</a></p>
                            <p class="bl pl"><i>That's awesome!</i></p>
                            <div class="clearfix">
                                <div class="float-left text-muted"><em class="ion-android-time mr-sm"></em><span>2 hours ago</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="cardbox-body bb">
                        <p class="float-left mr"><a href="#"><img class="rounded-circle thumb32" src="{{ asset('centric/images/06.jpg') }}" alt="User"></a></p>
                        <div class="oh">
                            <p><strong class="spr">Dora</strong><span>added a new task</span></p>
                            <p><em class="ion-calendar icon-fw"></em><a href="#">Start migration</a></p>
                            <div class="clearfix">
                                <div class="float-left text-muted"><em class="ion-android-time mr-sm"></em><span>3 hours ago</span></div>
                                <div class="float-right"><span>2</span><em class="ion-star ml-sm text-warning"></em></div>
                            </div>
                        </div>
                    </div>
                    <div class="cardbox-body bb">
                        <p class="float-left mr"><a href="#"><img class="rounded-circle thumb32" src="{{ asset('centric/images/07.jpg') }}" alt="User"></a></p>
                        <div class="oh">
                            <p><strong class="spr">Kathryn</strong><span class="spr">published</span><a href="#">Trip</a></p>
                            <p><a href="#"><img class="mr-sm thumb48" src="{{ asset('centric/images/pic1.jpg') }}" alt="Pic"></a><a href="#"><img class="mr-sm thumb48" src="{{ asset('centric/images/pic2.jpg') }}" alt="Pic"></a></p>
                            <div class="clearfix">
                                <div class="float-left text-muted"><em class="ion-android-time mr-sm"></em><span>4 hours ago</span></div>
                                <div class="float-right"><span>2</span><em class="ion-ios-heart ml-sm text-danger"></em></div>
                            </div>
                        </div>
                    </div>
                    <div class="cardbox-body bb">
                        <p class="float-left mr"><a href="#"><img class="rounded-circle thumb32" src="{{ asset('centric/images/02.jpg') }}" alt="User"></a></p>
                        <div class="oh">
                            <p><strong class="spr">Daniel</strong><span class="spr">joined to</span><a href="#">Group</a></p>
                            <p>
                                        <span class="image-list">
                                            <a href="#"><img class="rounded-circle thumb32" src="{{ asset('centric/images/03.jpg') }}" alt="User"></a>
                                            <a href="#"><img class="rounded-circle thumb32" src="{{ asset('centric/images/04.jpg') }}" alt="User"></a>
                                            <a href="#"><img class="rounded-circle thumb32" src="{{ asset('centric/images/05.jpg') }}" alt="User"></a>
                                            <a href="#"><img class="rounded-circle thumb32" src="{{ asset('centric/images/07.jpg') }}" alt="User"></a>
                                            <strong><a class="ml-sm link-unstyled" href="#">+3</a></strong>
                                        </span>
                            </p>
                            <div class="clearfix">
                                <div class="float-left text-muted"><em class="ion-android-time mr-sm"></em><span>yesterday</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="cardbox-body bb">
                        <p class="float-left mr"><a href="#"><img class="rounded-circle thumb32" src="{{ asset('centric/images/03.jpg') }}" alt="User"></a></p>
                        <div class="oh">
                            <p><strong class="spr">Leroy Day</strong><span class="spr">wakes up!</span></p>
                            <p class="bl pl"><i>That's awesome!</i></p>
                            <div class="clearfix">
                                <div class="float-left text-muted"><em class="ion-android-time mr-sm"></em><span>2 weeks ago</span></div>
                            </div>
                        </div>
                    </div><a class="cardbox-footer btn btn-flat btn-secondary" href="#"><small class="text-center text-muted lh1">See more activities</small></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="cardbox">
                    <div class="cardbox-heading bg-pink-500 ripple ripple-block">
                        <div class="cardbox-title text-center"><small>October</small>
                            <h4 class="mv-sm text-md">12</h4><span>Monday</span>
                        </div>
                    </div>
                    <div class="ui-datepicker-responsive">
                        <div class="ui-datepicker" id="dashboard-datepicker" data-date="04/04/2016"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="cardbox">
                    <div class="cardbox-heading">
                        <div class="cardbox-title">
                            <div class="float-right"><em class="ion-ios-people text-soft icon-lg"></em></div>Resources distribution
                        </div>
                    </div>
                    <div class="cardbox-body pt0">
                        <div class="vector-map" id="vector-map" style="height:240px;"></div>
                    </div>
                    <ul class="list-group m0">
                        <li class="list-group-item d-flex justify-content-between align-items-center"><span>Silicon Valley</span><span class="ml-auto badge badge-xs bg-green-500">15</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Chicago</span><span class="ml-auto badge badge-xs bg-pink-500">9</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Houston</span><span class="ml-auto badge badge-xs bg-purple-500">3</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Others</span><span class="ml-auto badge badge-xs bg-blue-500">25</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="cardbox">
                    <div class="cardbox-heading">
                        <div class="cardbox-title">
                            <div class="float-right"><a href="#"><em class="ion-plus-round text-soft"></em></a></div>Tasks
                        </div>
                    </div>
                    <div class="cardbox-body text-center pt0">
                        <div class="easypie-chart block-center" id="dashboard-easypiechartTask" data-percent="85"><small class="percentage">Goal</small></div>
                        <p class="mv">85% productivity</p>
                    </div>
                    <div class="list-group m0"><a class="list-group-item bt0 justify-content-between" href="#"><span class="text-sm">Work on project presentation</span><span class="float-right"><em class="ion-ios-arrow-right"></em></span></a><a class="list-group-item justify-content-between" href="#"><span class="text-sm">Prepare a call with Robert</span><span class="float-right"><em class="ion-ios-arrow-right"></em></span></a><a class="list-group-item justify-content-between" href="#"><span class="text-sm">Release a new version</span><span class="float-right"><em class="ion-ios-arrow-right"></em></span></a><a class="list-group-item bb0 justify-content-between" href="#"><span class="text-sm">Tell Houston there's no problem</span><span class="float-right"><em class="ion-ios-arrow-right"></em></span></a></div>
                    <div class="flot-chart flot-chart-sm" id="flot-task-chart" data-height="90"></div>
                </div>
            </div>
        </div>
    </div>
@endsection