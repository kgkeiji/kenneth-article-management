<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container-fluid position-relative">
        <a class="navbar-brand fst-italic" href="{{route('portal.login')}}">TheArticle</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 position-lg-absolute start-50 translate-middle-x-lg">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('portal.home') ? 'active' : '' }}"
                        @if(request()->routeIs('portal.home')) aria-current="page" @endif
                        href="{{route('portal.home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('portal.about') ? 'active' : '' }}"
                        @if(request()->routeIs('portal.about')) aria-current="page" @endif
                        href="{{route('portal.about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('web.articles') ? 'active' : '' }}"
                        @if(request()->routeIs('web.articles')) aria-current="page" @endif
                        href="{{route('web.articles')}}">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('web.contact') ? 'active' : '' }}"
                        @if(request()->routeIs('web.contact')) aria-current="page" @endif
                        href="{{route('web.contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>