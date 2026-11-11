@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container py-5 row">
        <div class="col">
            <h1 class="display-4 fw-bold mb-3 text-dark">Article 1</h1>
            <p class="lead text-secondary mb-4">
                You're running Laravel 12 with a custom structure and modern tooling.
            </p>
        </div>
        <div class="col">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolores suscipit saepe et quo veniam sint ullam vitae, numquam possimus fugit excepturi necessitatibus sit fugiat eum corporis. Vitae, quam fugiat.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolores suscipit saepe et quo veniam sint ullam vitae, numquam possimus fugit excepturi necessitatibus sit fugiat eum corporis. Vitae, quam fugiat.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolores suscipit saepe et quo veniam sint ullam vitae, numquam possimus fugit excepturi necessitatibus sit fugiat eum corporis. Vitae, quam fugiat.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolores suscipit saepe et quo veniam sint ullam vitae, numquam possimus fugit excepturi necessitatibus sit fugiat eum corporis. Vitae, quam fugiat.</p>
            <div class="d-flex justify-content-center gap-2">
                <a href="{{ route('web.home') }}" class="btn btn-outline-secondary btn-lg">
                    Go back to home
                </a>
            </div>
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