<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="/dashboard">
            <img src="storage/app/public/uploads/logo.png" style="object-fit: contain;" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="/dashboard">
            <img src="storage/app/public/uploads/logo.png" style="object-fit: contain;" alt="logo" />
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">

        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item dropdown d-none d-xl-inline-block">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                    aria-expanded="false">
                    <span class="profile-text" style="font-size: 14px;">Hello, {{ auth()->user()->name }} !</span>
                    <img class="img-xs rounded-circle" src="images/index.png" alt="Profile image">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">

                    <a href="/auth/account" class="dropdown-item mt-2" style="font-size: 16px; padding-top: 15px;"><i
                            class="mdi mdi-account-circle"></i>
                        Manage Account
                    </a>
                    @if(auth()->user()->role == 'admin')
                    <a href="/auth/settings" class="dropdown-item" style="font-size: 16px;"><i
                            class="mdi mdi-settings"></i>
                        Company Settings
                    </a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item" style="font-size: 16px;"><i
                                class="mdi mdi-power"></i>
                            Sign Out
                        </button>
                    </form>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
