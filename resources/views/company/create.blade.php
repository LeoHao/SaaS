@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
            <strong>创建企业</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('company.store') }}" method="POST">
                @csrf
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
                    <label for="company">企业名称</label>
                    <input class="form-control" id="name" name="name" type="text" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="vat">企业描述</label>
                    <input class="form-control" id="description" name="description" type="text" placeholder="" required>
                </div>

                <div class="card-footer">
                    <div class="row float-right">
                        <a class="btn btn-primary" href="{{ route('company.index') }}">返回</a>
                        &nbsp
                        <button class="btn btn-primary" type="submit"> 添加</button>
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
  <script src="{{ asset('js/menu-create.js') }}"></script>
@endsection
