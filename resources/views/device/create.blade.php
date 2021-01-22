@extends('dashboard.base')

@section('content')

    <div class="container-fluid" xmlns="http://www.w3.org/1999/html">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>绑定设备</strong>
                            <small>Form</small>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('device.store') }}" method="POST">
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
                                    <label for="company">设备名称</label>
                                    <input class="form-control" id="company" type="text" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="vat">mac地址</label>
                                    <input class="form-control" id="vat" type="text" placeholder="例如: [00:1B:44:11:3A:B7]" required>
                                </div>
                                <div class="form-group">
                                    <label for="street">sn_code</label>
                                    <input class="form-control" id="street" type="text" placeholder="设备标签上的SN码" required>
                                </div>

                                <div class="card-footer">
                                    <div class="row float-right">
                                        <a class="btn btn-primary" href="{{ route('device.index') }}">返回</a>
                                        &nbsp;
                                        <button class="btn btn-primary" type="submit"> 绑定</button>

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
