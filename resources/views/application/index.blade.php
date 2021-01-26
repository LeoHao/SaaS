@extends('dashboard.base')

@section('css')
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="fade-in">


            <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i> 审核列表</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped dataTable">
                        <thead>
                        <tr>
                        <tr>
                            <th>公司名称</th>
                            <th>设备名称</th>
                            <th>设备mac</th>
                            <th>插件类型</th>
                            <th>开通时长</th>
                            <th>带宽</th>
                            <th>状态</th>
                            <th>操作</th>
                            <th>操作</th>
                        </tr>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr role="row" class="odd">
                                <td class="sorting_1">{{ $item->companies->name  ?? '' }}</td>
                                <td>{{ $item->devices->name ?? ''  }}</td>
                                <td>{{ $item->devices->mac ?? ''  }}</td>
                                <td>{{ $item->plugins->name ?? ''  }}</td>
                                <td>{{ $item->status ?? ''  }}</td>
                                <td>{{ $item->status ?? ''  }}</td>
                                <td>
                                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                                        <span class="badge badge-{{ $item->status ? 'success' : 'danger'}}">{{ $item->status ? '已通过' : '失败'}}</span>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('application.passed', ['id' => $item['id']]) }}">通过</a>
                                </td>

                                <td>
                                    <a class="btn btn-danger btn-sm" href="{{ route('application.rejected', ['id' => $item['id']]) }}">取消</a>
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
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/custom/datatables.js') }}"></script>

    <script src="{{ asset('js/chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/custom/device-chart.js') }}" defer></script>

@endsection
