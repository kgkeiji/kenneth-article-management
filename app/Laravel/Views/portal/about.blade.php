@extends('portal._layouts.main')

@section('content')
    <main class="flex-grow-1 p-4 p-lg-5" style="min-width:0">

        {{-- PAGE HEADER --}}
        <div class="mb-4">
            <h1 class="fw-bold mb-2">About Page Management</h1>
            <p class="text-body-secondary mb-0">
                Manage the content, images, and mission statement displayed on your About page.
            </p>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- PAGE HEADER SECTION --}}
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="fw-semibold mb-0">Page Header</h5>
                    <small class="text-body-secondary">
                        Edit the main heading and subtitle of your About page.
                    </small>
                </div>

                <div class="card-body p-4">
                    <div class="mb-3">
                        <label for="page_title" class="form-label">Page Title</label>
                        <input type="text" class="form-control" id="page_title" name="page_title" value="About Us">
                    </div>

                    <div>
                        <label for="page_subtitle" class="form-label">Page Subtitle</label>
                        <textarea class="form-control" id="page_subtitle" name="page_subtitle" rows="2">Manage, organize, and publish articles with ease.</textarea>
                    </div>
                </div>
            </div>

            {{-- INTRODUCTION SECTION --}}
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="fw-semibold mb-0">Introduction</h5>
                    <small class="text-body-secondary">
                        Edit the introductory paragraph of your About page.
                    </small>
                </div>

                <div class="card-body p-4">
                    <div>
                        <label for="introduction" class="form-label">Introduction Content</label>
                        <textarea class="form-control" id="introduction" name="introduction" rows="4">We are a team of passionate developers dedicated to creating amazing web applications with Laravel.</textarea>
                    </div>
                </div>
            </div>

            {{-- ABOUT CONTENT SECTION --}}
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="fw-semibold mb-0">About Content</h5>
                    <small class="text-body-secondary">
                        Edit the main information and story about TheArticle.
                    </small>
                </div>

                <div class="card-body p-4">
                    <div>
                        <label for="about_content" class="form-label">About Description</label>
                        <textarea class="form-control" id="about_content" name="about_content" rows="7">TheArticle is a platform dedicated to sharing knowledge, exploring ideas, and bringing meaningful stories to readers. We believe that every article has the power to inform, inspire, and spark conversations.

Our goal is to make discovering and sharing valuable content a simple and enjoyable experience. Whether you're looking for fresh perspectives, informative reads, or interesting topics, TheArticle brings stories together in one place.</textarea>
                    </div>
                </div>
            </div>

            {{-- ABOUT IMAGES SECTION --}}
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="fw-semibold mb-0">About Page Images</h5>
                    <small class="text-body-secondary">
                        Upload or replace the images displayed on your About page.
                    </small>
                </div>

                <div class="card-body p-4">
                    <div class="row g-4">

                        {{-- IMAGE 1 --}}
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">About Image 1</label>

                            <div class="image-preview mb-3">
                                <img src="{{ asset('assets/images/about.jpg') }}" alt="About Image 1">
                            </div>

                            <input type="file" class="form-control" name="about_image_1" accept="image/*">

                            <small class="text-body-secondary">
                                Recommended: Landscape image.
                            </small>
                        </div>

                        {{-- IMAGE 2 --}}
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">About Image 2</label>

                            <div class="image-preview mb-3">
                                <img src="{{ asset('assets/images/diorama.png') }}" alt="About Image 2">
                            </div>

                            <input type="file" class="form-control" name="about_image_2" accept="image/*">

                            <small class="text-body-secondary">
                                Recommended: Landscape image.
                            </small>
                        </div>

                    </div>
                </div>
            </div>

            {{-- MISSION SECTION --}}
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="fw-semibold mb-0">Our Mission</h5>
                    <small class="text-body-secondary">
                        Edit your organization's mission statement.
                    </small>
                </div>

                <div class="card-body p-4">
                    <div class="mb-3">
                        <label for="mission_title" class="form-label">Section Title</label>
                        <input type="text" class="form-control" id="mission_title" name="mission_title"
                            value="Our Mission">
                    </div>

                    <div>
                        <label for="mission_content" class="form-label">Mission Statement</label>
                        <textarea class="form-control" id="mission_content" name="mission_content" rows="5">We aim to create a space where information is accessible, ideas are celebrated, and stories can reach the people who need them. Through thoughtful content and a seamless reading experience, we strive to make every visit worthwhile.</textarea>
                    </div>
                </div>
            </div>

            {{-- FORM ACTIONS --}}
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

        .card {
            border-radius: 10px;
        }

        .image-preview {
            height: 220px;
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
    </style>
@endsection
