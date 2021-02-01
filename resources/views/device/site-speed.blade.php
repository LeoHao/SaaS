@extends('layouts.app')

@section('css')
  <link href="{{ asset('assets/plugins/range-slider/css/bootstrap-slider.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/pages/rangeslider.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/plugins/smart-wizard/css/smart_wizard.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/plugins/smart-wizard/css/smart_wizard_theme_arrows.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/plugins/smart-wizard/css/smart_wizard_theme_circles.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/plugins/smart-wizard/css/smart_wizard_theme_dots.min.css') }}" rel="stylesheet">

  <!-- vendor css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- dark layouts -->
  <link rel="stylesheet" href="{{ asset('assets/css/layouts/dark.css') }}">

  <style>
    .custom {
        width: 200px !important;
    }
    </style>
@endsection

@section('content')
  <div class="row">
     <!-- [ Smart-Wizard ] start -->
      <div class="col-sm-12">
          <div class="card">
              <div class="card-header">
                  <h5>站点加速</h5>
              </div>
              <div class="card-block">
                <!-- [ SmartWizard html ] start -->
                  <div id="smartwizard">
                         <ul>
              <li>
                <a href="#step-l-1">
                      <h6>选择加速站点</h6>
                  {{--                                  <p class="m-0">选择所在地</p>--}}
                  </a>
              </li>
              <li>
                <a href="#step-l-2">
                      <h6>选择时长</h6>
                  {{--                                  <p class="m-0">选择目的地</p>--}}
                  </a>
              </li>
              <li>
                <a href="#step-l-3">
                      <h6>确认</h6>
                  {{--                                  <p class="m-0">选择带宽</p>--}}
                  </a>
              </li>
          </ul>
         <div>
           <div id="step-l-1">
              <h5>站点</h5>
              <div class="form-group">
                <button type="button" class="btn btn-lg btn-outline-warning select-checked custom" value="1">
                  <i class="fab fa-github text-dark fa-7x"></i>
                </button>

                <button type="button" class="btn btn-lg btn-outline-warning select-checked custom" value="2">
                  <i class="fab fa-facebook-f text-primary fa-7x"></i>
                </button>

                <button type="button" class="btn btn-lg btn-outline-warning select-checked custom" value="3">
                  <i class="fab fa-youtube text-danger fa-7x"></i>
                </button>
              </div>
           </div>
           <div id="step-l-2">
             <h5>时长</h5>
             <div class="form-group">
               <div class="col-md-9 col-form-label">
                 <input id="duration" type="text" data-slider-min="1" data-slider-max="36" data-slider-step="1" data-slider-value="1">
                  <br>
                 <span id="ex6CurrentSliderValLabel">
                    <span id="durationVal">1</span>个月
                 </span>
               </div>
             </div>
           </div>
           <div id="step-l-3">
                <h5>提交申请</h5>
                <button class="btn btn-success" type="button" id="speed">
                   <i class="fa fa-rocket text-danger fa-3x">提交</i>
                </button>
            </div>
         </div>
                  </div>
              </div>
          </div>
      </div>
     <!-- [ Smart-Wizard ] end -->
  </div>
@endsection

@section('javascript')
  <script src="{{ asset('assets/plugins/smart-wizard/js/jquery.smartWizard.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/range-slider/js/bootstrap-slider.min.js') }}"></script>

  <script src="{{ asset('assets/js/pages/wizard-custom.js') }}" defer></script>

  <script>
        $(document).ready(function () {
            var slider = new Slider("#duration");
            slider.on("slide", function (sliderValue) {
                document.getElementById("durationVal").textContent = sliderValue;
            });

            var id
            var duration
            $(".select-checked").click(function () {
                $(".select-checked").removeClass('btn-warning');
                $(".select-checked").addClass('btn-outline-warning');

                $(this).addClass("btn-warning");
                $(this).removeClass("btn-outline-warning");
                id = $(this).val()
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
                        duration: $('#duration').val(),
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
