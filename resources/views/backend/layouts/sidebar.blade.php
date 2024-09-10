<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="" class="b-brand text-primary">
                <img src="{{ asset('logo.png') }}" alt="logo image" class="logo-lg" width="70%">
                <span class="badge bg-primary rounded-pill ms-2 theme-version">v{{ config('app.version') }}</span>
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label> Navigation </label>
                </li>

                @canany(['dashboard'])
                    <li class="pc-item {{ Route::is('dashboard.*') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-gauge"></i>
                            </span>
                            <span class="pc-mtext"> Dashboard </span>
                        </a>
                    </li>
                @endcanany

                @canany(['deposit::list'])
                    <li class="pc-item {{ Route::is('deposit.*') ? 'active' : '' }}">
                        <a href="{{ route('deposit.index') }}" class="pc-link">
                            <span class="pc-micon">
                                <i class="fas fa-money-check-alt"></i>
                            </span>
                            <span class="pc-mtext"> Deposits </span>
                        </a>
                    </li>
                @endcanany

                @canany(['adjustment::list'])
                    <li class="pc-item {{ Route::is('adjustment.*') ? 'active' : '' }}">
                        <a href="{{ route('adjustment.index') }}" class="pc-link">
                            <span class="pc-micon">
                                <i class="fa-solid fa-sack-dollar"></i>
                            </span>
                            <span class="pc-mtext"> Adjustment </span>
                        </a>
                    </li>
                @endcanany

                <li class="pc-item {{ Route::is('analysis.*') ? 'active' : '' }}">
                    <a href="{{ route('analysis') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa-solid fa-chart-pie"></i>
                        </span>
                        <span class="pc-mtext"> Analysis & Report </span>
                    </a>
                </li>

                <li class="pc-item {{ Route::is('users.*') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="fas fa-user-friends"></i>
                        </span>
                        <span class="pc-mtext"> Members </span>
                    </a>
                </li>

                @if(auth()->user()->is_admin())
                    <li class="pc-item {{ Route::is('roles.*') ? 'active' : '' }}">
                        <a href="{{ route('roles.index') }}" class="pc-link">
                            <span class="pc-micon">
                                <i class="fas fa-user-astronaut"></i>
                            </span>
                            <span class="pc-mtext"> Role Managements </span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
