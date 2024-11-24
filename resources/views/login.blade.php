<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    @if (session('success'))
    <p>{{ session('success') }}</p>
    @endif
    <form action="{{ url('login') }}" method="POST">
        @csrf
        <label>Email:</label>
        <input type="email" name="email">
        @error('email')<p>{{ $message }}</p>@enderror
        <br>
        <label>Password:</label>
        <input type="password" name="password">
        @error('password')<p>{{ $message }}</p>@enderror
        <br>
        <button type="submit">Log In</button>
    </form>
</body>

</html>