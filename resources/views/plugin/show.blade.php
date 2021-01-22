@extends('dashboard.base')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">

            <div class="row">
                @if(!empty($data))
                    @foreach($data as $item)
                        <div class="col-sm-12 col-xl-3">
                            <div class="card">
                                <div class="card-header"> {{$item->name}}
                                    <div class="card-header-actions"><a class="card-header-action" href="#" target="_blank"><small class="text-muted">docs</small></a></div>
                                </div>
                                <div class="card-body">
                                    <div class="jumbotron">
                                        <h3>{{$item->name}}</h3>
                                        <p class="lead pre-scrollable" style="height: 120px">
                                            {{$item->present}}
                                        </p>
                                        <hr class="my-4">
                                        <p panel-height> {{$item->description}}</p>
                                        <p class="lead float-right">
                                            <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-lg">
                                                <input class="c-switch-input" type="checkbox"><span class="c-switch-slider" data-checked="开通" data-unchecked="关闭"></span>
                                            </label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
@endsection


