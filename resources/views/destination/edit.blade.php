@extends('layouts.appv2')

@section('page_title')
    Edit Destination
@endsection

@section('header_title')
    Edit Destination
@endsection

@section('main_content')
    <div class="container-fluid">
        <!-- START row-->
        <div class="cardbox">
            <div class="cardbox-body">
                <!-- START row-->
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-validate" action="{{ route('destination.update', ['destination' => $destination->id]) }}" method="POST" id="form-example" name="form.formValidate" novalidate="" enctype="multipart/form-data">
                            <fieldset class="b0">
                                <legend>Edit</legend>
                            </fieldset>
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="title" required="" placeholder="Title here" value="{{ $destination->title }}">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Latitude</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="number" name="latitude" required="" placeholder="12321424" value="{{ $destination->latitude }}">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Longitude</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="number" name="longitude" required="" placeholder="-12435642" value="{{ $destination->longitude }}">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-6">
                                        <textarea name="description" cols="30" rows="10" class="form-control" required placeholder="Destination Description">{{ $destination->description }}</textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Picture</label>
                                    @if($destination->picture)
                                    <img src="{{ url($destination->picture) }}" alt="Picture" width="40" height="40">
                                    @endif
                                    <div class="col-sm-6">
                                        <input type="file" name="picture" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                            <hr>
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Save</button>
                                <a href="{{ route('destination.index') }}" class="btn btn-info">Back</a>
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