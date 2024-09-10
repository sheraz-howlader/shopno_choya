<header class="pc-header">
    <div class="m-header">
        <a href="" class="b-brand text-primary">
            <img src="{{ asset('logo.png') }}" alt="logo image" class="logo-lg" width="70%">
            <span class="badge bg-white text-dark rounded-pill ms-2 theme-version">v{{ config('app.version') }}</span>
        </a>
    </div>
    <div class="header-wrapper">
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="ph ph-list"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ph ph-list"></i>
                    </a>
                </li>
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#"
                       role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ph ph-magnifying-glass"></i>
                    </a>
                    <div class="dropdown-menu pc-h-dropdown drp-search">
                        <form class="px-3">
                            <div class="form-group mb-0 d-flex align-items-center">
                                <input type="search" class="form-control border-0 shadow-none"
                                       placeholder="Search here. . .">
                                <button class="btn btn-light-secondary btn-search">Search</button>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>

        <div class="ms-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                       role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ph ph-sun-dim"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                        <a href="#!" class="dropdown-item"
                           onclick="if (!window.__cfRLUnblockHandlers) return false; layout_change('dark')"
                           data-cf-modified-6c705b80c5ee6d73b3f92550->
                            <i class="ph ph-moon"></i>
                            <span>Dark</span>
                        </a>
                        <a href="#!" class="dropdown-item"
                           onclick="if (!window.__cfRLUnblockHandlers) return false; layout_change('light')"
                           data-cf-modified-6c705b80c5ee6d73b3f92550->
                            <i class="ph ph-sun-dim"></i>
                            <span>Light</span>
                        </a>
                        <a href="#!" class="dropdown-item"
                           onclick="if (!window.__cfRLUnblockHandlers) return false; layout_change_default()"
                           data-cf-modified-6c705b80c5ee6d73b3f92550->
                            <i class="ph ph-cpu"></i>
                            <span>Default</span>
                        </a>
                    </div>
                </li>

                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                       role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ph ph-diamonds-four"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                        <a href="#!" class="dropdown-item">
                            <i class="ph ph-user"></i>
                            <span>My Account</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="ph ph-gear"></i>
                            <span>Settings</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="ph ph-lifebuoy"></i>
                            <span>Support</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="ph ph-lock-key"></i>
                            <span>Lock Screen</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="ph ph-power"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>

                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                       role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ph ph-bell"></i>
                        <span class="badge bg-success pc-h-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h4 class="m-0">Notifications</h4>
                            <ul class="list-inline ms-auto mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="avtar avtar-s btn-link-hover-primary">
                                        <i class="ti ti-arrows-diagonal f-18"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="avtar avtar-s btn-link-hover-danger">
                                        <i class="ti ti-x f-18"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-body text-wrap header-notification-scroll position-relative"
                             style="max-height: calc(100vh - 235px)">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <p class="text-span">Today</p>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{ auth()->user()->thumbnail() }}" alt="user-image"
                                                 class="user-avtar avtar avtar-s">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 me-3 position-relative">
                                                    <h5 class="mb-0 text-truncate">Keefe Bond <span class="text-body"> added new tags to </span>
                                                        💪
                                                        Design system</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="text-sm text-muted">2 min ago</span>
                                                </div>
                                            </div>
                                            <p class="position-relative text-muted mt-1 mb-2"><br>
                                                <span class="text-truncate">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span>
                                            </p>
                                            <span class="badge bg-light-primary border border-primary me-1 mt-1">web design</span>
                                            <span class="badge bg-light-warning border border-warning me-1 mt-1">Dashobard</span>
                                            <span class="badge bg-light-success border border-success me-1 mt-1">Design System</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-footer">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Archive all</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="btn btn-outline-secondary">Mark all as read</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="dropdown pc-h-item header-user-profile">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                       role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                        <img src="{{ asset(auth()->user()->thumbnail()) }} " alt="user-image" class="user-avtar">
                    </a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h4 class="m-0">{{ auth()->user()->role->name }} - Profile</h4>
                        </div>
                        <div class="dropdown-body">
                            <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset(auth()->user()->thumbnail()) }}" alt="user-image"
                                                     class="wid-50 rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 mx-3">
                                                <h5 class="mb-0 text-capitalize"> {{ auth()->user()->name }} </h5>
                                                <a class="link-primary" href="">
                                                    <span class="__cf_email__"> {{ auth()->user()->email }} </span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph ph-key"></i>
                                                <span>Change password</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph ph-user-circle"></i>
                                                <span>Edit profile</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph ph-gear-six"></i>
                                                <span>Settings</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph ph-plus-circle"></i>
                                                <span>Add account</span>
                                            </span>
                                        </a>

                                        <form action="{{ route('logout') }}" method="post" class="">
                                            @csrf
                                            <button type="submit" class="btn dropdown-item">
                                                <span class="d-flex align-items-center">
                                                    <i class="ph ph-power"></i>
                                                    <span> Logout </span>
                                                </span>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
