<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['fullname'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Validation
    if (!empty($name) && !empty($email) && !empty($password) && !empty($cpassword)) {
        if ($password !== $cpassword) {

            echo "Passwords do not match!";
        } else {

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (full_name, email, password) VALUES ('$name', '$email', '$hashedPassword')";
            
            if ($conn->query($sql) === TRUE) {
                header("Location: login.html"); 
                
            } else {
                echo "Error: " . $conn->error;
            }
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>


