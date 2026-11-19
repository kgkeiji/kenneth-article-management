<!DOCTYPE html>
<html lang="en">

<head>
    @include('portal._components.metas')
    @include('portal._components.styles')
    @yield('page-styles')
</head>

<body class="bg-body-tertiary d-flex flex-column vh-100 overflow-hidden">

    @include('portal._components.topbar')

    <div class="d-flex flex-grow-1 overflow-hidden">
        @include('portal._components.sidebar')

        <div class="flex-grow-1 d-flex flex-column overflow-y-auto" style="min-width: 0;">
            @include('portal._components.notifications')
            @yield('content')
            @include('portal._components.footer')
        </div>
    </div>

    @include('portal._components.scripts')
    @yield('page-scripts')

</body>

</html>
