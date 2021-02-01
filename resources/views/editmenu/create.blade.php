@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"><h4>Create menu element</h4></div>
                <div class="card-body">
                    @if(Session::has('message'))
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
                    <form action="{{ route('menu.store') }}" method="POST">
                        @csrf
                        <table class="table table-striped table-bordered datatable">
                            <tbody>
                            <tr>
                                <th>
                                    角色
                                </th>
                                <td>
                                    @foreach($roles as $role)
                                        <div class="checkbox checkbox-fill d-inline">
                                            <input type="checkbox" name="role[]" value="{{$role}}" id="role-{{$role}}">
                                            <label for="role-{{$role}}" class="cr"> {{ $role }}</label>
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    名称
                                </th>
                                <td>
                                    <input class="form-control" type="text" name="name" placeholder="Name" required/>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    类型
                                </th>
                                <td>
                                    <select class="form-control" name="type" id="type">
                                        <option value="link">Link</option>
                                        <option value="title">Title</option>
                                        <option value="dropdown">Dropdown</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    其他
                                </th>
                                <td>
                                    <div id="div-href">
                                        链接:
                                        <input type="text" name="href" class="form-control" placeholder=""/>
                                    </div>
                                    <br><br>
                                    <div id="div-dropdown-parent">
                                        选择父级:
                                        <select class="form-control" name="parent" id="parent">

                                        </select>
                                    </div>
                                    <br><br>
                                    <div id="div-icon">
                                        图标
                                        <input class="form-control" name="icon" type="text" placeholder="">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-primary" type="submit">保存</button>
                        <a class="btn btn-primary" href="{{ route('menu.index') }}">返回</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/menu-create.js') }}"></script>


@endsection