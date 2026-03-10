<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
    header("Location: Login.php?error=login");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Submitted - Group 8 College</title>
    <link rel="stylesheet" href="./css/IndexStyle.css">
</head>
<body>
    <!-- Navbar Section -->
    <nav>
        <div class="logo"><img src="./Image/Group%208%20College.png" alt="School Logo" height="100px" width="100px"></div>
        <div class="Sname"><h1>GROUP 8 COLLEGE OF EDUCATION</h1></div>
        <div class="btns">
            <a href="Logout.php"><button class="btn">Logout</button></a>
        </div>
    </nav>

    <!-- Submission Confirmation -->
    <div class="container1">
        <div class="box form-box">
            <header>Application Submitted!</header>
            
            <div style="text-align: center; margin: 30px 0;">
                <div style="font-size: 80px; color: #38bdf8; margin-bottom: 20px;">✓</div>
                <h2 style="color: #38bdf8; margin-bottom: 20px;">Thank You for Applying!</h2>
                <p style="font-size: 1.2rem; margin-bottom: 30px;">Your application has been successfully submitted for processing.</p>
                
                <?php if(isset($_SESSION['form_data'])): ?>
                <div style="background-color: rgba(56, 189, 248, 0.1); padding: 20px; border-radius: 15px; margin-bottom: 30px;">
                    <p><strong>Application Number:</strong> G8-<?php echo date('Y') . '-' . rand(1000, 9999); ?></p>
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['form_data']['first_name'] . ' ' . $_SESSION['form_data']['last_name']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['form_data']['email']); ?></p>
                    <p><strong>First Choice:</strong> <?php echo htmlspecialchars($_SESSION['form_data']['program1']); ?></p>
                    <p><strong>Second Choice:</strong> <?php echo htmlspecialchars($_SESSION['form_data']['program2']); ?></p>
                    <p><strong>Third Choice:</strong> <?php echo htmlspecialchars($_SESSION['form_data']['program3']); ?></p>
                    <p><strong>Submission Date:</strong> <?php echo date('F j, Y, g:i a'); ?></p>
                </div>
                <?php endif; ?>
                
                <p style="margin-bottom: 20px;">You will receive a confirmation email shortly with further instructions.</p>
                
                <div class="links">
                    <a href="Dashboard.php" class="btn">New Application</a>
                    <a href="Index.html" class="btn">Home Page</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>