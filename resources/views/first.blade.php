<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="signup-container">
    <form class="signup-form">
        <h2>Sign Up</h2>
        <input type="text" placeholder="Full Name" required>

        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Sign Up</button>
    </form>
</div>

<script src="{{asset('js/app.js')}}" ></script>
</body>

</html>
