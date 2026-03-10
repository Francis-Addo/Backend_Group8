<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get login data
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    
    // Validation
    if (empty($email) || empty($password)) {
        header("Location: Login.php?error=invalid");
        exit();
    }
    
    // Check if user exists in our "database" (session)
    $authenticated = false;
    $user_name = '';
    
    // Debug: Check if users array exists
    if (isset($_SESSION['users']) && is_array($_SESSION['users'])) {
        foreach ($_SESSION['users'] as $registered_email => $user_data) {
            if ($registered_email === $email && $user_data['password'] === $password) {
                $authenticated = true;
                $user_name = $user_data['name'];
                break;
            }
        }
    }
    
    // Demo user for testing (always works)
    if (!$authenticated && $email === "demo@group8.edu" && $password === "demo123") {
        $authenticated = true;
        $user_name = "Demo User";
    }
    
    if ($authenticated) {
        // Set session variables
        $_SESSION['logged_in'] = true;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $user_name;
        
        // Redirect to dashboard
        header("Location: Dashboard.php");
        exit();
    } else {
        // Invalid credentials
        header("Location: Login.php?error=invalid");
        exit();
    }
} else {
    // If not POST request, redirect to login page
    header("Location: Login.php");
    exit();
}
?>