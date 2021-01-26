@extends('dashboard.base')

@section('content')

    <div class="container-fluid" xmlns="http://www.w3.org/1999/html">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>编辑企业</strong>
                            <small>Form</small>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('company.update') }}" method="POST">
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
                                    <label for="description">描述</label>
                                    <input class="form-control" id="description" name="description" type="text" placeholder="" value="{{ $data->description }}" required>
                                </div>

                                <div class="card-footer">
                                    <div class="row float-right">
                                        <a class="btn btn-primary" href="{{ route('company.index') }}">返回</a>
                                        &nbsp;
                                        <button class="btn btn-primary" type="submit"> 更新</button>
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
@endsection
