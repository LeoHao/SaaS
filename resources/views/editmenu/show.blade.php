@extends('layouts.app')

@section('content')
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>显示导航</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
              @endif

              <table class="table table-striped table-bordered datatable">
                        <tbody>
                            <tr>
                                <th>
                                    角色
                                </th>
                                <td>
                                    {{ implode(',',array_column($menuroles->toArray(),'role_name')) }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    类型
                                </th>
                                <td>
                                    {{ $menuElement->slug }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    链接:
                                </th>
                                <td>
                                    {{ $menuElement->href }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    父级导航:
                                </th>
                                <td>
                                    {{ $menuElement->parent_name ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    图标
                                </th>
                                <td>
                                    <i class="{{ $menuElement->icon }}"></i>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                  {{ $menuElement->icon }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ route('menu.index') }}">返回</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('javascript')
@endsection