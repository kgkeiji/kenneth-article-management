@extends('portal._layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('portal.account-management.create') }}" class="btn btn-primary">+ Create Account</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($records as $index => $record)
                                    <tr>
                                        <td>
                                            {{ $record->name }}
                                        </td>
                                        <td>
                                            {{ $record->email }}
                                        </td>
                                        <td>
                                            <a href="{{ route('portal.account-management.edit', $record->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{ route('portal.account-management.show', $record->id) }}"
                                                class="btn btn-sm btn-info">View</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No records found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
