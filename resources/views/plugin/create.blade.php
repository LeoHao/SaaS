@extends('dashboard.base')

@section('content')

    <div class="container-fluid" xmlns="http://www.w3.org/1999/html">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>新增插件</strong>
                            <small>Form</small>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('plugin.store') }}" method="POST">
                                @csrf
                                @method('PUT')

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

                                <div class="form-group">
                                    <label for="name">名称</label>
                                    <input class="form-control" id="name" name="name" type="text" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="present">介绍</label>
                                    <input class="form-control" id="present" name="present" type="text" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">描述</label>
                                    <input class="form-control" id="description" name="description" type="text" placeholder="" required>
                                </div>

                                <div class="card-footer">
                                    <div class="row float-right">
                                        <a class="btn btn-primary" href="{{ route('plugin.index') }}">返回</a>
                                        &nbsp;
                                        <button class="btn btn-primary" type="submit"> 添加</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/menu-create.js') }}"></script>
@endsection
