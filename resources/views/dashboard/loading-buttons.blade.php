@extends('dashboard.base')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="card">
                <div class="card-header"> Loading buttons
                    <div class="card-header-actions"></div>
                </div>
                <div class="card-body">
                    <h6>Loading Buttons with spinner</h6>
                    <div class="row">
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-primary c-loading-button" data-coreui="loading-button" data-timeout="3000">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-secondary c-loading-button" data-coreui="loading-button" data-timeout="3000">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-success c-loading-button" data-coreui="loading-button" data-timeout="3000">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-info c-loading-button" data-coreui="loading-button" data-timeout="3000">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-danger c-loading-button" data-coreui="loading-button" data-timeout="3000">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-warning c-loading-button" data-coreui="loading-button" data-timeout="3000">Submit</button>
                        </div>
                    </div>
                    <hr>
                    <h6>Loading Buttons with spinner</h6>
                    <div class="row">
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-primary c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner-type="grow">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-secondary c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner-type="grow">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-success c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner-type="grow">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-info c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner-type="grow">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-danger c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner-type="grow">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-warning c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner-type="grow">Submit</button>
                        </div>
                    </div>
                    <hr>
                    <h6>Loading Buttons with spinner and progress</h6>
                    <div class="row">
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-primary c-loading-button" data-coreui="loading-button" data-timeout="3000" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-secondary c-loading-button" data-coreui="loading-button" data-timeout="3000" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-success c-loading-button" data-coreui="loading-button" data-timeout="3000" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-info c-loading-button" data-coreui="loading-button" data-timeout="3000" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-danger c-loading-button" data-coreui="loading-button" data-timeout="3000" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-warning c-loading-button" data-coreui="loading-button" data-timeout="3000" data-progress="true">Submit</button>
                        </div>
                    </div>
                    <hr>
                    <h6>Loading Buttons with spinner and progress</h6>
                    <div class="row">
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-primary c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner-type="grow" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-secondary c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner-type="grow" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-success c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner-type="grow" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-info c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner-type="grow" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-danger c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner-type="grow" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-warning c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner-type="grow" data-progress="true">Submit</button>
                        </div>
                    </div>
                    <hr>
                    <h6>Loading Buttons without spinner</h6>
                    <div class="row">
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-primary c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner="false" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-secondary c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner="false" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-success c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner="false" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-info c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner="false" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-danger c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner="false" data-progress="true">Submit</button>
                        </div>
                        <div class="col-md-2 py-4 text-center">
                            <button class="btn btn-warning c-loading-button" data-coreui="loading-button" data-timeout="3000" data-spinner="false" data-progress="true">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script src="{{ asset('js/chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/charts.js') }}"></script>
    <script src="{{ asset('js/loading-buttons.js') }}"></script>

@endsection
