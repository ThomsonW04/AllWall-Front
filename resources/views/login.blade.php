<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        @vite(['resources/themes/normal.css', 'resources/css/default.css', 'resources/css/auth.css'])
    </head>
    <body>
        <div id="dot-container"></div>
        <div class="auth-div">
            <div class="auth-header">
                <img class="logo" src="{{ asset('images/AllWall.png') }}" alt="AllWall Logo">
                <h1 class="welcome">Welcome</h1>
                <p class="auth-description">Please login to access AllWall</p>
            </div>
            <div class="auth-body">
                <form action="login" method="post" name="login_form" class="auth-form">
                    @csrf
                    <label for="username">username<p class="required-star">*</p></label>
                    <input type="text" name="username" id="username">
                    <label for="password">Password<p class="required-star">*</p></label>
                    <input type="password" name="password" id="password">
                </form>
            </div>
            <div class="auth-footer">
                <button form="login_form" type="submit">Login</button>
            </div>
        </div>
        @vite('resources/js/dots.js')
    </body>
</html>