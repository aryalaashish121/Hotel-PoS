<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
   

    <title>{{ config('app.name', 'HOTElPOS') }}</title>
</head>

<body class="c-app c-dark-theme c-no-layout-transition">

    @include('partials.sidebar')

    {{-- header section started --}}
    <div class="c-wrapper">
        <header class="c-header c-header-light c-header-fixed">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
                data-class="c-sidebar-show">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                </svg>
            </button><a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="assets/brand/coreui-pro.svg#full"></use>
                </svg></a>
            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                data-class="c-sidebar-lg-show" responsive="true">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                </svg>
            </button>
            <ul class="c-header-nav d-md-down-none">
                <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">{{__('Dashboard')}}</a></li>
            </ul>
            <ul class="c-header-nav mfs-auto">
                <li class="c-header-nav-item px-3 c-d-legacy-none">
                    <button class="c-class-toggler c-header-nav-btn" type="button" id="header-tooltip"
                        data-target="body" data-class="c-dark-theme" data-toggle="c-tooltip" data-placement="bottom"
                        title="Toggle Light/Dark Mode">
                        <svg class="c-icon c-d-dark-none">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-moon') }}"></use>
                        </svg>
                        <svg class="c-icon c-d-default-none">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-sun"') }}'></use>
</svg>
</button>
</li>
</ul>
    <ul class=" c-header-nav">
                <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link"
                        data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <svg class="c-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}">
                            </use>
                        </svg><span class="badge badge-pill badge-info">7</span></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                        <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div><a
                            class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 mfe-3 float-left">
                                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg"><span
                                            class="c-avatar-status bg-success"></span></div>
                                </div>
                                <div><small class="text-muted">John Doe</small><small
                                        class="text-muted float-right mt-1">Just now</small></div>
                                <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important
                                    message</div>
                                <div class="small text-muted text-truncate">message</div>
                            </div>
                        </a>
                        <a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
                    </div>
                </li>
                <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0">
                        <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a
                            class="dropdown-item" href="#">

                            <a  class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <svg class="c-icon mfe-2">
                                    <use
                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}">
                                    </use>
                                </svg> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </div>
                </li>
            </ul>

        </header>
        <div class="c-body">
            <main class="c-main">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then CoreUI JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.js"
        integrity="sha512-4ejaN8M2YXbJ7KVP13DaCS0fZOoNCUPukqOMumr8r32Xz1/2wRw4nCKJrNmTxstfH5Gf2oLe27YpAPiQr2OnTQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>

</html>
