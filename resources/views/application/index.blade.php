@extends('layouts.app')

@section('css')
    <link href="{{ asset('assets/plugins/data-tables/css/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/data-tables/css/datatable-custom.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Zero Configuration</h5>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table id="zero-configuration" class="display table nowrap table-striped table-hover" style="width:100%">
                            <thead>
                               <tr>
                                <th>公司名称</th>
                                <th>设备名称</th>
                                <th>设备mac</th>
                                <th>插件类型</th>
                                <th>开通时长</th>
                                <th>带宽</th>
                                <th>状态</th>
                                <th>操作</th>
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
                            <tfoot>
                                <tr>
                                    <th>公司名称</th>
                                    <th>设备名称</th>
                                    <th>设备mac</th>
                                    <th>插件类型</th>
                                    <th>开通时长</th>
                                    <th>带宽</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <!-- datatable Js -->
    <script src="{{ asset('assets/plugins/data-tables/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/tbl-datatable-custom.js') }}"></script>
@endsection
