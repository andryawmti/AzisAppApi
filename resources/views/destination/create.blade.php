@extends('layouts.appv2')

@section('page_title')
    Create or Add new Destination
@endsection

@section('header_title')
    Create or Add new Destination
@endsection

@section('page_cs')
    <style>
        /*#maps{
            height: 300px !important;
            width: 300px !important;
        }*/
    </style>
@endsection

@section('main_content')
    <div class="container-fluid">
        <!-- START row-->
        <div class="cardbox">
            <div class="cardbox-body">
                <!-- START row-->
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-validate" action="{{ route('destination.store') }}" method="POST" id="form-example" name="form.formValidate" novalidate="" enctype="multipart/form-data">
                            <fieldset class="b0">
                                <legend>Create or Add new</legend>
                            </fieldset>
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="title" required="" placeholder="Title here">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Latitude</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="latitude" type="number" name="latitude" required="" placeholder="12321424">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Longitude</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="number" id="longitude" name="longitude" required="" placeholder="-12435642">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pick Maps</label>
                                    <div style="height: 300px; padding-left: 30px;" class="col-sm-6" id="maps">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-6">
                                        <textarea name="description" cols="30" rows="10" class="form-control" required placeholder="Destination Description"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Picture</label>
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

@section('page_js')
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Kebumen
            var kebumen = {
                lat: -7.654714,
                lng: 109.608289
            };
            // The map, centered at Kebumen
            var options = {
                zoom: 10,
                center: kebumen
            };
            var map = new google.maps.Map(document.getElementById('maps'), options);
            // The marker, positioned at Kebumen
            var marker = new google.maps.Marker({
                position: kebumen,
                map: map,
                title: "Wisata Kebumen",
                draggable:true
            });

            google.maps.event.addListener(marker, 'drag', function(event) {
                $('#latitude').val(event.latLng.lat());
                $('#longitude').val(event.latLng.lng());
            });

            google.maps.event.addListener(marker, 'dragend', function(event) {
                $('#latitude').val(event.latLng.lat());
                $('#longitude').val(event.latLng.lng());
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT1i0cMnsN-rh466dWsx5vA5TvgmRHbnY&callback=initMap">
    </script>
@endsection