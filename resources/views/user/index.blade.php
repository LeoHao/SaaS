@extends('layouts.app')

@section('css')
    <link href="{{ asset('assets/plugins/data-tables/css/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/data-tables/css/datatable-custom.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="card">
          <div class="card-header">
             <h4 class="d-sm-inline"><i class="fa fa-align-justify"></i> 设备列表</h4>
          </div>
          <div class="card-block">
              <table id="zero-configuration" class="display table nowrap table-striped table-hover">
                        <thead>
                        <tr>
                            <th>用户名</th>
                            <th>邮箱</th>
                            <th>角色</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->menuroles }}</td>
                                <td><span class="badge badge-warning">{{ $user->email_verified_at }}</span></td>
                                <td>
{{--                                     &nbsp;--}}
{{--                                    <a class="btn btn-danger btn-sm" href="{{ route('users.destroy', $user->id ) }}">删除</a>--}}

                                    @if( $you->id !== $user->id )
                                        <form class="form-inline " action="{{ route('users.destroy', $user->id ) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                          <a class="btn btn-primary btn-sm" href="{{ url('/users/' . $user->id) }}">查看</a>
                                       &nbsp;
                                       <a class="btn btn-primary btn-sm" href="{{ url('/users/' . $user->id . '/edit') }}">编辑</a>
                                          <button type="button" class="btn  btn-sm btn-danger sweet-multiple-del">删除</button>
                                        </form>
                                    @endif
                                  </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection

@section('javascript')
    <!-- datatable Js -->
    <script src="{{ asset('assets/plugins/data-tables/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/tbl-datatable-custom.js') }}"></script>

    <!-- sweet alert Js -->
    <script src="../assets/plugins/sweetalert/js/sweetalert.min.js"></script>
    <script src="../assets/js/pages/ac-alert.js"></script>
@endsection


