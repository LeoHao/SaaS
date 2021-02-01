@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <strong>编辑插件</strong>
                <small>Form</small>
            </div>
            <div class="card-body">
                <form action="{{ route('plugin.update') }}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $data->id }}"/>
                    @if(Session::has('message'))
                        <div class="alert alert-{{Session::get('message')['type']}}" role="alert">{{Session::get('message')['message']}}</div>
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

                    <div class="form-group" method="POST">
                        <label for="name">名称</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="" value="{{ $data->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="present">介绍</label>
                        <input class="form-control" id="present" name="present" type="text" placeholder="" value="{{ $data->present }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">描述</label>
                        <input class="form-control" id="description" name="description" type="text" placeholder="" value="{{ $data->description }}" required>
                    </div>

                    <div class="form-group">
                        <label for="status">是否开启</label>
                        <div>
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" id="status-radio1" type="radio" value="1" name="status" {{ $data->status == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="status-radio1">开启</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" id="status-radio2" type="radio" value="0" name="status" {{ $data->status == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="status-radio2">关闭</label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row float-right">
                            <a class="btn btn-primary" href="{{ route('plugin.index') }}">返回</a>
                            &nbsp;
                            <button class="btn btn-primary" type="submit"> 更新</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <!-- bootstrap-tagsinput-latest Js -->
    <script src="../assets/plugins/typeahead/js/typeahead.bundle.min.js"></script>
    <script src="../assets/plugins/bootstrap-tagsinput-latest/js/bootstrap-tagsinput.min.js"></script>

    <!-- bootstrap-maxlength Js -->
    <script src="../assets/plugins/bootstrap-maxlength/js/bootstrap-maxlength.min.js"></script>

    <!-- form-advance custom js -->
    <script src="../assets/js/pages/form-advance-custom.js"></script>
@endsection
