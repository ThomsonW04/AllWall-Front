<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Login</title>
        @vite(['resources/themes/normal.css', 'resources/css/default.css', 'resources/css/auth.css'])
    </head>
    <body>
        <div class="auth-div">
            <div class="auth-header">
                <img src="{{ asset('images/AllWall.png') }}" alt="">
            </div>
            <div class="auth-body">
                <form action="login" method="post" name="login_form">

                </form>
            </div>
            <div class="auth-footer">

            </div>
        </div>
    </body>
</html>