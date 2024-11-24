<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>
    <h1>Signup</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="{{ url('signup') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name">
        @error('name')<p>{{ $message }}</p>@enderror
        <br>
        <label>Email:</label>
        <input type="email" name="email">
        @error('email')<p>{{ $message }}</p>@enderror
        <br>
        <label>Password:</label>
        <input type="password" name="password">
        @error('password')<p>{{ $message }}</p>@enderror
        <br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
