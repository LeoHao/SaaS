<!DOCTYPE html>
<!--
* CoreUI Free Laravel Bootstrap Admin Template
* @version v2.0.1
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Icons-->
    <link href="{{ asset('css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
    <link href="{{ asset('css/flag.min.css') }}" rel="stylesheet"> <!-- icons -->
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('css')

    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>

    <link href="{{ asset('css/coreui-chartjs.css') }}" rel="stylesheet">
  </head>



  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

      @include('dashboard.shared.nav-builder')

      @include('dashboard.shared.header')

      <div class="c-body">

        <main class="c-main">

          @yield('content')

        </main>
        @include('dashboard.shared.footer')
      </div>
    </div>

    <div class="c-sidebar c-sidebar-lg c-sidebar-light c-sidebar-right c-sidebar-overlaid" id="aside">
        <button class="c-sidebar-close c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-show" responsive="true">
            <svg class="c-icon">
                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-x') }}"></use>
            </svg>
        </button>
        <ul class="nav nav-tabs nav-underline nav-underline-primary" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                    <svg class="c-icon">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-list') }}"></use>
                    </svg></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                    <svg class="c-icon">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-speech') }}"></use>
                    </svg></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                    <svg class="c-icon">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-settings') }}"></use>
                    </svg></a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="timeline" role="tabpanel">
                <div class="list-group list-group-accent">
                    <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase c-small">Today</div>
                    <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                        <div class="c-avatar float-right"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/7.jpg') }}" alt="user@email.com"></div>
                        <div>Meeting with <strong>Lucas</strong></div><small class="text-muted mr-3">
                            <svg class="c-icon">
                                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-calendar') }}"></use>
                            </svg>&nbsp; 1 - 3pm</small><small class="text-muted">
                            <svg class="c-icon">
                                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-location-pin') }}"></use>
                            </svg>&nbsp; Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-info">
                        <div class="c-avatar float-right"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/4.jpg') }}" alt="user@email.com"></div>
                        <div>Skype with <strong>Megan</strong></div><small class="text-muted mr-3">
                            <svg class="c-icon">
                                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-calendar') }}"></use>
                            </svg>&nbsp; 4 - 5pm</small><small class="text-muted">
                            <svg class="c-icon">
                                <use xlink:href="{{ url('/icons/sprites/brand.svg#cib-skype') }}"></use>
                            </svg>&nbsp; On-line</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase c-small">Tomorrow</div>
                    <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                        <div>New UI Project - <strong>deadline</strong></div><small class="text-muted mr-3">
                            <svg class="c-icon">
                                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-calendar') }}"></use>
                            </svg>&nbsp; 10 - 11pm</small><small class="text-muted">
                            <svg class="c-icon">
                                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-home') }}"></use>
                            </svg>&nbsp; creativeLabs HQ</small>
                        <div class="c-avatars-stack mt-2">
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/2.jpg') }}" alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/3.jpg') }}" alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/4.jpg') }}" alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/5.jpg') }}" alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/6.jpg') }}" alt="user@email.com"></div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                        <div><strong>#10 Startups.Garden</strong> Meetup</div><small class="text-muted mr-3">
                            <svg class="c-icon">
                                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-calendar') }}"></use>
                            </svg>&nbsp; 1 - 3pm</small><small class="text-muted">
                            <svg class="c-icon">
                                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-location-pin') }}"></use>
                            </svg>&nbsp; Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                        <div><strong>Team meeting</strong></div><small class="text-muted mr-3">
                            <svg class="c-icon">
                                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-calendar') }}"></use>
                            </svg>&nbsp; 4 - 6pm</small><small class="text-muted">
                            <svg class="c-icon">
                                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-home') }}"></use>
                            </svg>&nbsp; creativeLabs HQ</small>
                        <div class="c-avatars-stack mt-2">
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/2.jpg') }}" alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/3.jpg') }}" alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/4.jpg') }}" alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/5.jpg') }}" alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/6.jpg') }}" alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/7.jpg') }}" alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/8.jpg') }}" alt="user@email.com"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-3" id="messages" role="tabpanel">
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/7.jpg') }}" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/7.jpg') }}" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/7.jpg') }}" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/7.jpg') }}" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/7.jpg') }}" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
            </div>
            <div class="tab-pane p-3" id="settings" role="tabpanel">
                <h6>Settings</h6>
                <div class="c-aside-options">
                    <div class="clearfix mt-4"><small><b>Option 1</b></small>
                        <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                            <input class="c-switch-input" type="checkbox" checked=""><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
                </div>
                <div class="c-aside-options">
                    <div class="clearfix mt-3"><small><b>Option 2</b></small>
                        <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                            <input class="c-switch-input" type="checkbox"><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
                </div>
                <div class="c-aside-options">
                    <div class="clearfix mt-3"><small><b>Option 3</b></small>
                        <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                            <input class="c-switch-input" type="checkbox"><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <div class="c-aside-options">
                    <div class="clearfix mt-3"><small><b>Option 4</b></small>
                        <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                            <input class="c-switch-input" type="checkbox" checked=""><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <hr>
                <h6>System Utilization</h6>
                <div class="text-uppercase mb-1 mt-4"><small><b>CPU Usage</b></small></div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-muted">348 Processes. 1/4 Cores.</small>
                <div class="text-uppercase mb-1 mt-2"><small><b>Memory Usage</b></small></div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-muted">11444GB/16384MB</small>
                <div class="text-uppercase mb-1 mt-2"><small><b>SSD 1 Usage</b></small></div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-muted">243GB/256GB</small>
                <div class="text-uppercase mb-1 mt-2"><small><b>SSD 2 Usage</b></small></div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-muted">25GB/256GB</small>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('js/coreui-utils.js') }}"></script>
    <script src="{{ asset('js/svgxuse.min.js') }}"></script>{{--    svn图标--}}
    @yield('javascript')


    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            setTimeout(function() {
                document.body.classList.remove('c-no-layout-transition')
            }, 2000);
        });
    </script>


  </body>
</html>
