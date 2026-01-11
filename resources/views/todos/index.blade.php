@extends('todos.layout')

@section('content')
<div class="container mt-5">

    {{-- ===== Page Header ===== --}}
    <div class="row mb-5">
        <div class="col">
            <div class="card border-0 shadow-lg">
                <div
                    class="card-body text-center py-5"
                    style="background: linear-gradient(135deg, #0d6efd, #6610f2); color: #fff; border-radius: 12px;"
                >

                    <div class="mb-3">
                        <span class="badge bg-light text-primary px-3 py-2 fw-semibold">
                            Laravel Architecture
                        </span>
                    </div>

                    <h1 class="fw-bold mb-3">
                        Repository + Service + Observer Design Pattern
                    </h1>

                    <p class="mb-4 opacity-75 fs-5">
                        Clean Architecture for Managing Business Logic in Laravel
                    </p>

                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                        <span class="badge bg-dark px-3 py-2">Controller</span>
                        <span class="badge bg-dark px-3 py-2">Service</span>
                        <span class="badge bg-dark px-3 py-2">Repository</span>
                        <span class="badge bg-dark px-3 py-2">Model</span>
                        <span class="badge bg-dark px-3 py-2">Observer</span>
                        <span class="badge bg-dark px-3 py-2">Notification</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- ===== End Header ===== --}}

    <div class="row justify-content-center">

        {{-- ===== Todo Form ===== --}}
        <div class="col-xl-5 col-lg-6 col-md-8 mb-4">

            {{-- Alerts --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @elseif (session('failure'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failure') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Create New Todo</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('todos.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input
                                type="text"
                                name="title"
                                id="title"
                                class="form-control"
                                placeholder="Enter todo title"
                                value="{{ old('title') }}"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea
                                name="description"
                                id="description"
                                rows="4"
                                class="form-control"
                                placeholder="Enter todo description"
                                required
                            >{{ old('description') }}</textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Save Todo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- ===== End Form ===== --}}

        {{-- ===== Todo List ===== --}}
        <div class="col-xl-7 col-lg-8 col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Todo List</h5>
                    <span class="badge bg-secondary">
                        {{ $todos->count() }} items
                    </span>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($todos as $todo)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="fw-semibold">{{ $todo->title }}</td>
                                        <td>{{ $todo->description }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center text-muted py-4">
                                            No todos found 🚀
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- ===== End List ===== --}}

    </div>
</div>
@endsection
