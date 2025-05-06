@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 70vh;">
    <div class="card" style="width: 400px;">
        <div class="card-header bg-primary text-white text-center">
            <h4>Login</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
