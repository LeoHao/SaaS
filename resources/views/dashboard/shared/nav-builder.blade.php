<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand">
        <img class="c-sidebar-brand-full" src="{{ url('/assets/brand/coreui-base-white.svg') }}" width="118" height="46" alt="CoreUI Logo">
        <img class="c-sidebar-brand-minimized" src="{{ url('/assets/brand/coreui-signet-white.svg') }}" width="118" height="46" alt="CoreUI Logo">
    </div>
    <ul class="c-sidebar-nav">
        @if(isset($appMenus))
            @foreach($appMenus as $menu)
                @if($menu['slug'] === 'link')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="{{ url($menu['href']) }}">
                            @if($menu['hasIcon'] === true &&$menu['iconType'] === 'coreui')
                                <i class="{{ $menu['icon'] }} c-sidebar-nav-icon"></i>
                            @endif
                            {{ $menu['name'] }}
                        </a>
                    </li>
                @elseif($menu['slug'] === 'dropdown')
                    <li class="c-sidebar-nav-dropdown">
                        <a class="c-sidebar-nav-dropdown-toggle" href="#">
                            @if($menu['hasIcon'] === true &&$menu['iconType'] === 'coreui')
                                <i class="{{ $menu['icon'] }} c-sidebar-nav-icon"></i>
                            @endif
                            {{ $menu['name'] }}
                        </a>
                        @if(!empty($menu['elements']))
                            <ul class="c-sidebar-nav-dropdown-items ml-3">
                                @foreach($menu['elements'] as $elements)
                                    <li class="c-sidebar-nav-item">
                                        <a class="c-sidebar-nav-link" href="{{ isset($elements['href']) ? url($elements['href']) : '#' }}">
                                            @if($elements['hasIcon'] === true &&$elements['iconType'] === 'coreui')
                                                <i class="{{ $elements['icon'] }} c-sidebar-nav-icon"></i>
                                            @endif
                                            {{ $elements['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @elseif($menu['slug'] === 'title')
                    <li class="c-sidebar-nav-title">
                        @if($menu['hasIcon'] === true &&$menu['iconType'] === 'coreui')
                            <i class="{{ $menu['icon'] }} c-sidebar-nav-icon"></i>
                        @endif
                        {{ $menu['name'] }}
                    </li>
                @endif
            @endforeach
        @endif

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
