<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <style>
        #col-1 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(68, 205, 255, 0.3)), url({{ asset('assets/images/office.png') }});
            background-size: cover;
            background-position: center;

        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    {{-- bootstrap icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    {{-- bootstrap brain --}}
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-5/assets/css/login-5.css">
</head>

<body class="bg-body-tertiary">
    <!-- Login 5 - Bootstrap Brain Component -->
    <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="card border-light-subtle shadow-sm">
                <div class="row g-0">
                    {{-- col 1 --}}
                    <div class="col-12 col-md-6 text-bg-primary" id="col-1">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <div class="col-10 col-xl-8 py-3">
                                <img class="img-fluid rounded mb-4" loading="lazy"
                                    src="{{ asset('assets/icons/logo.png') }}" width="100" alt="TheArticle Logo">
                                <hr class="border-primary-subtle mb-4">
                                <h2 class="h1 mb-4">Turning Ideas Into Digital Experiences.</h2>
                                <p class="lead m-0 fs-6 fs-md-3">A platform where ideas become stories, creativity finds
                                    its
                                    voice, and innovation brings everything together.</p>
                            </div>
                        </div>
                    </div>
                    {{-- col 2 --}}
                    <div class="col-12 col-md-6">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h3>Log in</h3>
                                    </div>
                                </div>
                            </div>
                            <form action="#" method="POST">
                                @csrf
                                @if (session()->has('notification-status'))
                                    <div class="alert alert-{{ in_array(session()->get('notification-status'), ['failed', 'error', 'danger']) ? 'danger' : session()->get('notification-status') }}"
                                        role="alert">
                                        {{ session()->get('notification-msg') }}

                                    </div>
                                @endif
                                <div class="row gy-3 gy-md-4 overflow-hidden">
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="name@example.com" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            value="" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                name="remember_me" id="remember_me">
                                            <label class="form-check-label text-secondary" for="remember_me">
                                                Keep me logged in
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn bsb-btn-xl btn-primary" type="submit">Log in</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="mt-5 mb-4 border-secondary-subtle">
                                    <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                                        <a href="{{ route('portal.auth.register') }}"
                                            class="link-secondary text-decoration-none">Create new
                                            account</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
