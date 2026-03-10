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
    <title>Preview Application - Group 8 College</title>
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

    <!-- Preview Section -->
    <div class="container">
        <div class="box form-box">
            <header>Preview Your Application</header>
            
            <div class="preview-container">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Create uploads directory if it doesn't exist
                    if (!file_exists('uploads')) {
                        mkdir('uploads', 0777, true);
                    }
                    if (!file_exists('uploads/results')) {
                        mkdir('uploads/results', 0777, true);
                    }
                    
                    // Store form data in session for later use
                    $_SESSION['form_data'] = $_POST;
                    
                    // Personal Details Preview
                    echo '<div class="preview-item">';
                    echo '<h3>Personal Details</h3>';
                    echo '<p><strong>Full Name:</strong> ' . htmlspecialchars($_POST['first_name']) . ' ' . htmlspecialchars($_POST['last_name']) . '</p>';
                    echo '<p><strong>Date of Birth:</strong> ' . htmlspecialchars($_POST['dob']) . '</p>';
                    echo '<p><strong>Gender:</strong> ' . htmlspecialchars($_POST['gender']) . '</p>';
                    echo '<p><strong>Email:</strong> ' . htmlspecialchars($_POST['email']) . '</p>';
                    echo '<p><strong>Phone:</strong> ' . htmlspecialchars($_POST['phone']) . '</p>';
                    echo '<p><strong>Address:</strong> ' . htmlspecialchars($_POST['address']) . '</p>';
                    echo '<p><strong>Nationality:</strong> ' . htmlspecialchars($_POST['nationality']) . '</p>';
                    
                    // Handle profile picture upload
                    if(isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
                        $target_dir = "uploads/";
                        $target_file = $target_dir . time() . '_profile_' . basename($_FILES["profile_picture"]["name"]);
                        if(move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
                            echo '<p><strong>Profile Picture:</strong><br>';
                            echo '<img src="' . $target_file . '" alt="Profile Picture" class="profile-img"></p>';
                            $_SESSION['profile_pic'] = $target_file;
                        }
                    }
                    echo '</div>';

                    // Educational Background Preview
                    echo '<div class="preview-item">';
                    echo '<h3>Educational Background</h3>';
                    echo '<p><strong>High School:</strong> ' . htmlspecialchars($_POST['high_school']) . '</p>';
                    echo '<p><strong>Graduation Year:</strong> ' . htmlspecialchars($_POST['graduation_year']) . '</p>';
                    echo '<p><strong>Highest Qualification:</strong> ' . htmlspecialchars($_POST['qualification']) . '</p>';
                    
                    // Handle result slip upload
                    if(isset($_FILES['result_slip']) && $_FILES['result_slip']['error'] == 0) {
                        $result_dir = "uploads/results/";
                        $result_file = $result_dir . time() . '_result_' . basename($_FILES["result_slip"]["name"]);
                        if(move_uploaded_file($_FILES["result_slip"]["tmp_name"], $result_file)) {
                            echo '<p><strong>Result Slip:</strong> <a href="' . $result_file . '" target="_blank" style="color: #38bdf8;">View Uploaded Result</a></p>';
                            echo '<p><small>Filename: ' . basename($_FILES["result_slip"]["name"]) . '</small></p>';
                            $_SESSION['result_slip'] = $result_file;
                        }
                    }
                    echo '</div>';

                    // Program Selection Preview
                    echo '<div class="preview-item">';
                    echo '<h3>Program Selection</h3>';
                    echo '<p><strong>First Choice:</strong> ' . htmlspecialchars($_POST['program1']) . '</p>';
                    echo '<p><strong>Second Choice:</strong> ' . htmlspecialchars($_POST['program2']) . '</p>';
                    echo '<p><strong>Third Choice:</strong> ' . htmlspecialchars($_POST['program3']) . '</p>';
                    echo '<p><strong>Accommodation Required:</strong> ' . htmlspecialchars($_POST['accommodation']) . '</p>';
                    
                    if(!empty($_POST['special_requirements'])) {
                        echo '<p><strong>Special Requirements:</strong> ' . nl2br(htmlspecialchars($_POST['special_requirements'])) . '</p>';
                    }
                    
                    echo '<p><strong>Terms Accepted:</strong> Yes</p>';
                    echo '</div>';
                } else {
                    echo '<p style="text-align: center; font-size: 1.2rem;">No form data to preview.</p>';
                    echo '<p style="text-align: center; margin-top: 20px;"><a href="Dashboard.php" class="btn">Go to Application Form</a></p>';
                }
                ?>

                <div class="button-group">
                    <a href="Dashboard.php" class="btn">Previous</a>
                    <a href="Submit.php" class="btn">Submit Application</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>