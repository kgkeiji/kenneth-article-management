@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container py-5 row">
        <div class="col-md-6">
            <img src="{{'assets/images/diorama.png'}}" class="img-fluid" alt="About Image">
            <h1 class="display-4 fw-bold mb-3 text-dark">Article Title</h1>
            <p class="lead text-secondary mb-4">
                You're running Laravel 12 with a custom structure and modern tooling.
            </p>
        </div>
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolores suscipit saepe et quo veniam sint ullam vitae, numquam possimus fugit excepturi necessitatibus sit fugiat eum corporis. Vitae, quam fugiat.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolores suscipit saepe et quo veniam sint ullam vitae, numquam possimus fugit excepturi necessitatibus sit fugiat eum corporis. Vitae, quam fugiat.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolores suscipit saepe et quo veniam sint ullam vitae, numquam possimus fugit excepturi necessitatibus sit fugiat eum corporis. Vitae, quam fugiat.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolores suscipit saepe et quo veniam sint ullam vitae, numquam possimus fugit excepturi necessitatibus sit fugiat eum corporis. Vitae, quam fugiat.</p>

            <p class="text-muted text-end text-md-start">Author: John Doe <br>Published Date: 9/11/2026</p>
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('web.articles') }}" class="btn btn-lg text-secondary">
                    Go back to Articles
                </a>
            </div>
        </div>
    </div>
</main>
@endsection

@section('page-styles')
<style>
    body {
        background: #FAFAFA;
    }

    p {
        text-align: justify;
    }

    .btn:hover {
        color: black !important;
        text-decoration: underline;
    }
</style>
@endsection