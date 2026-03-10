<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fname = trim($_POST['fname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $contact = trim($_POST['contact'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    
    // Validation
    $errors = [];
    
    if (empty($fname)) {
        $errors[] = "Full name is required";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($contact)) {
        $errors[] = "Contact number is required";
    }
    
    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters";
    }
    
    // Check if passwords match
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }
    
    // If no errors, save user data
    if (empty($errors)) {
        // Store user credentials in session (simulating database)
        $_SESSION['users'][$email] = [
            'name' => $fname,
            'email' => $email,
            'contact' => $contact,
            'password' => $password
        ];
        
        // Redirect to login with success message
        header("Location: Login.php?registration=success");
        exit();
    } else {
        // Store errors in session and redirect back with error
        $_SESSION['registration_errors'] = $errors;
        header("Location: Register.php?error=1");
        exit();
    }
} else {
    // If not POST request, redirect to registration page
    header("Location: Register.php");
    exit();
}
?>