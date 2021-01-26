@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> 编辑 {{ $user->name }} 用户</div>
                    <div class="card-body">
                        <br>
                        <form method="POST" action="{{ route('users.update',[$user->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <svg class="c-icon c-icon-sm">
                                          <use xlink:href="/assets/icons/free-symbol-defs.svg#cui-user"></use>
                                      </svg>  用户名
                                    </span>
                                </div>
                                <input class="form-control" type="text" placeholder="用户名" name="name" value="{{ $user->name }}" required autofocus>
                            </div>
                            <button class="btn btn-block btn-success" type="submit">保存</button>
                            <a href="{{ route('users.index') }}" class="btn btn-block btn-primary">返回</a>
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