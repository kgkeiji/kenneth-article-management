@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container py-5 bg-dark text-light">
        <h1 class="display-4 fw-bold mb-3 text-end">Contact Us</h1>
        <p class="lead text-secondary text-end mb-4">
            You're running Laravel 12 with a custom structure and modern tooling.
        </p>
        <div class="container">
            <!-- row -->
            <form class="row d-flex">
                <!-- col -->
                <div class="col">
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                </div>
                <!-- col -->
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Message</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <button type="submit" class="d-flex btn btn-primary ms-auto">Submit</button>

                </div>
            </form>
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
        background: #f2e2db;
    }
</style>
@endsection