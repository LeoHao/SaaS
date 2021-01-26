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

                            <div class="card-header"><strong>站点加速</strong></div>
                            <div class="card-body">
                                <div class="form-group row alert alert-dark">
                                    <label class="col-md-3 col-form-label">站点</label>
                                    <p>
                                        <a href="{{ route('device.site-speed-open',['site_id'=>1]) }}" class="btn btn-danger" type="button">
                                            <svg class="c-icon">
                                                <use xlink:href="{{ url('/icons/sprites/brand.svg#cib-facebook-f') }}"></use>
                                            </svg>
                                        </a>

                                        <a href="{{ route('device.site-speed-open',['site_id'=>2]) }}" class="btn btn-danger" type="button">
                                            <svg class="c-icon">
                                                <use xlink:href="{{ url('/icons/sprites/brand.svg#cib-twitter') }}"></use>
                                            </svg>
                                        </a>

                                        <a href="{{ route('device.site-speed-open',['site_id'=>3]) }}" class="btn btn-danger" type="button">
                                            <svg class="c-icon">
                                                <use xlink:href="{{ url('/icons/sprites/brand.svg#cib-twitter') }}"></use>
                                            </svg>
                                        </a>

                                        <a href="{{ route('device.site-speed-open',['site_id'=>4]) }}" class="btn btn-success" type="button">
                                            <svg class="c-icon">
                                                <use xlink:href="{{ url('/icons/sprites/brand.svg#cib-twitter') }}"></use>
                                            </svg>
                                        </a>
                                    </p>
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
    <script>
        var options = [{value: 0, text: 'enhancement'}, {value: 1, text: 'bug'}, {value: 2, text: 'duplicate'}, {value: 3, text: 'invalid'}, {
            label: 'group',
            options: [{value: 4, text: 'enhancement2'}, {value: 5, text: 'bug2'}]
        }];

        var select14 = document.getElementById('select-14');
        var select14c = new coreui.MultiSelect(select14, {inline: true, multiple: true, search: true, selectionType: 'tags', searchPlaceholder: 'Search'});

    </script>
@endsection
