@extends('layouts.appv2')

@section('page_title')
    Edit User
@endsection

@section('header_title')
    Edit User
@endsection

@section('main_content')
    <div class="container-fluid">
        <!-- START row-->
        <div class="cardbox">
            <div class="cardbox-body">
                <!-- START row-->
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-validate" action="{{ route('admin.update', ['user' => $admin->id]) }}" method="POST" id="form-register" name="registerForm" novalidate="" enctype="multipart/form-data">
                            <fieldset class="b0">
                                <legend>Create or Add new</legend>
                            </fieldset>
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="first_name" required="" value="{{ $admin->first_name }}" placeholder="First Name">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="last_name" required="" value="{{ $admin->last_name }}" placeholder="Last Name">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-6">
                                        <input class="form-control error" type="email" placeholder="mail@example.com" name="email" value="{{ $admin->email }}" required="" aria-required="true" aria-invalid="true">
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
                                        <input type="date" name="birth_date" class="form-control" value="{{ date('Y-m-d', strtotime($admin->birth_date)) }}" required>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="number" name="phone_number" required="" placeholder="0812345678">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-6">
                                        <textarea name="address" cols="30" rows="10" class="form-control" required placeholder="Address">{{ $admin->address }}</textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Photo</label>
                                    <div class="col-sm-6">
                                        @if($admin->photo)
                                            <img src="{{ url($admin->photo) }}" alt="Photo Profile" width="250" height="250" class="img-responsive img thumbnail">
                                        @endif
                                        <input type="file" name="photo" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                            <hr>
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Save</button>
                                <a href="{{ route('admin.index') }}" class="btn btn-info">Back</a>
                                <button class="btn btn-warning" type="button">Reset</button>
                            </div>
                            <!-- END panel-->
                        </form>
                    </div>
                </div>
                <!-- END row-->
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