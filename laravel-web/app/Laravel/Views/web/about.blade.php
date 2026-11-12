@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container py-5">
        <h1 class="display-4 fw-bold mb-3">About Us</h1>
        <p class="lead mb-4">
            You're running Laravel 12 with a custom structure and modern tooling.
        </p>
        <div class="d-flex flex-column justify-content-center gap-4 text-start">
            <p>We are a team of passionate developers dedicated to creating amazing web applications with Laravel.</p>
            <img src="{{'assets/images/about.jpg'}}" class="img-fluid w-50 mx-auto" alt="About Image">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In et corrupti eaque nulla, nobis ipsum. Quas saepe et obcaecati porro, dignissimos similique magnam ducimus reiciendis veritatis sed. Minima, nostrum quod!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dolores error, tempore aperiam obcaecati qui perspiciatis, ab, veniam officia a esse magni tempora sunt ex itaque fuga quis. Voluptatum, ad!
            </p>
            <img src="{{'assets/images/diorama.png'}}" class="img-fluid w-50 mx-auto" alt="About Image">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In et corrupti eaque nulla, nobis ipsum. Quas saepe et obcaecati porro, dignissimos similique magnam ducimus reiciendis veritatis sed. Minima, nostrum quod!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dolores error, tempore aperiam obcaecati qui perspiciatis, ab, veniam officia a esse magni tempora sunt ex itaque fuga quis. Voluptatum, ad!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In et corrupti eaque nulla, nobis ipsum. Quas saepe et obcaecati porro, dignissimos similique magnam ducimus reiciendis veritatis sed. Minima, nostrum quod!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dolores error, tempore aperiam ob
            </p>
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
        --bs-bg-opacity: 1;
        background: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
    }

    h1,
    p {
        color: white;
    }

    .lead {
        color: blue;
    }
</style>
@endsection