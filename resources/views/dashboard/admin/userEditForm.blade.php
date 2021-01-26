@extends('dashboard.base')

@section('content')
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> 编辑 {{ $user->name }} 用户</strong>
                            <small>Form</small>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('users.update',[$user->id]) }}" method="POST">
                                @csrf
                                @method('PUT')

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
                                    <label for="name">用户名</label>
                                    <input class="form-control" id="name" name="name" type="text" placeholder="" value="{{ $user->name }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">邮箱</label>
                                    <input class="form-control" id="email" name="email" type="text" placeholder="" value="{{ $user->email }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="company">公司</label>
                                    <select class="form-control" id="company" name="company_id">
                                        @foreach($companies as $company)
                                            <option value="{{$company->id}}" {{$user->company->name == $company->id ? 'selected' : ''}}>{{$company->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">角色权限</label>
                                    <div class="col-md-9 col-form-label">
                                        @foreach($roles as $role)

                                            <div class="form-check checkbox">
                                                @if(in_array($role,$userRoles))
                                                    <input class="form-check-input" id="{{$role}}" type="checkbox" name="role[]" value="{{$role}}" checked>
                                                    <label class="form-check-label" for="{{$role}}">{{$role}}</label>
                                                @else
                                                    <input class="form-check-input" id="{{$role}}" type="checkbox" name="role[]" value="{{$role}}">
                                                    <label class="form-check-label" for="{{$role}}">{{$role}}</label>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>


                                <div class="card-footer">
                                    <div class="row float-right">
                                        <a class="btn btn-primary" href="{{ route('users.index')  }}">返回</a>
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
    </div>

@endsection

@section('javascript')
@endsection
