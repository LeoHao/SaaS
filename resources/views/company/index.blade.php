@extends('layouts.app')

@section('css')
  <link href="{{ asset('assets/plugins/data-tables/css/datatables.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/plugins/data-tables/css/datatable-custom.css') }}" rel="stylesheet">
@endsection

@section('content')
  <div class="row">
      <!-- [ daily sales section ] start -->
      <div class="col-md-6 col-xl-4">
          <div class="card">
              <div class="card-block">
                  <h6 class="mb-4">Daily Sales</h6>
                  <div class="row d-flex align-items-center">
                      <div class="col-9">
                          <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>$249.95</h3>
                      </div>

                      <div class="col-3 text-right">
                          <p class="m-b-0">67%</p>
                      </div>
                  </div>
                  <div class="progress m-t-30" style="height: 7px;">
                      <div class="progress-bar progress-c-theme" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
      </div>
      <!-- [ daily sales section ] end -->

      <!-- [ Monthly  sales section ] start -->
      <div class="col-md-6 col-xl-4">
          <div class="card">
              <div class="card-block">
                  <h6 class="mb-4">Monthly Sales</h6>
                  <div class="row d-flex align-items-center">
                      <div class="col-9">
                          <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-down text-c-red f-30 m-r-10"></i>$2.942.32</h3>
                      </div>
                      <div class="col-3 text-right">
                          <p class="m-b-0">36%</p>
                      </div>
                  </div>
                  <div class="progress m-t-30" style="height: 7px;">
                      <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
      </div>
      <!-- [ Monthly  sales section ] end -->

      <!-- [ year  sales section ] start -->
      <div class="col-md-12 col-xl-4">
          <div class="card">
              <div class="card-block">
                  <h6 class="mb-4">Yearly Sales</h6>
                  <div class="row d-flex align-items-center">
                      <div class="col-9">
                          <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>$8.638.32</h3>
                      </div>
                      <div class="col-3 text-right">
                          <p class="m-b-0">80%</p>
                      </div>
                  </div>
                  <div class="progress m-t-30" style="height: 7px;">
                      <div class="progress-bar progress-c-theme" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
      </div>
      <!-- [ year  sales section ] end -->

    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="d-sm-inline"><i class="fa fa-align-justify"></i> 企业管理</h4>
          <a class="btn btn-sm btn-primary float-right" href="{{ route('company.create') }}">新增</a>
        </div>
        <div class="card-body">
            <table id="zero-configuration" class="display table nowrap table-striped table-hover">
                <thead>
                <tr>
                    <th>企业名</th>
                    <th>描述</th>
                    <th>操作</th>
                </tr>
                </thead>

                <tbody>
                @foreach($data as $item)
                  <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('company.show', ['id' => $item['id']]) }}">查看</a>
                            <a class="btn btn-sm btn-primary" href="{{ route('company.edit', ['id' => $item['id']]) }}">编辑</a>
                            <a class="btn btn-sm btn-danger" href="{{ route('company.delete', ['id' => $item['id']]) }}">删除</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
