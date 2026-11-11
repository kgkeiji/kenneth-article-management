@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold mb-3">Articles</h1>
        <p class="lead text-secondary mb-4">
            You're running Laravel 12 with a custom structure and modern tooling.
        </p>
        <div class="d-flex flex-column justify-content-center gap-2">
            <div class="list-group">
                <a href="{{ route('web.article') }}" class="list-group-item list-group-item-action ">
                    First link item
                </a>
                <a href="{{ route('web.article') }}" class="list-group-item list-group-item-action">A second link item</a>
                <a href="{{ route('web.article') }}" class="list-group-item list-group-item-action">A third link item</a>
                <a href="{{ route('web.article') }}" class="list-group-item list-group-item-action">A fourth link item</a>
            </div>
        </div>
    </div>
</main>
<footer class="text-center text-secondary py-3 mt-auto">
    &copy; {{ date('Y') }} Laravel 12 Starter. Built with ❤️.
</footer>
@endsection

@section('page-styles')
<style>
    body {
        background: black;
    }

    h1,
    p {
        color: white;
    }
</style>
@endsection