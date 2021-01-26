@extends('dashboard.base')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-sm-inline">导航列表</h4>
                            <a class="btn btn-lg btn-primary float-right" href="{{ route('menu.create') }}">新增导航</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-responsive-sm table-striped dataTable">
                                <thead>
                                <tr>
                                    <th>名称</th>
                                    <th>图标</th>
                                    <th>类型</th>
                                    <th>href</th>
                                    <th>排序</th>
                                    <th>调整顺序</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($menuToEdit as $menuel)
                                    <tr>
                                        <td>
                                            {{ $menuel['name'] }}
                                        </td>
                                        <td>
                                            <i class="{{ $menuel['icon'] }}"></i>
                                        </td>
                                        <td>{{ $menuel['slug'] }}</td>

                                        <td>{{ $menuel['href'] }}</td>
                                        <td>{{ $menuel['sequence'] }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{ route('menu.up', ['id' => $menuel['id']]) }}">
                                                <i class="cil-arrow-thick-top"></i>
                                            </a>

                                            <a class="btn btn-success" href="{{ route('menu.down', ['id' => $menuel['id']]) }}">
                                                <i class="cil-arrow-thick-bottom"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('menu.show', ['id' => $menuel['id']]) }}">查看</a>

                                            <a class="btn btn-primary" href="{{ route('menu.edit', ['id' => $menuel['id']]) }}">编辑</a>

                                            <a class="btn btn-danger" href="{{ route('menu.delete', ['id' => $menuel['id']]) }}">删除</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="float-right">
                                {{ $menuToEdit->links()}}
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
