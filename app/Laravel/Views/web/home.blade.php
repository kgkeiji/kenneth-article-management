@extends('web._layouts.main')

@section('content')
<main class="d-flex flex-column">
    <!-- row 1 hero section -->
    <div class="row row-align gy-4 py-5 align-items-center justify-content-center">
        <!-- first col -->
        <div class="col-md-6 py-5">
            <h1 class="display-4 fw-bold mb-3">Article Management</h1>
            <p class="lead mb-4">
                You're running Laravel 12 with a custom structure and modern tooling.
            </p>
            <div class="d-flex gap-2">
                <a href="{{ route('web.about') }}" class="btn btn-primary btn-lg">
                    See More
                </a>
                <a href="{{ route('web.articles') }}" class="btn btn-secondary btn-lg">
                    Know More
                </a>
            </div>
        </div>
        <!-- second col -->
        <div class="col-md-6 text-center">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{'assets/images/diorama.png'}}" class="img-fluid d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{'assets/images/background 1.jpg'}}" class="img-fluid d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{'assets/images/about.jpg'}}" class="img-fluid d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- row 2 cards -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 py-5 text-center">
        <div class="col">
            <div class="card h-100 d-flex flex-column justify-content-center align-items-center py-5">
                <img src="{{ 'assets/icons/1 content creation.png' }}" class="card-img-top w-50 h-auto opacity-75" alt="Content Creation">
                <div class="card-body">
                    <h5 class="card-title">Content Creation</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 d-flex flex-column justify-content-center align-items-center py-5 ">
                <img src="{{ 'assets/icons/2 fresh experience.png' }}" class="card-img-top w-50 h-auto opacity-75" alt="Fresh Experience">
                <div class="card-body">
                    <h5 class="card-title">Fresh Experience</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 d-flex flex-column justify-content-center align-items-center py-5">
                <img src="{{ 'assets/icons/3 great community.png' }}" class="card-img-top w-50 h-auto opacity-75" alt="Great Community">
                <div class="card-body">
                    <h5 class="card-title">Great Community</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 d-flex flex-column justify-content-center align-items-center py-5">
                <img src="{{ 'assets/icons/4 modern design.png' }}" class="card-img-top w-50 h-auto opacity-75" alt="Modern Design">
                <div class="card-body">
                    <h5 class="card-title">Modern Design</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
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

    #hero-img {
        transition: all 0.3s ease;
    }

    #hero-img:hover {
        transform: scale(1.01);
    }

    .card {
        transition: all 0.3s ease;
        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);

    }

    .card:hover {
        transform: translateY(-5px) !important;
    }

    @media (max-width: 425px) {

        .carousel-item img {
            height: 320px;
        }
    }

    @media (min-width: 1440px) {

        .carousel-item img {
            height: 520px;
        }
    }
</style>
@endsection