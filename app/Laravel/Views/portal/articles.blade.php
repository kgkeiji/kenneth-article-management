@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container py-5">
        <h1 class="display-4 fw-bold mb-3 text-center">Articles</h1>
        <p class="lead text-primary mb-4 text-center">
            You're running Laravel 12 with a custom structure and modern tooling.
        </p>
        <div class="list-group gap-2">
            <!-- list item 1 -->
            <a href="{{ route('web.article')}}" class="list-group-item list-group-item-action d-flex w-100 shadow-sm">
                <!--  -->
                <div class="w-100 d-flex flex-column flex-md-row">
                    <img src="{{'assets/images/diorama.png'}}" alt="Image Thumbnail" class="mx-auto me-md-3 img-fluid" style="object-fit: cover;">

                    <div class="w-100">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Item Heading 1</h5>
                            <small class="text-body-secondary">1 days ago</small>
                        </div>
                        <p class="mb-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <small class="text-body-secondary">And some muted small lorem ipsum.</small>
                    </div>
                </div>

            </a>
            <!-- list item 2 -->
            <a href="{{ route('web.article')}}" class="list-group-item list-group-item-action d-flex w-100 shadow-sm">
                <div class="w-100 d-flex flex-column flex-md-row">
                    <img src="{{'assets/images/diorama.png'}}" alt="Image Thumbnail" class="mx-auto me-md-3 img-fluid" style="object-fit: cover;">

                    <div class="w-100">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Item Heading 2</h5>
                            <small class="text-body-secondary">3 days ago</small>
                        </div>
                        <p class="mb-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <small class="text-body-secondary">And some muted small lorem ipsum.</small>
                    </div>
                </div>
            </a>
            <!-- list item 3 -->
            <a href="{{ route('web.article')}}" class="list-group-item list-group-item-action d-flex w-100 shadow-sm">
                <div class="w-100 d-flex flex-column flex-md-row">
                    <img src="{{'assets/images/diorama.png'}}" alt="Image Thumbnail" class="mx-auto me-md-3 img-fluid" style="object-fit: cover;">

                    <div class="w-100">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Item Heading 3</h5>
                            <small class="text-body-secondary">5 days ago</small>
                        </div>
                        <p class="mb-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <small class="text-body-secondary">And some muted small lorem ipsum.</small>
                    </div>
                </div>
            </a>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</main>
@endsection

@section('page-styles')
<style>
    body {
        background: #FAFAFA;
    }

    @media (min-width: 768px) {
        img {
            width: 100px !important;
            height: 100px !important;
        }
    }
</style>
@endsection