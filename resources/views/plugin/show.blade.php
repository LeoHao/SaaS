@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                     <h4 class="d-sm-inline"><i class="fa fa-align-justify"></i> 查看插件</h4>
                </div>
                <div class="card-block">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif

                    <table class="table table-striped table-bordered datatable">
                        <tbody>
                        <tr>
                            <th>名称</th>
                            <td>{{ $data->name }}</td>
                        </tr>
                        <tr>
                            <th>介绍</th>
                            <td>{{ $data->present }}</td>
                        </tr>
                        <tr>
                            <th>描述</th>
                            <td>{{ $data->description }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    <div class="row float-right">
                        <a class="btn btn-primary" href="{{ route('plugin.index') }}">返回</a>&nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')

@endsection