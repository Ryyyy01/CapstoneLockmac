<!DOCTYPE html>
<html>
@include('layouts.header')
<head>
    <title>Register</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <p>Provide your information to get started </p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group name-group">
                <label for="name">Name</label>
                <div class="input-group">
                    <input type="text" name="first_name" id="first_name" placeholder="First Name" required >
                    <input type="text" name="middle_name" id="middle_name" placeholder="Middle Name" >
                    <input type="text" name="last_name" id="last_name" placeholder="Last Name" required >
                </div>
            </div>
            <div class="form-group">
                <label for="email">Institutional Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" placeholder="09*********" required>
            </div>
            <div class="form-group gender-group">
                <label>Gender</label>
                <input type="radio" name="gender" value="male" id="male" required>
                <label for="male">Male</label>
                <input type="radio" name="gender" value="female" id="female" required>
                <label for="female">Female</label>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" id="date_of_birth" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="*********" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="*********" required>
            </div>
            <button type="submit" class="btn">REGISTER</button>
        </form>
    </div>
</body>
</html>
