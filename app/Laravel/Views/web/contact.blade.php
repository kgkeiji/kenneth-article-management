@extends('web._layouts.main')

@section('content')
    <main class="flex-fill d-flex align-items-center justify-content-center">
        <div class="container py-5">
            <div class="contact-card bg-light text-dark shadow rounded-4 p-4 p-md-5">

                <!-- Header -->
                <div class="text-center text-md-end mb-5">
                    <h1 class="display-4 fw-bold mb-3">Get in Touch</h1>
                    <p class="lead text-secondary mb-0">
                        Have a question, suggestion, or something worth sharing?
                        We'd love to hear from you.
                    </p>
                </div>

                <div class="row g-5">

                    <!-- Contact Information -->
                    <div class="col-12 col-md-5">
                        <h4 class="fw-bold mb-3">Let's start a conversation.</h4>

                        <p class="text-secondary mb-4">
                            Whether you have feedback about our articles, need assistance,
                            or simply want to connect, feel free to send us a message.
                            We're always happy to hear from our readers.
                        </p>

                        <div class="contact-info mb-4">
                            <h6 class="fw-bold mb-2">What can we help you with?</h6>
                            <ul class="list-unstyled text-secondary">
                                <li class="mb-2">Article inquiries and suggestions</li>
                                <li class="mb-2">Feedback and recommendations</li>
                                <li class="mb-2">Technical support and assistance</li>
                                <li>General questions and collaborations</li>
                            </ul>
                        </div>

                        <div class="border-start border-primary border-3 ps-3">
                            <p class="text-secondary mb-0">
                                Your thoughts matter. Every message helps us make
                                TheArticle a better place for readers and creators.
                            </p>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-12 col-md-7">
                        <form class="row g-3">

                            <div class="col-12 col-md-6">
                                <label for="name" class="form-label fw-semibold">
                                    Full Name
                                </label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name"
                                    placeholder="Enter your name" autocomplete="name" required>
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="email" class="form-label fw-semibold">
                                    Email Address
                                </label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email"
                                    placeholder="name@example.com" autocomplete="email" required>
                            </div>

                            <div class="col-12">
                                <label for="subject" class="form-label fw-semibold">
                                    Subject
                                </label>
                                <input type="text" class="form-control form-control-lg" id="subject" name="subject"
                                    placeholder="What is your message about?" required>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label fw-semibold">
                                    Your Message
                                </label>
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Write your message here..."
                                    required></textarea>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-lg px-4">
                                    Send Message
                                </button>
                            </div>

                        </form>
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

        .contact-card {
            max-width: 1100px;
            margin: 0 auto;
        }

        .contact-info li {
            font-size: 0.95rem;
        }

        .form-control {
            border: 1px solid #dee2e6;
            padding: 0.8rem 1rem;
            background-color: #fff;
        }

        .form-control:focus {
            border-color: var(--bs-primary);
            box-shadow: 0 0 0 0.2rem rgba(var(--bs-primary-rgb), 0.12);
        }

        textarea.form-control {
            resize: vertical;
        }

        .btn {
            transition: all 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }
    </style>
@endsection
