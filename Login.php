<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Group 8 College</title>
    <link rel="stylesheet" href="./css/IndexStyle.css">
</head>
<body>
    <!-- Navbar Section -->
    <nav>
        <div class="logo"><img src="./Image/Group%208%20College.png" alt="School Logo" height="100px" width="100px"></div>
        <div class="Sname"><h1>GROUP 8 COLLEGE OF EDUCATION</h1></div>
    </nav>

    <!-- Login Form -->
    <div class="container1">
        <div class="box form-box">
            <header>Login</header>
            
            <form action="login_process.php" method="post">
                <div class="field input">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" required placeholder="Enter your email">
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required placeholder="Enter your password">
                </div>

                <div class="btns1">
                    <input type="submit" class="btn1" name="submit" value="Login">
                </div>
                
                <div class="links">
                    Don't have an account? <a href="Register.php" class="btn">Register</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>