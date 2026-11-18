@extends('portal._layouts.main')

@section('content')
    <main class="flex-grow-1 p-4 p-lg-5" style="min-width:0">

        <div class="mb-4">
            <h1 class="fw-bold mb-2">Home Page Management</h1>
            <p class="text-body-secondary mb-0">
                Edit and manage the content displayed on your website's home page.
            </p>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- HERO SECTION --}}
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-semibold">Hero Section</h5>
                    <small class="text-body-secondary">
                        Manage the main heading, description, and buttons.
                    </small>
                </div>

                <div class="card-body p-4">
                    <div class="mb-3">
                        <label for="hero_title" class="form-label">Main Heading</label>
                        <input type="text" class="form-control" id="hero_title" name="hero_title"
                            value="Article Management" placeholder="Enter the main heading">
                    </div>

                    <div class="mb-3">
                        <label for="hero_description" class="form-label">Description</label>
                        <textarea class="form-control" id="hero_description" name="hero_description" rows="3"
                            placeholder="Enter the hero description">Manage, organize, and publish articles with ease.</textarea>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="primary_button_text" class="form-label">
                                Primary Button Text
                            </label>
                            <input type="text" class="form-control" id="primary_button_text" name="primary_button_text"
                                value="See More">
                        </div>

                        <div class="col-md-6">
                            <label for="primary_button_link" class="form-label">
                                Primary Button Link
                            </label>
                            <input type="text" class="form-control" id="primary_button_link" name="primary_button_link"
                                placeholder="Enter URL or route">
                        </div>

                        <div class="col-md-6">
                            <label for="secondary_button_text" class="form-label">
                                Secondary Button Text
                            </label>
                            <input type="text" class="form-control" id="secondary_button_text"
                                name="secondary_button_text" value="Know More">
                        </div>

                        <div class="col-md-6">
                            <label for="secondary_button_link" class="form-label">
                                Secondary Button Link
                            </label>
                            <input type="text" class="form-control" id="secondary_button_link"
                                name="secondary_button_link" placeholder="Enter URL or route">
                        </div>
                    </div>
                </div>
            </div>

            {{-- CAROUSEL SECTION --}}
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-semibold">Hero Carousel</h5>
                    <small class="text-body-secondary">
                        Upload and manage the images displayed in the hero carousel.
                    </small>
                </div>

                <div class="card-body p-4">
                    @php
                        $carouselImages = [
                            ['label' => 'Carousel Image 1', 'path' => 'assets/images/diorama.png'],
                            ['label' => 'Carousel Image 2', 'path' => 'assets/images/background 1.jpg'],
                            ['label' => 'Carousel Image 3', 'path' => 'assets/images/about.jpg'],
                        ];
                    @endphp

                    <div class="row g-4">
                        @foreach ($carouselImages as $index => $image)
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">
                                    {{ $image['label'] }}
                                </label>

                                <div class="image-preview mb-2">
                                    <img src="{{ asset($image['path']) }}" alt="{{ $image['label'] }}"
                                        class="img-fluid rounded">
                                </div>

                                <input type="file" class="form-control" name="carousel_images[{{ $index }}]"
                                    accept="image/*">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- FEATURE CARDS --}}
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-semibold">Feature Cards</h5>
                    <small class="text-body-secondary">
                        Edit the four feature cards displayed below the hero section.
                    </small>
                </div>

                <div class="card-body p-4">
                    @php
                        $features = [
                            [
                                'title' => 'Content Creation',
                                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                                'image' => 'assets/icons/1 content creation.png',
                            ],
                            [
                                'title' => 'Fresh Experience',
                                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                                'image' => 'assets/icons/2 fresh experience.png',
                            ],
                            [
                                'title' => 'Great Community',
                                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                                'image' => 'assets/icons/3 great community.png',
                            ],
                            [
                                'title' => 'Modern Design',
                                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                                'image' => 'assets/icons/4 modern design.png',
                            ],
                        ];
                    @endphp

                    <div class="row g-4">
                        @foreach ($features as $index => $feature)
                            <div class="col-md-6">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="fw-semibold mb-3">
                                        Feature {{ $index + 1 }}
                                    </h6>

                                    <div class="text-center mb-3">
                                        <img src="{{ asset($feature['image']) }}" alt="Feature icon"
                                            class="feature-preview">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Feature Title</label>
                                        <input type="text" class="form-control"
                                            name="features[{{ $index }}][title]" value="{{ $feature['title'] }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="features[{{ $index }}][description]" rows="3">{{ $feature['description'] }}</textarea>
                                    </div>

                                    <div>
                                        <label class="form-label">Feature Icon</label>
                                        <input type="file" class="form-control"
                                            name="features[{{ $index }}][image]" accept="image/*">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- ACTION BUTTONS --}}
            <div class="d-flex justify-content-end gap-2 mb-4">
                <button type="reset" class="btn btn-light border">
                    Reset Changes
                </button>

                <button type="submit" class="btn btn-primary px-4">
                    <i class="bi bi-save me-2"></i>
                    Save Changes
                </button>
            </div>

        </form>
    </main>
@endsection

@section('page-styles')
    <style>
        body {
            background: #FAFAFA;
        }

        .image-preview {
            height: 180px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f8f9fa;
            border: 1px dashed #dee2e6;
            border-radius: 8px;
            overflow: hidden;
        }

        .image-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .feature-preview {
            width: 100px;
            height: 100px;
            object-fit: contain;
            opacity: .8;
        }

        .card {
            border-radius: 10px;
        }
    </style>
@endsection
