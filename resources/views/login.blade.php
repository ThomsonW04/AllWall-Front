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
                <img class="logo" src="{{ asset('images/AllWall.png') }}" alt="">
            </div>
            <div class="auth-body">
                <form action="login" method="post" name="login_form" class="auth-form">
                    @csrf
                    <label for="email">Email<p class="required-star">*</p></label>
                    <input type="email" name="email" id="email">
                    <label for="password">Password<p class="required-star">*</p></label>
                    <input type="password" name="password" id="password">
                </form>
            </div>
            <div class="auth-footer">

            </div>
        </div>
        @vite('resources/js/dots.js')
    </body>
</html>