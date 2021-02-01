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
@endsection

@section('content')
  <div class="row">
      <!-- [ Smart-Wizard ] start -->
      <div class="col-sm-12">
          <div class="card">
              <div class="card-header">
                  <h5>专网</h5>
              </div>
              <div class="card-block">
                <!-- [ SmartWizard html ] start -->
                  <div id="smartwizard">
                       <ul>
                          <li><a href="#step-l-1">
                                  <h6>选择所在地</h6>
                              {{--                                  <p class="m-0">选择所在地</p>--}}
                              </a></li>
                          <li><a href="#step-l-2">
                                  <h6>选择目的地</h6>
                              {{--                                  <p class="m-0">选择目的地</p>--}}
                              </a></li>
                          <li><a href="#step-l-3">
                                  <h6>选择带宽</h6>
                              {{--                                  <p class="m-0">选择带宽</p>--}}
                              </a></li>
                          <li><a href="#step-l-4">
                                  <h6>选择时长</h6>
                              {{--                                  <p class="m-0">选择时长</p>--}}
                              </a></li>
                           <li><a href="#step-l-5">
                                  <h6>确认</h6>
                               {{--                                  <p class="m-0">选择时长</p>--}}
                              </a></li>
                      </ul>
                      <div>
                           <div id="step-l-1">
                              <h5>所在地</h5>
                              <hr>
                              <h6>所在地</h6>
                              <div class="form-group">
                                    <div class="col-md-9 col-form-label">
                                        @foreach($nodes as $node)
                                        <div class="form-check form-check-inline mr-1">
                                              <input class="form-check-input" id="location-{{$node->id}}" type="radio" value="{{$node->id}}" name="node_id">
                                              <label class="form-check-label" for="location-{{$node->id}}">{{$node->name}}</label>
                                          </div>
                                      @endforeach
                                    </div>
                              </div>
                          </div>
                          <div id="step-l-2">
                              <h5>目的地</h5>
                              <hr>
                              <h6>目的地</h6>
                               <div class="form-group">
                                    <div class="col-md-9 col-form-label">
                                      @foreach($dests as $dest)
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="destination-{{$dest->id}}" type="radio" value="{{$dest->id}}" name="dest_id">
                                            <label class="form-check-label" for="destination-{{$dest->id}}">{{$dest->name}}</label>
                                        </div>
                                      @endforeach
                                    </div>
                                </div>
                          </div>
                          <div id="step-l-3">
                              <h5>带宽</h5>
                              <hr>
                              <h6>带宽</h6>
                              <div class="form-group">
                                   <div class="col-md-9 col-form-label">
                                          <input id="ex6" type="text" data-slider-min="1" data-slider-max="100" data-slider-step="1" data-slider-value="1">
                                          &nbsp;
                                          &nbsp;
                                          <span id="ex6CurrentSliderValLabel">
                                            <span id="ex6SliderVal">1</span>M
                                          </span>
                                  </div>
                              </div>
                          </div>
                          <div id="step-l-4">
                              <h5>时长</h5>
                              <hr>
                              <h6>时长</h6>
                              <div class="form-group">
                                <div class="col-md-9 col-form-label">
                                  <input id="ex13" type="text" data-slider-ticks="[1, 3, 6, 12, 24, 36]" data-slider-ticks-snap-bounds="30" data-slider-ticks-labels="[&quot;1个月&quot;, &quot;3个月&quot;, &quot;6个月&quot;, &quot;12个月&quot;, &quot;24个月&quot;, &quot;36个月&quot;]" style="display: none;" data-value="1" value="1">
                                </div>
                              </div>
                          </div>

                         <div id="step-l-5">
                              <h5>提交申请</h5>
                              <hr>
                              <h6>提交申请</h6>
                              <div>
                                  <button class="btn btn-sm btn-danger" type="reset"> 返回</button>
                                  <button class="btn btn-sm btn-primary" type="submit"> 确认</button>
                              </div>
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
        // [ current-Slider ]
        $(function () {
            var slider = new Slider("#ex6");
            slider.on("slide", function (sliderValue) {
                document.getElementById("ex6SliderVal").textContent = sliderValue;
            });

            var slider = new Slider("#ex13", {
                ticks: [1, 3, 6, 12, 24, 36],
                ticks_labels: ['1个月', '3个月', '6个月', '1年', '2年', '3年'],
                ticks_snap_bounds: 1
            });
        });
  </script>


@endsection
