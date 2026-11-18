@extends('portal._layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Account Details</h5>
                    </div>
                    <div class="card-body">
                        <label>Name:</label>
                        <p>
                            {{ $record->name ?? '' }}
                        </p>
                        <label>Email:</label>
                        <p>
                            {{ $record->email ?? '' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
