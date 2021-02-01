@extends('layouts.app')

@section('content')
  <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form action="{{ route('menu.update') }}" method="POST">
                <div class="card-header"><h4>编辑导航</h4></div>
                <div class="card-body">
                    @if( Session::has('message') )
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                  @endif
                  @if ($errors->any())
                    <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach
                            </ul>
                        </div>
                  @endif

                  @csrf
                  <input type="hidden" name="id" value="{{ $menuElement->id }}" id="menuElementId" />
                        <table class="table table-striped table-bordered datatable">
                            <tbody>
                            <tr>
                                <th>用户角色</th>
                                <td>
                                  @foreach($roles as $role)
                                    @if(in_array($role,array_column($menuroles->toArray(),'role_name')))
                                      <div class="checkbox checkbox-fill d-inline">
                                        <input type="checkbox" name="role[]" value="{{$role}}" id="role-{{$role}}" checked>
                                        <label for="role-{{$role}}" class="cr"> {{ $role }}</label>
                                      </div>
                                    @else
                                      <div class="checkbox checkbox-fill d-inline">
                                        <input type="checkbox" name="role[]" value="{{$role}}" id="role-{{$role}}">
                                        <label for="role-{{$role}}" class="cr"> {{ $role }}</label>
                                      </div>
                                    @endif
                                  @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>名称</th>
                                <td>
                                    <input type="text" class="form-control" name="name" value="{{ $menuElement->name }}" placeholder="Name" />
                                </td>
                            </tr>
                            <tr>
                                <th>类型</th>
                                <td>
                                    <select class="form-control" name="type" id="type">
                                        <option value="link" {{ $menuElement->slug === 'link' ? 'selected' : '' }}>Title</option>
                                        <option value="title" {{ $menuElement->slug === 'title' ? 'selected' : '' }}>Title</option>
                                        <option value="dropdown" {{ $menuElement->slug === 'dropdown' ? 'selected' : '' }}>Dropdown</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>其他</th>
                                <td>
                                    <div id="div-href">
                                        链接:
                                        <input type="text" name="href" class="form-control" placeholder="href" value="{{ $menuElement->href }}" />
                                    </div>
                                    <br><br>
                                    <div id="div-dropdown-parent">
                                        父节点:
                                        <input type="hidden" id="parentId" value="{{ $menuElement->parent_id }}" />
                                        <select class="form-control" name="parent" id="parent">

                                        </select>
                                    </div>
                                    <br><br>
                                    <div id="div-icon">
                                        图标:
                                        <br>
                                        <input class="form-control" name="icon" type="text" placeholder="" value="{{ $menuElement->icon }}">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                </div>
                <div class="card-footer">
                    <div class="row float-right">
                        <a class="btn btn-sm btn-warning" href="{{ route('menu.index', ['menu' => $menuElement->menu_id]) }}">返回</a>
                         <button class="btn btn-sm btn-primary" type="submit">保存</button>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
  </div>

@endsection

@section('javascript')
  <script src="{{ asset('js/axios.min.js') }}"></script>
  <script src="{{ asset('js/menu-edit.js') }}"></script>
@endsection
