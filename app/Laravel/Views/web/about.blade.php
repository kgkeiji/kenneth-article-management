@extends('web._layouts.main')

@section('content')
    <main class="flex-fill d-flex align-items-center justify-content-center">
        <div class="container py-5">
            <h1 class="display-4 fw-bold mb-3">About Us</h1>
            <p class="lead mb-4">
                Manage, organize, and publish articles with ease.
            </p>
            <div class="d-flex flex-column justify-content-center gap-4 text-start">
                <p>We are a team of passionate developers dedicated to creating amazing web applications with Laravel.</p>
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <img src="{{ 'assets/images/about.jpg' }}" class="w-100" alt="About Image">
                    </div>
                </div>
                <p>
                    TheArticle is a platform dedicated to sharing knowledge, exploring ideas, and bringing meaningful
                    stories to readers. We believe that every article has the power to inform, inspire, and spark
                    conversations.

                    Our goal is to make discovering and sharing valuable content a simple and enjoyable experience. Whether
                    you're looking for fresh perspectives, informative reads, or interesting topics, TheArticle brings
                    stories together in one place.
                </p>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <img src="{{ 'assets/images/diorama.png' }}" class="w-100" alt="About Image">
                    </div>
                </div>
                <p>
                    Our Mission

                    We aim to create a space where information is accessible, ideas are celebrated, and stories can reach
                    the people who need them. Through thoughtful content and a seamless reading experience, we strive to
                    make every visit worthwhile.
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
