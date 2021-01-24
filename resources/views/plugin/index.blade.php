@extends('dashboard.base')

@section('css')
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-sm-inline">插件管理</h4>
                    <a class="btn btn-lg btn-primary float-right" href="{{ route('plugin.create') }}">新增插件</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-bordered datatable dataTable">
                                <thead>
                                <tr>
                                    <th>名称</th>
                                    <th>介绍</th>
                                    <th>描述</th>
                                    <th>开通数量</th>
                                    <th>状态</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($data))
                                    @foreach($data as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->present }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->company_id }}</td>
                                            <td>
                                                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                                                    <button class="btn btn-pill btn-block btn-success">启用</button>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('plugin.show', ['id' => $item['id']]) }}">查看</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('plugin.edit', ['id' => $item['id']]) }}">编辑</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" href="{{ route('plugin.delete', ['id' => $item['id']]) }}">删除</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
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
@endsection
