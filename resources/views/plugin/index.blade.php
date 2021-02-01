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
           <h4 class="d-sm-inline"><i class="fa fa-align-justify"></i> 插件管理</h4>
           <a class="btn btn-sm btn-primary float-right" href="{{ route('plugin.create') }}">新增插件</a>
        </div>

        <div class="card-block">
           <div class="table-responsive">
                <table id="zero-configuration" class="display table nowrap table-striped table-hover">
                  <thead>
                  <tr>
                      <th>名称</th>
                      <th>介绍</th>
                      <th>描述</th>
                      <th>开通数量</th>
                      <th>状态</th>
                      <th>操作</th>
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
                          <td><span class="badge badge-pill badge-{{ $item->status ? 'success' : 'danger' }}">{{ $item->status ? '启用' : '关闭' }}</span></td>

                          <td>
                              <a class="btn btn-sm btn-primary" href="{{ route('plugin.show', ['id' => $item['id']]) }}">查看</a>

                              <a class="btn btn-sm btn-primary" href="{{ route('plugin.edit', ['id' => $item['id']]) }}">编辑</a>

                              <a class="btn btn-sm btn-danger" href="{{ route('plugin.delete', ['id' => $item['id']]) }}">删除</a>
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
@endsection

@section('javascript')
  <!-- datatable Js -->
  <script src="{{ asset('assets/plugins/data-tables/js/datatables.min.js') }}"></script>
  <script src="{{ asset('assets/js/pages/tbl-datatable-custom.js') }}"></script>
@endsection
