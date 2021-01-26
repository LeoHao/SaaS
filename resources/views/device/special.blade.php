@extends('dashboard.base')

@section('css')
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <form class="form-horizontal" action="{{ route('device.special-open') }}" method="POST">
                            @csrf
                            <input type="hidden" name="device_id" value="{{ $device->id }}"/>
                            <input type="hidden" name="plugin_id" value="1"/>

                            <div class="card-header"><strong>专线开通</strong></div>
                            <div class="card-body">
                                <div class="form-group row alert alert-dark">
                                    <label class="col-md-3 col-form-label">所在地</label>
                                    <div class="col-md-9 col-form-label">
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="location-radio1" type="radio" value="1" name="location">
                                            <label class="form-check-label" for="location-radio1">北京</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="location-radio2" type="radio" value="2" name="location">
                                            <label class="form-check-label" for="location-radio2">上海</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="location-radio3" type="radio" value="3" name="location">
                                            <label class="form-check-label" for="location-radio3">深圳</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row alert alert-dark">
                                    <label class="col-md-3 col-form-label">目的地</label>
                                    <div class="col-md-9 col-form-label">
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="destination-radio1" type="radio" value="1" name="destination">
                                            <label class="form-check-label" for="destination-radio1">美国</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="destination-radio2" type="radio" value="2" name="destination">
                                            <label class="form-check-label" for="destination-radio2">日本</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="destination-radio3" type="radio" value="3" name="destination">
                                            <label class="form-check-label" for="destination-radio3">韩国</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row alert alert-dark">
                                    <label class="col-md-3 col-form-label">带宽</label>
                                    <div class="col-md-9 col-form-label">
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="bandwidth-radio1" type="radio" value="1" name="bandwidth">
                                            <label class="form-check-label" for="bandwidth-radio1">1M</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="bandwidth-radio2" type="radio" value="2" name="bandwidth">
                                            <label class="form-check-label" for="bandwidth-radio2">2M</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="bandwidth-radio3" type="radio" value="3" name="bandwidth">
                                            <label class="form-check-label" for="bandwidth-radio3">3M</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="bandwidth-radio3" type="radio" value="4" name="bandwidth">
                                            <label class="form-check-label" for="bandwidth-radio3">4M</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="bandwidth-radio3" type="radio" value="5" name="bandwidth">
                                            <label class="form-check-label" for="bandwidth-radio3">5M</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row alert alert-dark">
                                    <label class="col-md-3 col-form-label">时长</label>
                                    <div class="col-md-9 col-form-label">
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="duration-radio1" type="radio" value="1" name="duration">
                                            <label class="form-check-label" for="duration-radio1">1个月</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="duration-radio2" type="radio" value="3" name="duration">
                                            <label class="form-check-label" for="duration-radio2">3个月</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="duration-radio3" type="radio" value="6" name="duration">
                                            <label class="form-check-label" for="duration-radio3">6个月</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="duration-radio4" type="radio" value="12" name="duration">
                                            <label class="form-check-label" for="duration-radio4">12个月</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="duration-radio5" type="radio" value="24" name="duration">
                                            <label class="form-check-label" for="duration-radio5">2年</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="duration-radio6" type="radio" value="36" name="duration">
                                            <label class="form-check-label" for="duration-radio6">3年</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="float-right">
                                    <button class="btn btn-sm btn-danger" type="reset"> 返回</button>
                                    <button class="btn btn-sm btn-primary" type="submit"> 确认</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection

@section('javascript')

    <script src="{{ asset('js/chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/widgets.js') }}" defer></script>
@endsection
