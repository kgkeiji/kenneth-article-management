@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center h-100">
    <div class="container py-5">
        <h1 class="display-4 fw-bold mb-3">Article Management</h1>
        <p class="lead mb-4">
            You're running Laravel 12 with a custom structure and modern tooling.
        </p>
        <div class="d-flex gap-2">
            <a href="https://laravel.com/docs/12.x" target="_blank" class="btn btn-primary btn-lg">
                Documentation
            </a>
            <a href="{{ route('web.about') }}" class="btn btn-outline-secondary btn-lg">
                Go to about page
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
        background: #FAFAFA;
    }
</style>
@endsection