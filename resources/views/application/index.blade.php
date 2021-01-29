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
                            <th>所在地</th>
                            <th>目的地</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{ $item->company->name  ?? '' }}</td>
                                <td>{{ $item->device->name ?? ''  }}</td>
                                <td>{{ $item->device->mac ?? ''  }}</td>
                                <td>{{ $item->plugin->name ?? ''  }}</td>
                                <td>{{ $item->duration->name ?? ''  }}</td>
                                <td>{{ $item->bandwidth->name ?? ''  }}</td>
                                <td>{{ $item->dest->name ?? ''  }}</td>
                                <td>{{ $item->node->name ?? ''  }}</td>
                                <td>
                                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                                        <span class="badge badge-{{ $item->status ? 'success' : 'danger'}}">{{ $item->status ? '已通过' : '失败'}}</span>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('application.passed', ['id' => $item['id']]) }}">通过</a>

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

    <script>
        $('.datatable').DataTable({
            "bPaginate": false,
            "bInfo": false,
            "bFilter": false,
            "bAutoWidth": false,
            "aoColumns" : [
                { sWidth: '10%' },
                { sWidth: '10%' },
                { sWidth: '10%' },
                { sWidth: '10%' },
                { sWidth: '10%' },
                { sWidth: '10%' },
                { sWidth: '10%' },
                { sWidth: '10%' },
            ]
        });
        $('.datatable').attr('style', 'border-collapse: collapse !important');
    </script>
@endsection
