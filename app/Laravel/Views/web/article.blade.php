@extends('web._layouts.main')

@section('content')
    <main class="flex-fill d-flex align-items-center justify-content-center">
        <div class="container py-5 row mx-auto">
            <div class="col-md-6 mb-4">
                <img src="{{ 'assets/images/diorama.png' }}" class="img-fluid rounded mb-4" alt="A creative digital landscape">

                <h1 class="display-4 fw-bold mb-3 text-dark">
                    The Art of Building Creative Worlds
                </h1>

                <p class="lead text-primary mb-4">
                    Discover how imagination, creativity, and thoughtful design bring extraordinary digital worlds to life.
                </p>
            </div>

            <div class="col-md-6">
                <p>
                    Creativity has always been an essential part of how we express ourselves and understand the world around
                    us. From traditional forms of art to modern digital creations, people continue to find new ways to turn
                    their ideas into something meaningful.
                </p>

                <p>
                    With the advancement of technology, creating immersive digital environments has become more accessible
                    than ever. Digital tools allow creators to experiment with different concepts, explore unique
                    perspectives, and bring their imagination into reality. What once existed only as an idea can now become
                    an interactive experience that others can explore and appreciate.
                </p>

                <p>
                    Building a creative world takes more than simply putting things together. It requires planning,
                    patience, and attention to detail. Every element contributes to the overall experience, whether it is
                    the environment, the atmosphere, or the small details that make a creation feel alive.
                </p>

                <p>
                    More importantly, creativity is not limited by experience or resources. Everyone starts somewhere, and
                    every project presents an opportunity to learn something new. Sometimes, the simplest ideas can lead to
                    the most remarkable creations.
                </p>

                <p>
                    As technology continues to evolve, the possibilities for digital creativity will only continue to grow.
                    The best creations are those that reflect the imagination of their creators and inspire others to
                    explore their own ideas.
                </p>

                <hr class="my-4">

                <div class="text-muted">
                    <p class="mb-1"><strong>Author:</strong> John Doe</p>
                    <p class="mb-1"><strong>Category:</strong> Creativity & Technology</p>
                    <p class="mb-0"><strong>Published:</strong> November 9, 2026</p>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('web.articles') }}" class="btn btn-lg text-secondary">
                        <i class="bi bi-arrow-left me-1"></i>
                        Back to Articles
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
            line-height: 1.8;
        }

        .btn:hover {
            color: black !important;
            text-decoration: underline;
        }
    </style>
@endsection
