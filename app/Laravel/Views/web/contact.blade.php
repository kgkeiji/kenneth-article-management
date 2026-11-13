@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container py-5 bg-light my-5 text-dark shadow rounded">
        <h1 class="display-4 fw-bold mb-3 text-end">Contact Us</h1>
        <p class="lead text-secondary text-end mb-4">
            You're running Laravel 12 with a custom structure and modern tooling.
        </p>
        <div class="container">
            <!-- row -->
            <form class="row d-flex">
                <!-- col name and email-->
                <div class="col-12 col-md-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control border" id="name" required>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control border" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>

                </div>
                <!-- col message -->
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Message</label>
                        <textarea class="form-control border" rows="5"></textarea>
                    </div>
                    <button type="submit" class="d-flex btn btn-primary ms-auto">Submit</button>

                </div>
            </form>
        </div>
    </div>
</main>
@endsection

@section('page-styles')
<style>
</style>
@endsection