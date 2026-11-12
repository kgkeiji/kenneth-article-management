@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container py-5">
        <h1 class="display-4 fw-bold mb-3 text-center">Articles</h1>
        <p class="lead text-secondary mb-4 text-center">
            You're running Laravel 12 with a custom structure and modern tooling.
        </p>
        <div class="list-group gap-2">
            <!-- list item 1 -->
            <a href="{{ route('web.article')}}" class="list-group-item list-group-item-action d-flex w-100 shadow-sm">
                <img src="{{'assets/images/diorama.png'}}" alt="" class="me-3" style="object-fit: cover;">

                <div class="w-100">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Item Heading 1</h5>
                        <small class="text-body-secondary">1 days ago</small>
                    </div>
                    <p class="mb-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore ipsam odit quas ea maxime ducimus qui cumque quia eligendi labore aut quis, esse dignissimos magnam veritatis voluptates quo nemo eos?</p>
                    <small class="text-body-secondary">And some muted small lorem ipsum.</small>
                </div>
            </a>
            <!-- list item 2 -->
            <a href="{{ route('web.article')}}" class="list-group-item list-group-item-action d-flex w-100 shadow-sm">
                <img src="{{'assets/images/diorama.png'}}" alt="" class="me-3" style="object-fit: cover;">

                <div class="w-100">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Item Heading 2</h5>
                        <small class="text-body-secondary">3 days ago</small>
                    </div>
                    <p class="mb-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore ipsam odit quas ea maxime ducimus qui cumque quia eligendi labore aut quis, esse dignissimos magnam veritatis voluptates quo nemo eos?</p>
                    <small class="text-body-secondary">And some muted small lorem ipsum.</small>
                </div>
            </a>
            <!-- list item 3 -->
            <a href="{{ route('web.article')}}" class="list-group-item list-group-item-action d-flex w-100 shadow-sm">
                <img src="{{'assets/images/diorama.png'}}" alt="" class="me-3" style="object-fit: cover;">

                <div class="w-100">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Item Heading 3</h5>
                        <small class="text-body-secondary">5 days ago</small>
                    </div>
                    <p class="mb-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore ipsam odit quas ea maxime ducimus qui cumque quia eligendi labore aut quis, esse dignissimos magnam veritatis voluptates quo nemo eos?</p>
                    <small class="text-body-secondary">And some muted small lorem ipsum.</small>
                </div>
            </a>
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
        background: #FAFAFA;
    }

    img {
        width: 100px;
        height: 100px;
    }
</style>
@endsection