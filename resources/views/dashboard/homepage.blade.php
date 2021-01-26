@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-primary">
                        <div class="card-body pb-0">
                            <div class="btn-group float-right">
                                <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="c-icon">
                                        <use xlink:href="assets/icons/free-symbol-defs.svg#cui-settings"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                                                                                                                                                                  href="#">Something
                                        else here</a></div>
                            </div>
                            <div class="text-value-lg">124</div>
                            <div>在线用户</div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart1" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-info">
                        <div class="card-body pb-0">
                            <button class="btn btn-transparent p-0 float-right" type="button">
                                <svg class="c-icon">
                                    <use xlink:href="assets/icons/free-symbol-defs.svg#cui-location-pin"></use>
                                </svg>
                            </button>
                            <div class="text-value-lg">9823M</div>
                            <div>本月使用流量</div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart2" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-warning">
                        <div class="card-body pb-0">
                            <div class="btn-group float-right">
                                <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="c-icon">
                                        <use xlink:href="assets/icons/free-symbol-defs.svg#cui-settings"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                                                                                                                                                                  href="#">Something
                                        else here</a></div>
                            </div>
                            <div class="text-value-lg">1242M</div>
                            <div>专网流量</div>
                        </div>
                        <div class="c-chart-wrapper mt-3" style="height:70px;">
                            <canvas class="chart" id="card-chart3" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-danger">
                        <div class="card-body pb-0">
                            <div class="btn-group float-right">
                                <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="c-icon">
                                        <use xlink:href="assets/icons/free-symbol-defs.svg#cui-settings"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                                                                                                                                                                  href="#">Something
                                        else here</a></div>
                            </div>
                            <div class="text-value-lg">2234M</div>
                            <div>站点流量</div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart4" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4 class="card-title mb-0">流量使用情况</h4>
                            <div class="small text-muted">2021年1月</div>
                        </div>
                        <!-- /.col-->
                        <div class="col-sm-7 d-none d-md-block">
                            <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                                <label class="btn btn-outline-secondary">
                                    <input id="option1" type="radio" name="options" autocomplete="off"> 专网
                                </label>
                                <label class="btn btn-outline-secondary active">
                                    <input id="option2" type="radio" name="options" autocomplete="off" checked=""> 站点
                                </label>
                                <label class="btn btn-outline-secondary">
                                    <input id="option3" type="radio" name="options" autocomplete="off"> 总流量
                                </label>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- /.row-->
                    <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                        <canvas class="chart" id="main-chart" height="300"></canvas>
                    </div>
                </div>
                {{--                <div class="card-footer">--}}
                {{--                  <div class="row text-center">--}}
                {{--                    <div class="col-sm-12 col-md mb-sm-2 mb-0">--}}
                {{--                      <div class="text-muted">Visits</div><strong>29.703 Users (40%)</strong>--}}
                {{--                      <div class="progress progress-xs mt-2">--}}
                {{--                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-sm-12 col-md mb-sm-2 mb-0">--}}
                {{--                      <div class="text-muted">Unique</div><strong>24.093 Users (20%)</strong>--}}
                {{--                      <div class="progress progress-xs mt-2">--}}
                {{--                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-sm-12 col-md mb-sm-2 mb-0">--}}
                {{--                      <div class="text-muted">Pageviews</div><strong>78.706 Views (60%)</strong>--}}
                {{--                      <div class="progress progress-xs mt-2">--}}
                {{--                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-sm-12 col-md mb-sm-2 mb-0">--}}
                {{--                      <div class="text-muted">New Users</div><strong>22.123 Users (80%)</strong>--}}
                {{--                      <div class="progress progress-xs mt-2">--}}
                {{--                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-sm-12 col-md mb-sm-2 mb-0">--}}
                {{--                      <div class="text-muted">Bounce Rate</div><strong>40.15%</strong>--}}
                {{--                      <div class="progress progress-xs mt-2">--}}
                {{--                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </div>--}}
                {{--                </div>--}}
            </div>
            <!-- /.card-->
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="card">
                        <div class="card-header bg-facebook content-center">
                            <svg class="c-icon c-icon-3xl text-white my-4">
                                <use xlink:href="assets/icons/brands/brands-symbol-defs.svg#facebook-f"></use>
                            </svg>
                            <div class="c-chart-wrapper">
                                <canvas id="social-box-chart-1" height="90"></canvas>
                            </div>
                        </div>
                        <div class="card-body row text-center">
                            <div class="col">
                                <div class="text-value-xl">89M</div>
                                <div class="text-uppercase text-muted small">使用量</div>
                            </div>
                            <div class="c-vr"></div>
                            <div class="col">
                                <div class="text-value-xl">剩余时间</div>
                                <div class="text-uppercase text-muted small">103天</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-4">
                    <div class="card">
                        <div class="card-header bg-twitter content-center">
                            <svg class="c-icon c-icon-3xl text-white my-4">
                                <use xlink:href="assets/icons/brands/brands-symbol-defs.svg#twitter"></use>
                            </svg>
                            <div class="c-chart-wrapper">
                                <canvas id="social-box-chart-2" height="90"></canvas>
                            </div>
                        </div>
                        <div class="card-body row text-center">
                            <div class="col">
                                <div class="text-value-xl">89M</div>
                                <div class="text-uppercase text-muted small">使用量</div>
                            </div>
                            <div class="c-vr"></div>
                            <div class="col">
                                <div class="text-value-xl">剩余时间</div>
                                <div class="text-uppercase text-muted small">103天</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-4">
                    <div class="card">
                        <div class="card-header bg-linkedin content-center">
                            <svg class="c-icon c-icon-3xl text-white my-4">
                                <use xlink:href="assets/icons/brands/brands-symbol-defs.svg#linkedin"></use>
                            </svg>
                            <div class="c-chart-wrapper">
                                <canvas id="social-box-chart-3" height="90"></canvas>
                            </div>
                        </div>
                        <div class="card-body row text-center">
                            <div class="col">
                                <div class="text-value-xl">89M</div>
                                <div class="text-uppercase text-muted small">使用量</div>
                            </div>
                            <div class="c-vr"></div>
                            <div class="col">
                                <div class="text-value-xl">剩余时间</div>
                                <div class="text-uppercase text-muted small">103天</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">上周 & 本周</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="c-callout c-callout-info"><small class="text-muted">本周流量</small>
                                                <div class="text-value-lg">9,123</div>
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                        <div class="col-6">
                                            <div class="c-callout c-callout-danger"><small class="text-muted">上周流量</small>
                                                <div class="text-value-lg">22,643</div>
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                    </div>
                                    <!-- /.row-->
                                    <hr class="mt-0">
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="progress-group-text">周2</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="progress-group-text">周2</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="progress-group-text">周3</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="progress-group-text">周4</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="progress-group-text">周5</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="progress-group-text">周6</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="progress-group-text">周日</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-->
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="c-callout c-callout-warning"><small class="text-muted">本周站点加速</small>
                                                <div class="text-value-lg">78,623</div>
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                        <div class="col-6">
                                            <div class="c-callout c-callout-success"><small class="text-muted">上周站点加速</small>
                                                <div class="text-value-lg">49,123</div>
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                    </div>
                                    <!-- /.row-->
                                    <hr class="mt-0">
                                    <div class="progress-group">
                                        <div class="progress-group-header">
                                            <svg class="c-icon progress-group-icon">
                                                <use xlink:href="assets/icons/free-symbol-defs.svg#cui-facebook"></use>
                                            </svg>
                                            <div>Facebook</div>
                                            <div class="ml-auto font-weight-bold">43%</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-5">
                                        <div class="progress-group-header">
                                            <svg class="c-icon progress-group-icon">
                                                <use xlink:href="assets/icons/free-symbol-defs.svg#cui-twitter"></use>
                                            </svg>
                                            <div>Twitter</div>
                                            <div class="ml-auto font-weight-bold">37%</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header align-items-end">
                                            <svg class="c-icon progress-group-icon">
                                                <use xlink:href="assets/icons/free-symbol-defs.svg#cui-linkedin"></use>
                                            </svg>
                                            <div>LinkedIn</div>
                                            <div class="ml-auto font-weight-bold mr-2">191.235</div>
                                            <div class="text-muted small">(56%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header align-items-end">
                                            <svg class="c-icon progress-group-icon">
                                                <use xlink:href="assets/icons/free-symbol-defs.svg#cui-facebook"></use>
                                            </svg>
                                            <div>Facebook</div>
                                            <div class="ml-auto font-weight-bold mr-2">51.223</div>
                                            <div class="text-muted small">(15%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header align-items-end">
                                            <svg class="c-icon progress-group-icon">
                                                <use xlink:href="assets/icons/free-symbol-defs.svg#cui-twitter"></use>
                                            </svg>
                                            <div>Twitter</div>
                                            <div class="ml-auto font-weight-bold mr-2">37.564</div>
                                            <div class="text-muted small">(11%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header align-items-end">
                                            <svg class="c-icon progress-group-icon">
                                                <use xlink:href="assets/icons/free-symbol-defs.svg#cui-linkedin"></use>
                                            </svg>
                                            <div>LinkedIn</div>
                                            <div class="ml-auto font-weight-bold mr-2">27.319</div>
                                            <div class="text-muted small">(8%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-->
                            </div>
                            <!-- /.row-->
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row-->
        </div>
    </div>

@endsection

@section('javascript')
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script src="{{ asset('js/chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/custom/main.js') }}" defer></script>
@endsection
