<!DOCTYPE html>
<html lang="en">

<head>
    @include('portal._components.metas')
    @include('portal._components.styles')
    @yield('page-styles')
</head>

<body class="bg-body-tertiary d-flex flex-column min-vh-100">
    @include('portal._components.topbar')

    <div class="d-flex flex-grow-1">
        @include('portal._components.sidebar')
        <div class="flex-grow-1 d-flex flex-column" style="min-width:0">
            @yield('content')
            @include('portal._components.footer')
        </div>
    </div>

    @include('portal._components.scripts')
    @yield('page-scripts')
</body>

</html>
