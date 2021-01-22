@extends('dashboard.base')

@section('css')
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="card">
                <div class="card-header"> 用户管理</div>
                <div class="card-body">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info"
                                       style="border-collapse: collapse !important">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending"
                                                style="width: 538px;">用户名
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending"
                                                style="width: 462px;">邮箱
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending"
                                                style="width: 221px;">角色
                                            </th>
                                            <th class="sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending"
                                                style="width: 254px;" aria-sort="descending">创建时间
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending"
                                                style="width: 443px;">操作
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr role="row" class="odd">
                                            <td class="">{{ $user->name }}</td>
                                            <td class="">{{ $user->email }}</td>
                                            <td class="">{{ $user->menuroles }}</td>
                                            <td class="sorting_1"><span class="badge badge-warning">{{ $user->email_verified_at }}</span></td>
                                            <td class="form-inline">

                                                <a class="btn btn-success" href="{{ url('/users/' . $user->id) }}">
                                                    <svg class="c-icon">
                                                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-magnifying-glass') }}"></use>
                                                    </svg>
                                                </a>
                                                &nbsp;
                                                <a class="btn btn-info" href="{{ url('/users/' . $user->id . '/edit') }}">
                                                    <svg class="c-icon">
                                                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-description') }}"></use>
                                                    </svg>
                                                </a>
                                                &nbsp;
                                                @if( $you->id !== $user->id )
                                                    <form action="{{ route('users.destroy', $user->id ) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-danger ">
                                                            <svg class="c-icon">
                                                                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-trash') }}"></use>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                @endif
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

@endsection






{{--        <div class="container-fluid">--}}
{{--          <div class="animated fadeIn">--}}
{{--            <div class="row">--}}
{{--              <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                      <i class="fa fa-align-justify"></i>{{ __('Users') }}</div>--}}
{{--                    <div class="card-body">--}}
{{--                        <table class="table table-responsive-sm table-striped">--}}
{{--                        <thead>--}}
{{--                          <tr>--}}
{{--                            <th>用户名</th>--}}
{{--                            <th>邮箱</th>--}}
{{--                            <th>角色</th>--}}
{{--                            <th>Email verified at</th>--}}
{{--                            <th></th>--}}
{{--                            <th></th>--}}
{{--                            <th></th>--}}
{{--                          </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                          @foreach($users as $user)--}}
{{--                            <tr>--}}
{{--                              <td>{{ $user->name }}</td>--}}
{{--                              <td>{{ $user->email }}</td>--}}
{{--                              <td>{{ $user->menuroles }}</td>--}}
{{--                              <td>{{ $user->email_verified_at }}</td>--}}
{{--                              <td>--}}
{{--                                <a href="{{ url('/users/' . $user->id) }}" class="btn btn-block btn-primary">查看</a>--}}
{{--                              </td>--}}
{{--                              <td>--}}
{{--                                <a href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-block btn-primary">编辑</a>--}}
{{--                              </td>--}}
{{--                              <td>--}}
{{--                                @if( $you->id !== $user->id )--}}
{{--                                <form action="{{ route('users.destroy', $user->id ) }}" method="POST">--}}
{{--                                    @method('DELETE')--}}
{{--                                    @csrf--}}
{{--                                    <button class="btn btn-block btn-danger">{ __('Users') }}</button>--}}
{{--                                </form>--}}
{{--                                @endif--}}
{{--                              </td>--}}
{{--                            </tr>--}}
{{--                          @endforeach--}}
{{--                        </tbody>--}}
{{--                      </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}


