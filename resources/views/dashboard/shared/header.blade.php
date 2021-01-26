<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button>
    <a class="c-header-brand d-sm-none" href="#"><img class="c-header-brand" src="{{ url('/assets/brand/coreui-base.svg') }}" width='97' height='46' alt='CoreUI Logo'></a>
    <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true"><span
                class="c-header-toggler-icon"></span></button>

    {{--        @if(isset($appMenus['top']))--}}
    {{--            {{ \App\MenuBuilder\FreelyPositionedMenus::render($appMenus['top'], 'c-header-', 'd-md-down-none') }}--}}
    {{--        @endif--}}

    <ul class="c-header-nav mfs-auto">
        <li class="c-header-nav-item px-3 c-d-legacy-none">
            <button class="c-class-toggler c-header-nav-btn" type="button" id="header-tooltip" data-target="body" data-class="c-dark-theme" data-toggle="c-tooltip" data-placement="bottom"
                    title="Toggle Light/Dark Mode">
                <svg class="c-icon c-d-dark-none">
                    <use xlink:href="{{ url('/icons/sprites/free.svg#cil-moon') }}"></use>
                </svg>
                <svg class="c-icon c-d-default-none">
                    <use xlink:href="{{ url('/icons/sprites/free.svg#cil-sun') }}"></use>
                </svg>
            </button>
        </li>
    </ul>
    <ul class="c-header-nav">
        <li class="c-header-nav-item dropdown d-md-down-none mx-2">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <svg class="c-icon">
                    <use xlink:href="{{ url('/icons/sprites/free.svg#cil-bell') }}"></use>
                </svg>
                <span class="badge badge-pill badge-danger">5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                <div class="dropdown-header bg-light"><strong>你有5条消息</strong></div>
                <a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-success">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-user-follow') }}"></use>
                    </svg>
                    加速服务剩余5天到期,请续费</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-danger">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-user-unfollow') }}"></use>
                    </svg>
                    专线服务剩余4天到期,请续费</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-info">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-chart') }}"></use>
                    </svg>
                    加速服务剩余3天到期,请续费</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-success">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-basket') }}"></use>
                    </svg>
                    加速服务剩余2天到期,请续费</a>

                <a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-warning">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-speedometer') }}"></use>
                    </svg>
                    组网名额即将用完!
                </a>
            </div>
        </li>


        <li class="c-header-nav-item dropdown d-md-down-none mx-2 ">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <svg class="c-icon">
                    <use xlink:href="{{ url('/icons/sprites/free.svg#cil-list-rich') }}"></use>
                </svg>
                <span class="badge badge-pill badge-warning">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0 ">
                <div class="dropdown-header bg-light"><strong>查看使用情况</strong></div>
                <a class="dropdown-item d-block" href="#">
                    <div class="small mb-1">专线剩余时间<span class="float-right"><strong>0%</strong></span></div>
                    <span class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </span>
                </a>
                <a class="dropdown-item d-block" href="#">
                    <div class="small mb-1">站点加速剩余时间<span class="float-right"><strong>25%</strong></span></div>
                    <span class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </span>
                </a>
                <a class="dropdown-item d-block" href="#">
                    <div class="small mb-1">组网名额<span class="float-right"><strong>50%</strong></span></div>
                    <span class="progress progress-xs">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </span>
                </a>
            </div>
        </li>


        <li class="c-header-nav-item dropdown d-md-down-none mx-2">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <svg class="c-icon">
                    <use xlink:href="{{ url('/icons/sprites/free.svg#cil-envelope-open') }}"></use>
                </svg>
                <span class="badge badge-pill badge-info">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                <div class="dropdown-header bg-light"><strong>您有4条未读消息</strong></div>
                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div><small class="text-muted">系统消息</small><small class="text-muted float-right mt-1">1天前</small></div>
                        <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> 加速服务即将到期</div>
                        <div class="small text-muted text-truncate">您的加速服务器即将到期,避免服务暂停给您带来影响,清及时续费...</div>
                    </div>
                </a>

                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div><small class="text-muted">系统消息</small><small class="text-muted float-right mt-1">1天前</small></div>
                        <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> 加速服务即将到期</div>
                        <div class="small text-muted text-truncate">您的加速服务器即将到期,避免服务暂停给您带来影响,清及时续费...</div>
                    </div>
                </a>

                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div><small class="text-muted">系统消息</small><small class="text-muted float-right mt-1">1天前</small></div>
                        <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> 加速服务即将到期</div>
                        <div class="small text-muted text-truncate">您的加速服务器即将到期,避免服务暂停给您带来影响,清及时续费...</div>
                    </div>
                </a>

                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div><small class="text-muted">系统消息</small><small class="text-muted float-right mt-1">1天前</small></div>
                        <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> 加速服务即将到期</div>
                        <div class="small text-muted text-truncate">您的加速服务器即将到期,避免服务暂停给您带来影响,清及时续费...</div>
                    </div>
                </a>

                <a class="dropdown-item text-center border-top" href="#"><strong>查看所有消息</strong></a>
            </div>
        </li>


        <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/6.jpg') }}" alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                <a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-bell') }}"></use>
                    </svg>
                    Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-envelope-open') }}"></use>
                    </svg>
                    Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-task') }}"></use>
                    </svg>
                    Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-comment-square') }}"></use>
                    </svg>
                    Comments<span class="badge badge-warning ml-auto">42</span></a>
                <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
                <a class="dropdown-item" href="/users/{{ \Illuminate\Support\Facades\Auth::user()->id }}">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-user') }}"></use>
                    </svg>
                    Profile</a><a class="dropdown-item" href="/users/{{ \Illuminate\Support\Facades\Auth::user()->id }}/edit/">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-settings') }}"></use>
                    </svg>
                    Settings</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-credit-card') }}"></use>
                    </svg>
                    Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-file') }}"></use>
                    </svg>
                    Projects<span class="badge badge-primary ml-auto">42</span></a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-lock-locked') }}"></use>
                    </svg>
                    Lock Account</a>
                <a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-account-logout') }}"></use>
                    </svg>
                    <form action="{{ url('/logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-ghost-dark btn-block">退出</button>
                    </form>
                </a>
            </div>
        </li>

        <button class="c-header-toggler c-class-toggler mfe-md-3" type="button" data-target="#aside" data-class="c-sidebar-show">
        </button>
    </ul>
</header>