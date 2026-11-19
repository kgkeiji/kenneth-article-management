@extends('portal._layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Create</div>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="row gy-2 gy-md-3 overflow-hidden">
                            {{-- name --}}
                            <div class="col-12">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="John Doe">
                                @if ($errors->first('name'))
                                    <div class="text-left">
                                        <small class="text-danger">
                                            {{ $errors->first('name') }}
                                        </small>
                                    </div>
                                @endif
                            </div>
                            {{-- email --}}
                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input class="form-control" name="email" id="email" placeholder="name@example.com">
                                @if ($errors->first('email'))
                                    <div class="text-left">
                                        <small class="text-danger">
                                            {{ $errors->first('email') }}
                                        </small>
                                    </div>
                                @endif
                            </div>
                            {{-- password --}}
                            <div class="col-12">
                                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" value="">

                            </div>
                            {{-- confirm password --}}
                            <div class="col-12">
                                <label for="confirm_password" class="form-label">Confirm Password <span
                                        class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                                    value="">
                                @if ($errors->first('password'))
                                    <div class="text-left">
                                        <small class="text-danger">
                                            {{ $errors->first('password') }}
                                        </small>
                                    </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="submit-btn btn bsb-btn-xl btn-primary" type="submit">Create
                                        Account</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const submitBtn = document.querySelector('.submit-btn');
            const form = submitBtn.closest('form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to register with the provided information?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, register!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection
