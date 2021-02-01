<!-- [ navigation menu ] start -->


<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="/" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">PPIP SaaS</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                @if(isset($appMenus))
                    @foreach($appMenus as $menu)
                        @if($menu['slug'] === 'link')
                            <li data-username="message" class="nav-item">
                                <a href="{{ url($menu['href']) }}" class="nav-link">
                                      <span class="pcoded-micon">
                                          @if($menu['hasIcon'] === true &&$menu['iconType'] === 'coreui')
                                              <i class="feather {{ $menu['icon'] }}"></i>
                                          @endif
                                      </span>
                                    <span class="pcoded-mtext">{{ $menu['name'] }}</span>
                                </a>
                            </li>
                        @elseif($menu['slug'] === 'dropdown')
                            <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                                class="nav-item pcoded-hasmenu">
                                <a href="#!" class="nav-link">
                                    @if($menu['hasIcon'] === true &&$menu['iconType'] === 'coreui')
                                        <span class="pcoded-micon">
                                            <i class="feather {{ $menu['icon'] }}"></i>
                                        </span>
                                    @endif
                                    <span class="pcoded-mtext"> {{ $menu['name'] }}</span>
                                </a>
                                @if(!empty($menu['elements']))
                                    <ul class="pcoded-submenu">
                                        @foreach($menu['elements'] as $elements)
                                            <li>
                                                <a class="c-sidebar-nav-link" href="{{ isset($elements['href']) ? url($elements['href']) : '#' }}">
                                                    {{ $elements['name'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @elseif($menu['slug'] === 'title')
                            <li class="nav-item pcoded-menu-caption">
                                <label>{{ $menu['name'] }}</label>
                            </li>
                        @endif
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
