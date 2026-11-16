<!-- Login 5 - Bootstrap Brain Component -->
@extends('portal._layouts.auth')

@section('content')
<section class="p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="card border-light-subtle shadow-sm">
      <div class="row g-0">
        {{-- col 1 --}}
        <div class="col-12 col-md-6 text-bg-primary" id="col-1">
          <div class="d-flex align-items-center justify-content-center h-100">
            <div class="col-10 col-xl-8 py-3">
              <img class="img-fluid rounded mb-4" loading="lazy" src="{{ asset('assets/images/logo.png') }}" width="100" alt="TheArticle Logo">
              <hr class="border-primary-subtle mb-4">
              <h2 class="h1 mb-4">Turning Ideas Into Digital Experiences.</h2>
              <p class="lead m-0 fs-6 fs-md-3">A platform where ideas become stories, creativity finds its voice, and innovation brings everything together.</p>
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
            <form action="{{ route('portal.dashboard') }}">
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                </div>
                <div class="col-12">
                  <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="password" id="password" value="" required>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
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
                  <a href="{{ route('portal.register') }}" class="link-secondary text-decoration-none">Create new account</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('page-styles')
<style>
  #col-1 {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(68, 205, 255, 0.3)), url({{ asset('assets/images/office.png') }});
    background-size: cover;
    background-position: center;
    
  }
  
</style>

@endsection