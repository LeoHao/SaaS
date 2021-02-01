@extends('layouts.app')

@section('content')
<div class="row">
    @if(!empty($data))
        @foreach($data as $item)
            <div class="col-sm-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="jumbotron">
                            <h3>
                                {{$item->name}}
                                <i class="fas fa-space-shuttle"></i>
                            </h3>
                            <p class="lead pre-scrollable" style="height: 50px">
                                {{$item->present}}
                            </p>
                            <hr class="my-4">
                            <p panel-height> {{$item->description}}</p>

                            <div class="switch d-inline m-r-10 float-right">
                                <input type="hidden" id='pluginId{{$item->id}}' value="{{$item->id}}">
                                <input type="checkbox" id="status{{$item->id}}" value="{{$item->id}}" {{ (isset($item->companyPlugins->status) &&$item->companyPlugins->status == 1) ? 'checked' : ''}}>
                                <label for="status{{$item->id}}" class="cr"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function () {
            $('input:checkbox').change(function () {

                var pluginId = $(this).val()
                var status = 0
                if ($(this).is(":checked")) {
                    status = 1;
                } else {
                    status = 0;
                }

                $.ajax({
                    type: 'POST',
                    url: '/plugin/open',
                    data: {
                        id: $('#pluginId'+pluginId).val(),
                        status: status,
                        '_token': '{{ csrf_token() }}',
                    }
                }).done(function (data) {
                    // console.log(data)
                    if (data.status == 0) {
                        $(this).checked = false
                    }
                });
            })
        });
    </script>
@endsection