@extends('dashboard.base')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> 角色列表
                            <a class="btn btn-lg btn-primary float-right" href="{{ route('roles.create') }}">新增角色</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-striped dataTable">
                                <thead>
                                <tr>
                                    <th>角色名</th>
                                    <th>层次</th>
                                    <th>创建时间</th>
                                    <th>更新时间</th>
                                    <th>调整排序</th>
                                    <th>操作</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>
                                            {{ $role->name }}
                                        </td>
                                        <td>
                                            {{ $role->hierarchy }}
                                        </td>
                                        <td>
                                            {{ $role->created_at }}
                                        </td>
                                        <td>
                                            {{ $role->updated_at }}
                                        </td>
                                        <td>
                                            <a class="btn btn-success" href="{{ route('roles.up', ['id' => $role->id]) }}">
                                                <i class="cil-arrow-thick-top"></i>
                                            </a>

                                            <a class="btn btn-success" href="{{ route('roles.down', ['id' => $role->id]) }}">
                                                <i class="cil-arrow-thick-bottom"></i>
                                            </a>
                                        </td>

                                        <td class="form-inline">
                                            <a href="{{ route('roles.show', $role->id ) }}" class="btn btn-primary">查看</a>
                                            &nbsp;
                                            <a href="{{ route('roles.edit', $role->id ) }}" class="btn btn-primary">编辑</a>
                                            &nbsp;
                                            <form class="m-0" action="{{ route('roles.destroy', $role->id ) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger">删除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="float-right">
                                {{ $roles->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('javascript')
@endsection