<style type="text/css">
    .sidebar {
        min-height: calc(100vh - 63px);
        background: #ffffff;
        font-family: "Poppins", "Nunito", sans-serif;
        padding: 0;
        width: 255px;
        z-index: 11;
        transition: width 0.25s ease, background 0.25s ease;
        -webkit-transition: width 0.25s ease, background 0.25s ease;
        -moz-transition: width 0.25s ease, background 0.25s ease;
        -ms-transition: width 0.25s ease, background 0.25s ease;
    }

    .sidebar .nav .nav-item .nav-link {
        align-items: center;
    }

</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="https://i.pravatar.cc/100" alt="profile image">
                    </div>
                    <div class="text-wrapper text-center mt-3">
                        <p class="profile-name  text-center" style="font-size: 20px;">{{ auth()->user()->name }}</p>
                        <div>
                            <small class="designation text-muted">{{ auth()->user()->email }}</small>
                            <span class="status-indicator online"></span>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/auth/dashboard">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if(auth()->user()->role == "admin")
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Customize Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/auth/custom-header">Customize Header</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/auth/custom-about">Customize About</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth/manager">
                <i class="menu-icon mdi mdi-account-plus-outline"></i>
                <span class="menu-title">Content Manager</span>
            </a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="/auth/news">
                <i class="menu-icon mdi mdi-newspaper"></i>
                <span class="menu-title">News</span>
            </a>
        </li>
        @if(auth()->user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="/auth/service">
                <i class="menu-icon mdi mdi-receipt"></i>
                <span class="menu-title">Service</span>
            </a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="/auth/team">
                <i class="menu-icon mdi mdi-account-multiple"></i>
                <span class="menu-title">Team</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth/testimony">
                <i class="menu-icon mdi mdi-thought-bubble-outline"></i>
                <span class="menu-title">Testimony</span>
            </a>
        </li>
        @if (auth()->user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="/auth/partners">
                <i class="menu-icon mdi mdi-checkbox-multiple-marked-outline"></i>
                <span class="menu-title">Partners</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth/clients">
                <i class="menu-icon mdi mdi-account-multiple-plus-outline"></i>
                <span class="menu-title">Clients</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth/skills">
                <i class="menu-icon mdi mdi-spotlight-beam"></i>
                <span class="menu-title">Skills</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth/why-choose-us">
                <i class="menu-icon mdi mdi-help"></i>
                <span class="menu-title">Why Choose us</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth/work-process">
                <i class="menu-icon mdi mdi-comment-processing"></i>
                <span class="menu-title">Work Process</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth/faqs">
                <i class="menu-icon mdi mdi-help-circle"></i>
                <span class="menu-title">FAQs</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth/portfolio">
                <i class="menu-icon mdi mdi-poll-box"></i>
                <span class="menu-title">Portfolio</span>
            </a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="/auth/video">
                <i class="menu-icon mdi mdi-file-video"></i>
                <span class="menu-title">Video</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth/newsletter">
                <i class="menu-icon mdi mdi-newspaper"></i>
                <span class="menu-title">Newsletter</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth/subscription">
                <i class="menu-icon mdi mdi-account-multiple"></i>
                <span class="menu-title">Subscribers</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth/contact">
                <i class="menu-icon mdi mdi-account"></i>
                <span class="menu-title">Contact</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth/failed-emails">
                <i class="menu-icon mdi mdi-email-alert"></i>
                <span class="menu-title">Failed Emails</span>
            </a>
        </li>
    </ul>
</nav>
