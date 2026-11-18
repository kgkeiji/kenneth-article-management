@extends('portal._layouts.main')

@section('content')
    <div class="d-flex w-100">
        <main class="flex-grow-1 p-4 p-lg-5" style="min-width:0">
            <div class="container py-5 bg-light mt-5 mb-0 text-dark shadow rounded">
                <h1 class="display-4 fw-bold mb-3 text-end">Contact Us</h1>
                <p class="lead text-secondary text-end mb-4">
                    Manage, organize, and publish articles with ease.
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
                                <input type="email" class="form-control border" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required>
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
    </div>
@endsection

@section('page-styles')
    <style>
    </style>
@endsection
