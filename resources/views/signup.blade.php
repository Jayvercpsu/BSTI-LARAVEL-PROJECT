<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Signup</h1>
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ url('signup') }}" method="POST" class="mx-auto" style="max-width: 400px;">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                <label for="name">Name</label>
                @error('name')<small class="text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                <label for="email">Email</label>
                @error('email')<small class="text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')<small class="text-danger">{{ $message }}</small>@enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </form>
        <div class="text-center mt-3">
            <p>Already have an account? <a href="{{ url('login') }}">Log in here</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
