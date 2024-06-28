<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <h2>Welcome Back!</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
            <label for="email">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email address" required autofocus>
            </div>
            <div class="form-group">
            <label for="email">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">LOG IN</button>
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
