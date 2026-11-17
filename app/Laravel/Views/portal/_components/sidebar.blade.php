<div id="sidebar" class="collapse collapse-horizontal show">
    <aside class="bg-white h-100 d-flex flex-column" style="width:225px">
        <div class="text-body-secondary px-3 pt-4 pb-2 d-flex flex-column align-items-center gap-2 border-bottom">
            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="Logo" class="img-fluid w-25">
            <p>TheArticle CMS</p>
        </div>
        <div class="small fw-bold text-uppercase text-body-secondary px-3 pt-4 pb-2">BackOffice</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <ul class="nav flex-column ps-4 ms-2">
                    <li><a class="nav-link link-dark py-1 small" href="{{ route('portal.dashboard') }}">Dashboard</a>
                    </li>
                    <li><a class="nav-link link-dark py-1 small" href="{{ route('portal.home') }}">Home</a></li>
                    <li><a class="nav-link link-dark py-1 small" href="{{ route('portal.about') }}">About</a></li>
                    <li><a class="nav-link link-dark py-1 small" href="{{ route('portal.contact') }}">Contact</a></li>
                </ul>
            </li>
        </ul>
        </li>
        </ul>

        <div class="mt-auto px-3 py-3 small text-body-secondary">
            Logged in as:
            <div class="text-dark">Mark Aducal</div>
        </div>
    </aside>
</div>
