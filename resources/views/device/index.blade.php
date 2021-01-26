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
                                        <use xlink:href="{{ url('/icons/sprites/free.svg#cui-settings')}}"></use>
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
                                    <use xlink:href="{{ url('/icons/sprites/free.svg#cui-location-pin')}}"></use>
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
                                        <use xlink:href="{{ url('/icons/sprites/free.svg#cui-settings')}}"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
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
                                        <use xlink:href="{{ url('/icons/sprites/free.svg#cui-settings')}}"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
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
                <div class="card-header"><i class="fa fa-align-justify"></i> 设备列表</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped dataTable">
                        <thead>
                        <tr>
                            <th>设备名</th>
                            <th>mac地址</th>
                            <th>SN</th>
                            <th>所属公司</th>
                            <th>状态</th>
                            <th>操作</th>
                            <th>功能开通</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td class="sorting_1">{{ $item->name ?? '' }}</td>
                                <td>{{ $item->mac ?? '' }}</td>
                                <td>{{ $item->sn ?? '' }}</td>
                                <td>{{ $item->company_id ?? ''  }}</td>
                                <td><span class="badge badge-success">在线</span></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('device.show', ['id' => $item['id']]) }}">查看</a>
                                    &nbsp;
                                    <a class="btn btn-primary btn-sm" href="{{ route('device.edit', ['id' => $item['id']]) }}">编辑</a>
                                    &nbsp;
                                    <a class="btn btn-danger btn-sm" href="{{ route('device.delete', ['id' => $item['id']]) }}">解绑</a>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        @if( in_array(1,array_column($item->companyPlugins->toArray(),'plugin_id')))
                                            <a class="btn btn-primary btn-sm" href="{{ route('device.special',['device_id'=> $item['id']]) }}">专线开通</a>
                                            &nbsp;
                                        @endif

                                        @if( in_array(2,array_column($item->companyPlugins->toArray(),'plugin_id')))
                                            <a class="btn btn-primary btn-sm" href="{{ route('device.site-speed',['device_id'=> $item['id']]) }}">站点加速</a>
                                            &nbsp;
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">
                        {{ $data->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/custom/device-chart.js') }}" defer></script>

    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $('.datatable').DataTable({
            "bPaginate": false,
            "bInfo": false,
            "bFilter": false,
            "bAutoWidth": false,
            "aoColumns" : [
                { sWidth: '10%' },
                { sWidth: '20%' },
                { sWidth: '20%' },
                { sWidth: '10%' },
                { sWidth: '10%' },
                { sWidth: '10%' },
                { sWidth: '20%' },
            ]
        });
        $('.datatable').attr('style', 'border-collapse: collapse !important');
    </script>

@endsection
