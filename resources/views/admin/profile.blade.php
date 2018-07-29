@extends('layouts.appv2')
@section('page_title')
    Profile
@endsection
@section('header_title')
    Profile
@endsection

@section('main_content')
    <div class="container-overlap bg-blue-500">
        <div class="media m0 pv">
            <div class="d-flex mr"><a href="#"><img class="rounded-circle thumb64" src="{{ url(Auth::user('admin')->photo) }}" alt="User"></a></div>
            <div class="media-body">
                <h4 class="mt-sm mb0">{{ Auth::user('admin')->first_name }} {{ Auth::user('admin')->last_name }}</h4><span class="text-muted">{{ Auth::user('admin')->email }}</span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- Left column-->
            <div class="col-lg-12 col-xl-12">
                <form class="cardbox form-validate" action="{{ route('profile.save') }}" method="POST" id="form-register" name="registerForm" novalidate="" enctype="multipart/form-data">
                    <h5 class="cardbox-heading pb0">Personal Information</h5>
                    <div class="cardbox-body">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="{{ Auth::user('admin')->id }}">
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="first_name" required="" value="{{ Auth::user('admin')->first_name }}" placeholder="First Name">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="last_name" required="" value="{{ Auth::user('admin')->last_name }}" placeholder="Last Name">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input class="form-control error" type="email" placeholder="mail@example.com" name="email" value="{{ Auth::user('admin')->email }}" required="" aria-required="true" aria-invalid="true">
                                </div>
                            </div>
                        </fieldset>
                        <a onclick="changePasswordToggle()" href="#">Change Password</a>
                        <div style="display: none" id="password-form">
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">New Password</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="id-password" type="password" name="password1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Confirm New Password</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="id-password-confirm" type="password" name="confirm_match">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Birth Date</label>
                                <div class="col-sm-6">
                                    <input type="date" name="birth_date" class="form-control" value="{{ date('Y-m-d', strtotime(Auth::user('admin')->birth_date)) }}" required>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-6">
                                    <textarea name="address" cols="30" rows="10" class="form-control" required placeholder="Address">{{Auth::user('admin')->address }}</textarea>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Photo</label>
                                <div class="col-sm-6">
                                    @if(Auth::user('admin')->photo)
                                        <img src="{{ url(Auth::user('admin')->photo) }}" alt="Photo Profile" width="250" height="250" class="img-responsive img thumbnail">
                                    @endif
                                    <input type="file" name="photo" class="form-control">
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Save</button>
                            <button class="btn btn-warning" type="button">Reset</button>
                        </div>
                        <!-- END panel-->
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection

@section('page_js')
    <script>
        var toggle = false;
        function changePasswordToggle() {
            if (!toggle) {
                $('#password-form').css('display','block');
                $('#id-password').attr('required', true);
                $('#id-password-confirm').attr('required', true);
            } else {
                $('#password-form').css('display','none');
                $('#password-form').find('input').val("");
                $('#id-password').attr('required', false);
                $('#id-password-confirm').attr('required', false);
            }
            toggle = !toggle;
        }
    </script>
@endsection