@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold mb-3">About Us</h1>
        <p class="lead text-secondary mb-4">
            You're running Laravel 12 with a custom structure and modern tooling.
        </p>
        <div class="d-flex justify-content-center gap-2">
            <a href="https://laravel.com/docs/12.x" target="_blank" class="btn btn-primary btn-lg">
                Documentation
            </a>
            <a href="{{ route('web.home') }}" class="btn btn-outline-secondary btn-lg">
                Go back to home
            </a>
            <a href="{{ route('web.contact') }}" class="btn btn-outline-secondary btn-lg">
                Go to contacts
            </a>
            <a href="{{ route('web.articles') }}" class="btn btn-outline-secondary btn-lg">
                Go to articles
            </a>
        </div>
    </div>
</main>
<footer class="text-center text-muted py-3 mt-auto">
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