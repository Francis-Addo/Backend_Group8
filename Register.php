<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Group 8 College</title>
    <link rel="stylesheet" href="./css/IndexStyle.css">
</head>
<body>
    <!-- Navbar Section -->
    <nav>
        <div class="logo"><img src="./Image/Group%208%20College.png" alt="School Logo" height="100px" width="100px"></div>
        <div class="Sname"><h1>GROUP 8 COLLEGE OF EDUCATION</h1></div>
    </nav>

    <!-- Registration Form -->
    <div class="container1">
        <div class="box form-box">
            <header>Create Account</header>
            
            <form action="register_process.php" method="post">
                <div class="field input">
                    <label for="fname">Full Name *</label>
                    <input type="text" name="fname" id="fname" required placeholder="Enter your full name">
                </div>

                <div class="field input">
                    <label for="email">Email Address *</label>
                    <input type="email" name="email" id="email" required placeholder="your@email.com">
                </div>

                <div class="field input">
                    <label for="contact">Contact Number *</label>
                    <input type="tel" name="contact" id="contact" required placeholder="Enter your phone number">
                </div>

                <div class="field input">
                    <label for="password">Password *</label>
                    <input type="password" name="password" id="password" required placeholder="Create a password">
                </div>

                <div class="field input">
                    <label for="confirm_password">Confirm Password *</label>
                    <input type="password" name="confirm_password" id="confirm_password" required placeholder="Confirm your password">
                </div>

                <div class="btns1">
                    <input type="submit" class="btn1" name="submit" value="Register">
                </div>
                
                <div class="links">
                    Already have an account? <a href="Login.php" class="btn">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>