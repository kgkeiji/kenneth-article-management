<!DOCTYPE html>
<html lang="en">

<head>
    @include('portal._components.metas')
    @include('portal._components.styles')
    @yield('page-styles')
</head>

<body>
    <div class="container">
        @yield('content')
    </div>

    @include('portal._components.scripts')
    @yield('page-scripts')
</body>

</html>