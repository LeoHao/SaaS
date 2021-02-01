@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
             <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> User {{ $user->name }}</div>
                    <div class="card-body">
                        <h4>用户名: {{ $user->name }}</h4>
                        <h4>邮箱: {{ $user->email }}</h4>
                        <a href="{{ route('users.index') }}" class="btn btn-block btn-primary">返回</a>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection


@section('javascript')

@endsection
