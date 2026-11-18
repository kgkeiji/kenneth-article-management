@extends('portal._layouts.main')

@section('content')
    <main class="flex-grow-1 p-4 p-lg-5" style="min-width:0">

        {{-- PAGE HEADER --}}
        <div class="mb-4">
            <h1 class="fw-bold mb-2">Contact Page Management</h1>
            <p class="text-body-secondary mb-0">
                Manage the content and contact information displayed on your Contact page.
            </p>
        </div>

        <form action="#" method="POST">
            @csrf

            {{-- PAGE HEADER SECTION --}}
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="fw-semibold mb-0">Page Header</h5>
                    <small class="text-body-secondary">
                        Edit the main heading and introductory description of your Contact page.
                    </small>
                </div>

                <div class="card-body p-4">
                    <div class="mb-3">
                        <label for="page_title" class="form-label">Page Title</label>
                        <input type="text" class="form-control" id="page_title" name="page_title" value="Get in Touch">
                    </div>

                    <div>
                        <label for="page_description" class="form-label">Page Description</label>
                        <textarea class="form-control" id="page_description" name="page_description" rows="3">Have a question, suggestion, or something worth sharing? We'd love to hear from you.</textarea>
                    </div>
                </div>
            </div>

            {{-- CONTACT INFORMATION SECTION --}}
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="fw-semibold mb-0">Contact Information</h5>
                    <small class="text-body-secondary">
                        Edit the heading and description of your contact information section.
                    </small>
                </div>

                <div class="card-body p-4">
                    <div class="mb-3">
                        <label for="contact_title" class="form-label">Section Title</label>
                        <input type="text" class="form-control" id="contact_title" name="contact_title"
                            value="Let's start a conversation.">
                    </div>

                    <div>
                        <label for="contact_description" class="form-label">Section Description</label>
                        <textarea class="form-control" id="contact_description" name="contact_description" rows="4">Whether you have feedback about our articles, need assistance, or simply want to connect, feel free to send us a message. We're always happy to hear from our readers.</textarea>
                    </div>
                </div>
            </div>

            {{-- CONTACT TOPICS SECTION --}}
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="fw-semibold mb-0">Contact Topics</h5>
                    <small class="text-body-secondary">
                        Manage the list of topics displayed under "What can we help you with?"
                    </small>
                </div>

                <div class="card-body p-4">
                    <div class="mb-3">
                        <label for="topics_title" class="form-label">List Heading</label>
                        <input type="text" class="form-control" id="topics_title" name="topics_title"
                            value="What can we help you with?">
                    </div>

                    <label class="form-label">Contact Topics</label>

                    <div id="topics-container">

                        <div class="input-group mb-2 topic-item">
                            <input type="text" class="form-control" name="topics[]"
                                value="Article inquiries and suggestions">
                            <button type="button" class="btn btn-outline-danger remove-topic">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>

                        <div class="input-group mb-2 topic-item">
                            <input type="text" class="form-control" name="topics[]" value="Feedback and recommendations">
                            <button type="button" class="btn btn-outline-danger remove-topic">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>

                        <div class="input-group mb-2 topic-item">
                            <input type="text" class="form-control" name="topics[]"
                                value="Technical support and assistance">
                            <button type="button" class="btn btn-outline-danger remove-topic">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>

                        <div class="input-group mb-2 topic-item">
                            <input type="text" class="form-control" name="topics[]"
                                value="General questions and collaborations">
                            <button type="button" class="btn btn-outline-danger remove-topic">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>

                    </div>

                    <button type="button" class="btn btn-outline-primary btn-sm mt-2" id="add-topic">
                        <i class="bi bi-plus-lg me-1"></i>
                        Add Topic
                    </button>
                </div>
            </div>

            {{-- CLOSING MESSAGE SECTION --}}
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="fw-semibold mb-0">Closing Message</h5>
                    <small class="text-body-secondary">
                        Edit the highlighted message displayed below your contact information.
                    </small>
                </div>

                <div class="card-body p-4">
                    <div>
                        <label for="closing_message" class="form-label">Closing Message Content</label>
                        <textarea class="form-control" id="closing_message" name="closing_message" rows="3">Your thoughts matter. Every message helps us make TheArticle a better place for readers and creators.</textarea>
                    </div>
                </div>
            </div>

            {{-- CONTACT FORM SECTION --}}
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="fw-semibold mb-0">Contact Form Content</h5>
                    <small class="text-body-secondary">
                        Customize the labels and button text displayed in your contact form.
                    </small>
                </div>

                <div class="card-body p-4">
                    <div class="row g-3">

                        <div class="col-md-6">
                            <label for="name_label" class="form-label">Name Field Label</label>
                            <input type="text" class="form-control" id="name_label" name="name_label"
                                value="Full Name">
                        </div>

                        <div class="col-md-6">
                            <label for="email_label" class="form-label">Email Field Label</label>
                            <input type="text" class="form-control" id="email_label" name="email_label"
                                value="Email Address">
                        </div>

                        <div class="col-md-6">
                            <label for="subject_label" class="form-label">Subject Field Label</label>
                            <input type="text" class="form-control" id="subject_label" name="subject_label"
                                value="Subject">
                        </div>

                        <div class="col-md-6">
                            <label for="message_label" class="form-label">Message Field Label</label>
                            <input type="text" class="form-control" id="message_label" name="message_label"
                                value="Your Message">
                        </div>

                        <div class="col-md-6">
                            <label for="submit_text" class="form-label">Submit Button Text</label>
                            <input type="text" class="form-control" id="submit_text" name="submit_text"
                                value="Send Message">
                        </div>

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

        textarea.form-control {
            resize: vertical;
        }

        .input-group .form-control:focus {
            z-index: 1;
        }
    </style>
@endsection

@section('page-scripts')
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('topics-container');
            const addButton = document.getElementById('add-topic');

            // ADD TOPIC
            addButton.addEventListener('click', function() {
                const item = document.createElement('div');

                item.className = 'input-group mb-2 topic-item';

                item.innerHTML = `
                <input type="text" class="form-control"
                    name="topics[]" placeholder="Enter a contact topic" required>

                <button type="button" class="btn btn-outline-danger remove-topic">
                    <i class="bi bi-trash"></i>
                </button>
            `;

                container.appendChild(item);
            });

            // REMOVE TOPIC
            container.addEventListener('click', function(event) {
                const button = event.target.closest('.remove-topic');

                if (button) {
                    button.closest('.topic-item').remove();
                }
            });
        });
    </script> --}}
@endsection
