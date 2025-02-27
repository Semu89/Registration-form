<?php
$servername = "localhost";
$username = "root";  // Default XAMPP username
$password = "";      // Default XAMPP password is blank
$database = "user_registration";  // Aapke database ka naam

// Database Connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form Submit Hone Par Data Insert Karein
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    // Password Match Check
    if ($password !== $repassword) {
        die("Error: Passwords do not match!");
    }

    // **Check if email already exists**
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        die("<script>alert('Error: Email already registered! Please use a different email.'); window.location.href='index.php';</script>");
    }

    // Password Hashing for Security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL Query to Insert Data
    $sql = "INSERT INTO users (fullname, email, mobile, gender, password) 
            VALUES ('$fullname', '$email', '$mobile', '$gender', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
