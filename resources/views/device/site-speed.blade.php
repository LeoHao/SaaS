@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <style>
    .custom {
        width: 200px !important;
    }
    </style>
@endsection

@section('content')
  <div class="row m-auto">
      <div class="col-auto">
           <button type="button" class="btn btn-lg btn-outline-warning select-checked custom" value="1">
               <i class="fab fa-github text-dark fa-7x"></i>
          </button>
      </div>

       <div class="col-auto">
           <button type="button" class="btn btn-lg btn-outline-warning select-checked custom" value="2">
               <i class="fab fa-facebook-f text-primary fa-7x"></i>
          </button>
      </div>

      <div class="col-auto">
           <button type="button" class="btn btn-lg btn-outline-warning select-checked custom" value="3">
               <i class="fab fa-youtube text-danger fa-7x"></i>
          </button>
      </div>
  </div>
  <br>

  <div class="row align-items-center">
      <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
          <button class="btn btn-block btn-outline-success duration" type="button" value="1">
                <i class="fa fa-calendar text-primary fa-1x">1个月</i>
          </button>
      </div>
      <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
          <button class="btn btn-block btn-outline-success duration" type="button" value="2">
              <i class="fa fa-calendar text-primary fa-1x">2个月</i>
          </button>
      </div>
      <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
          <button class="btn btn-block btn-outline-success duration" type="button" value="3">
                <i class="fa fa-calendar text-primary fa-1x">3个月</i>
          </button>
      </div>

      <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
          <button class="btn btn-block btn-outline-success duration" type="button" value="4">
              <i class="fa fa-calendar text-primary fa-1x">4个月</i>
          </button>
      </div>

      <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
          <button class="btn btn-block btn-outline-success duration" type="button" value="5">
              <i class="fa fa-calendar text-primary fa-1x">5个月</i>
          </button>
      </div>
  </div>
  <br>

  <div class="col text-center">
      <button class="btn btn-success col-3" type="button" id="speed">
         <i class="fa fa-bolt text-danger fa-3x">加速</i>

      </button>
  </div>

@endsection

@section('javascript')
    <script>
        $(document).ready(function () {
            var id
            var duration
            $(".select-checked").click(function () {
                $(".select-checked").removeClass('btn-warning');
                $(".select-checked").addClass('btn-outline-warning');

                $(this).addClass("btn-warning");
                $(this).removeClass("btn-outline-warning");
                id = $(this).val()
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
