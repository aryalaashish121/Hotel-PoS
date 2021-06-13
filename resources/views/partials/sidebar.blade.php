<div class="c-sidebar c-sidebar-dark  c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui-pro.svg#full"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui-pro.svg#signet"></use>
        </svg>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                </svg> {{ __('Dashboard') }}<span class="badge badge-info">{{ __('NEW') }}</span></a>
        </li>
        @if (auth()->user()->is_admin)

            <li class="c-sidebar-nav-title">Admin</li>
            <li class="c-sidebar-nav-item c-sidebar-nav-dropdown c-show"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle c-active" href="#">
                <svg class="c-sidebar-nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                </svg> {{__('Rooms')}}</a>
                <ul class="c-sidebar-nav-dropdown-items">

                <li class="c-sidebar-nav-item"> <a class="c-sidebar-nav-link" href="{{ route('admin.roomtype.index') }}">
                    <span>{{ __('Room Types') }}</span></a></li>
                    <li class="c-sidebar-nav-item"> <a class="c-sidebar-nav-link" href="{{ route('admin.rooms.index') }}">
                        <span>{{ __('Rooms') }}</span></a></li>
                </ul>
                </li>
                {{-- Customers --}}
                <li class="c-sidebar-nav-item c-sidebar-nav-dropdown c-show"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle c-active" href="{{ route('admin.customer.index') }}">
                    <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg> {{__('Customers')}}</a>
                    <ul class="c-sidebar-nav-dropdown-items">
    
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="{{ route('admin.customer.index') }}">
                            <span>{{ __('Customers') }}</span>
                        </a>
                    </li>
                        {{-- <li class="c-sidebar-nav-item"> 
                            <a class="c-sidebar-nav-link" href="{{ route('admin.customer.index') }}">
                                 <span>{{ __('Rooms') }}</span>
                            </a>
                        </li> --}}
                    </ul>
                    </li>
        @endif
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                </svg> {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-unfoldable">
    </button>
</div>
