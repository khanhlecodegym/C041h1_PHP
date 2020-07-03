<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
        integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form action="login" method="post">
            <button class="btn btn-ghost">
                <img src="./public/images/google.png" alt="">
                Log in with Google
            </button>

            <small>or</small>

            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter your email" name="email">
            </div>

            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password" name="password">
            </div>

            <div class="checkbox-container">
                <input type="checkbox" id="remember">
                <label for="remember">Remember me</label>

                <a href="#">Forgot Password</a>
            </div>

            <button class="btn">Log In</button>

            <small>Don't have an account? <a href="#">Sign up</a></small>
        </form>

        <div class="features">
            <div class="feature">
                <i class="fas fa-code"></i>
                <h3>Development</h3>
                <p>A modern and clean design system for developing fast and powerful
                    web interfaces.</p>
            </div>
            <div class="feature">
                <i class="fas fa-gift"></i>
                <h3>Features</h3>
                <p>A modern and clean design system for developing fast and powerful
                    web interfaces.</p>
            </div>
            <div class="feature">
                <i class="fas fa-edit"></i>
                <h3>Updates</h3>
                <p>A modern and clean design system for developing fast and powerful
                    web interfaces.</p>
            </div>
        </div>
    </div>
</body>

</html>