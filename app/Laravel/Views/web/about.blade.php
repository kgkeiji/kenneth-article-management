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
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <img src="{{'assets/images/about.jpg'}}" class="w-100" alt="About Image">
                </div>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In et corrupti eaque nulla, nobis ipsum. Quas saepe et obcaecati porro, dignissimos similique magnam ducimus reiciendis veritatis sed. Minima, nostrum quod!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dolores error, tempore aperiam obcaecati qui perspiciatis, ab, veniam officia a esse magni tempora sunt ex itaque fuga quis. Voluptatum, ad!
            </p>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <img src="{{'assets/images/diorama.png'}}" class="w-100" alt="About Image">
                </div>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In et corrupti eaque nulla, nobis ipsum. Quas saepe et obcaecati porro, dignissimos similique magnam ducimus reiciendis veritatis sed. Minima, nostrum quod!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dolores error, tempore aperiam obcaecati qui perspiciatis, ab, veniam officia a esse magni tempora sunt ex itaque fuga quis. Voluptatum, ad!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In et corrupti eaque nulla, nobis ipsum. Quas saepe et obcaecati porro, dignissimos similique magnam ducimus reiciendis veritatis sed. Minima, nostrum quod!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dolores error, tempore aperiam ob
            </p>
        </div>
    </div>
</main>
@endsection

@section('page-styles')
<style>
    h1,
    p {
        text-align: justify;
    }

    .lead {
        color: blue;
    }
</style>
@endsection