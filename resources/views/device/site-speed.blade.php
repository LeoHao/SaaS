@extends('dashboard.base')

@section('css')
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="fade-in">

            <div class="row m-auto">
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-header bg-facebook content-center border" id="1">
                            <svg class="c-icon c-icon-3xl text-white my-4 select-checked">
                                <use xlink:href="{{ asset('/assets/icons/brands/brands-symbol-defs.svg#facebook-f') }}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-2">
                    <div class="card">
                        <div class="card-header bg-twitter content-center border" id="2">
                            <svg class="c-icon c-icon-3xl text-white my-4 select-checked">
                                <use xlink:href="{{ asset('/assets/icons/brands/brands-symbol-defs.svg#twitter') }}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-2">
                    <div class="card">
                        <div class="card-header bg-linkedin content-center border" id="3">
                            <svg class="c-icon c-icon-3xl text-white my-4 select-checked">
                                <use xlink:href="{{ asset('/assets/icons/brands/brands-symbol-defs.svg#linkedin') }}"></use>
                            </svg>

                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-2">
                    <div class="card">
                        <div class="card-header bg-github content-center border" id="4">
                            <svg class="c-icon c-icon-3xl text-white my-4 select-checked">
                                <use xlink:href="{{ asset('/assets/icons/brands/brands-symbol-defs.svg#github') }}"></use>
                            </svg>

                        </div>
                    </div>
                </div>
                <!-- /.col-->

                <div class="col-sm-6 col-lg-2">
                    <div class="card">
                        <div class="card-header bg-stack-overflow content-center border" id="5">
                            <svg class="c-icon c-icon-3xl text-white my-4 select-checked">
                                <use xlink:href="{{ asset('/assets/icons/brands/brands-symbol-defs.svg#stack-overflow') }}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- /.col-->

                <div class="col-sm-6 col-lg-2">
                    <div class="card">
                        <div class="card-header bg-youtube content-center border" id="6">
                            <svg class="c-icon c-icon-3xl text-white my-4 select-checked">
                                <use xlink:href="{{ asset('/assets/icons/brands/brands-symbol-defs.svg#youtube') }}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <br>

            <div class="row align-items-center">
                <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button class="btn btn-block btn-outline-success duration" type="button" value="1">1个月</button>
                </div>
                <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button class="btn btn-block btn-outline-success duration" type="button" value="2">2个月</button>
                </div>
                <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button class="btn btn-block btn-outline-success duration" type="button" value="3">3个月</button>
                </div>

                <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button class="btn btn-block btn-outline-success duration" type="button" value="4">4个月</button>
                </div>

                <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button class="btn btn-block btn-outline-success duration" type="button" value="5">5个月</button>
                </div>
            </div>
            <br>

            <div class="col text-center">
                <button class="btn btn-success col-3" type="button" id="speed">
                    <svg class="c-icon">
                        <use xlink:href="{{ asset('/icons/sprites/brand.svg#cib-mediafire') }}"></use>
                    </svg>
                    加速
                </button>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function () {
            var id
            var duration
            $(".border").click(function () {
                $(".border").removeClass('border-success');
                $(this).addClass("border-success");
                $(".select-checked").removeClass('text-success');
                $(this).children('svg').addClass("text-success");
                id = $(this).attr('id')
            })

            $(".duration").click(function () {
                $(".duration").removeClass('btn-success');
                $(".duration").addClass('btn-outline-success');
                $(this).removeClass("btn-outline-success");
                $(this).addClass("btn-success");

                duration = $(this).val()
            })


            $('#speed').click(function () {
                if (!id) {
                    alert('请选择站点')
                    return;
                }

                if (!duration) {
                    alert('请选择时长')
                    return;
                }

                $.ajax({
                    type: 'POST',
                    url: '{{ route('device.site-speed-open') }}',
                    data: {
                        id: id,
                        device_id: '{{ $device->id }}',
                        duration: duration,
                        plugin_id: 2,
                        '_token': '{{ csrf_token() }}',
                    }
                }).done(function (data) {
                    alert(data.message)
                    if (data.type == 'success') {
                        window.location.replace("{{route('device.index')}}");
                    }
                });
            })
        })
    </script>
@endsection
