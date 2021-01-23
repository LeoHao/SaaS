@extends('dashboard.base')

@section('css')
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-primary">
                        <div class="card-body pb-0">
                            <div class="btn-group float-right">
                                <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="c-icon">
                                        <use xlink:href="assets/icons/free-symbol-defs.svg#cui-settings"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                            <div class="text-value-lg">9.823</div>
                            <div>在线用户</div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block;" width="489"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-info">
                        <div class="card-body pb-0">
                            <button class="btn btn-transparent p-0 float-right" type="button">
                                <svg class="c-icon">
                                    <use xlink:href="assets/icons/free-symbol-defs.svg#cui-location-pin"></use>
                                </svg>
                            </button>
                            <div class="text-value-lg">9.823</div>
                            <div>在线用户</div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas class="chart chartjs-render-monitor" id="card-chart2" height="70" width="489" style="display: block;"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-warning">
                        <div class="card-body pb-0">
                            <div class="btn-group float-right">
                                <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="c-icon">
                                        <use xlink:href="assets/icons/free-symbol-defs.svg#cui-settings"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                                                                                                                                                                  href="#">Something
                                        else here</a></div>
                            </div>
                            <div class="text-value-lg">9.823</div>
                            <div>在线用户</div>
                        </div>
                        <div class="c-chart-wrapper mt-3" style="height:70px;">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas class="chart chartjs-render-monitor" id="card-chart3" height="70" width="521" style="display: block;"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-danger">
                        <div class="card-body pb-0">
                            <div class="btn-group float-right">
                                <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="c-icon">
                                        <use xlink:href="assets/icons/free-symbol-defs.svg#cui-settings"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                                                                                                                                                                  href="#">Something
                                        else here</a></div>
                            </div>
                            <div class="text-value-lg">9.823</div>
                            <div>在线用户</div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas class="chart chartjs-render-monitor" id="card-chart4" height="70" width="489" style="display: block;"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="d-sm-inline">设备管理</h4>
                    <a class="btn btn-lg btn-primary float-right" href="{{ route('device.create') }}">绑定设备</a>
                </div>
                <div class="card-body">
                    <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered datatable dataTable no-footer" >
                                    <thead>
                                    <tr>
                                        <th>设备名</th>
                                        <th>mac地址</th>
                                        <th>SN</th>
                                        <th>所属公司</th>
                                        <th>操作</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $item)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $item->name }}</td>
                                            <td>{{ $item->mac }}</td>
                                            <td>{{ $item->sn }}</td>
                                            <td>{{ $item->company_id }}</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('device.show', ['id' => $item['id']]) }}">查看</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('device.edit', ['id' => $item['id']]) }}">编辑</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" href="{{ route('device.delete', ['id' => $item['id']]) }}">解绑</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/custom/datatables.js') }}"></script>

    <script src="{{ asset('js/chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/custom/device-chart.js') }}" defer></script>

@endsection
