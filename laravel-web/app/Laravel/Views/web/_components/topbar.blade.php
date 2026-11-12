<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid position-relative">
        <a class="navbar-brand fst-italic" href="{{route('web.home')}}">TheArticle</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 position-lg-absolute start-50 translate-middle-x-lg">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('web.home') ? 'active' : '' }}"
                        @if(request()->routeIs('web.home')) aria-current="page" @endif
                        href="{{route('web.home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('web.about') ? 'active' : '' }}"
                        @if(request()->routeIs('web.about')) aria-current="page" @endif
                        href="{{route('web.about')}}">About</a>
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