<div id="sidebar" class="collapse collapse-horizontal show">
    <aside class="bg-white h-100 d-flex flex-column">
        <div class="text-body-secondary px-3 pt-4 pb-2 d-flex flex-column align-items-center gap-2 border-bottom">
            <img src="{{ asset('assets/icons/logo-dark.png') }}" alt="Logo" class="img-fluid w-25">
            <p>TheArticle CMS</p>
        </div>
        <div class="small fw-bold text-uppercase text-body-secondary px-3 pt-4 pb-2">BackOffice</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <ul class="nav flex-column ps-4 ms-2">
                    <li><a class="nav-link link-primary py-1 small" href="{{ route('portal.dashboard') }}">Dashboard</a>
                    </li>
                    <li><a class="nav-link link-primary py-1 small"
                            href="{{ route('portal.account-management.index') }}">Account Management</a>
                    </li>
                    <li><a class="nav-link link-primary py-1 small" href="{{ route('portal.home') }}">Home</a></li>
                    <li><a class="nav-link link-primary py-1 small" href="{{ route('portal.about') }}">About</a></li>
                    <li><a class="nav-link link-primary py-1 small" href="{{ route('portal.contact') }}">Contact</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="mt-auto px-3 py-3 small text-body-secondary">
            Logged in as:
            <div class="text-dark">Kenneth Piangco</div>
            <div class="logout">
                <a href="{{ route('portal.logout') }}">Logout</a>
            </div>
        </div>

    </aside>
</div>

<div id="sidebarMobile" class="offcanvas offcanvas-start d-md-none" tabindex="-1" aria-label="Sidebar navigation">
    <aside class="offcanvas-body bg-white h-100 p-0 d-flex flex-column">
        <div class="text-body-secondary px-3 pt-4 pb-2 d-flex flex-column align-items-center gap-2 border-bottom">
            <img src="{{ asset('assets/icons/logo-dark.png') }}" alt="Logo" class="img-fluid w-25">
            <p>TheArticle CMS</p>
        </div>
        <div class="small fw-bold text-uppercase text-body-secondary px-3 pt-4 pb-2">BackOffice</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <ul class="nav flex-column ps-4 ms-2">
                    <li><a class="nav-link link-primary py-1 small" href="{{ route('portal.dashboard') }}">Dashboard</a>
                    </li>
                    <li><a class="nav-link link-primary py-1 small"
                            href="{{ route('portal.account-management.index') }}">Account Management</a>
                    </li>
                    <li><a class="nav-link link-primary py-1 small" href="{{ route('portal.home') }}">Home</a></li>
                    <li><a class="nav-link link-primary py-1 small" href="{{ route('portal.about') }}">About</a></li>
                    <li><a class="nav-link link-primary py-1 small" href="{{ route('portal.contact') }}">Contact</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="mt-auto px-3 py-3 small text-body-secondary">
            Logged in as:
            <div class="text-dark">Kenneth Piangco</div>
        </div>

    </aside>
</div>
