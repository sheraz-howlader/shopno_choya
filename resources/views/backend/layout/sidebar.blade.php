<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="" class="b-brand text-primary">
                <img src="{{ asset('logo.png') }}" alt="logo image" class="logo-lg" width="20%">
                <span class="badge bg-primary rounded-pill ms-2 theme-version">v{{ config('app.version') }}</span>
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label> Navigation </label>
                </li>

                <li class="pc-item">
                    <a href="" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph ph-gauge"></i>
                        </span>
                        <span class="pc-mtext"> Dashboard </span>
                    </a>
                </li>

                <li class="pc-item active">
                    <a href="{{ route('deposit.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="fas fa-money-check-alt"></i>
                        </span>
                        <span class="pc-mtext"> Deposit </span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="" class="pc-link">
                        <span class="pc-micon">
                            <i class="fas fa-user-friends"></i>
                        </span>
                        <span class="pc-mtext"> Members </span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="" class="pc-link">
                        <span class="pc-micon">
                            <i class="fas fa-user-astronaut"></i>
                        </span>
                        <span class="pc-mtext"> Role Management </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
