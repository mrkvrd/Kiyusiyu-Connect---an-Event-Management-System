<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="icon" type="image/x-icon" href="images/qculogo.png">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container mt-3 d-flex flex-column align-items-center justify-content-center ">
        <header class="login text-center mb-3 w-100" style="max-width: 400px;">
            <div class="header-content d-flex justify-content-center align-items-center">
                <img src="images/qculogo.png" alt="QC University Logo" class="rounded-circle">
                <h2>Kiyusiyu Connect</h2>
            </div>
        </header>

        <div class="w-100" style="max-width: 400px;">
            <div class="p-4 login">    
                <div class="text-center mb-2">
                    <h2><b>Student Log In</b></h2>
                </div>

                <form autocomplete="on">
                    <!-- Username input -->
                    <div class="mb-3">
                        <label for="username" class="form-label"><b>Username</b></label>
                        <input type="text" class="form-control" id="username" name="username" required autocomplete="username">
                    </div>
    
                    <!-- Password input -->
                    <div class="mb-3">
                        <label for="password" class="form-label"><b>Password</b></label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword"><i class="fa fa-eye" aria-hidden="true"></i></button>
                        </div>
                    </div>
    
                    <!-- Forgot password link -->
                    <div class="mb-2 text-end">
                        <a href="#" class="text-decoration-none">Forgot password?</a>
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="mb-3 d-flex justify-content-center align-items-center">
                        <input type="checkbox" id="rememberMe" class="me-2">
                        <label for="rememberMe" class="form-check-label"><b>Remember Me</b></label>
                    </div>
    
                    <!-- Submit button -->
                    <div class="d-flex justify-content-center">
                        <button onclick="window.location.href = 'admin.php'" type="submit" class="btn btn-primary px-5 py-2">Log In</button>
                    </div>
    
                    <p class="mt-2 text-center">
                        By logging in, you agree to our 
                        <a href="#" class="text-decoration-none"><b>Terms of Use</b></a> and that you have read our 
                        <a href="#" class="text-decoration-none"><b>Privacy Policy</b></a>.
                    </p>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function (e) {
            const password = document.getElementById('password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.innerHTML = type === 'password' ? '<i class="fa fa-eye" aria-hidden="true"></i>' : '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
        });
    </script>
</body>
</html>
