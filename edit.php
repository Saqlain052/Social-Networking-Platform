<?php
include 'db.php';

$id = $_GET['id'];


$result = $conn->query("SELECT * FROM users WHERE id = $id");
$row = $result->fetch_assoc();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $password= $_POST['password'];

    $conn->query("UPDATE users SET full_name='$name', email='$email', password ='$password' WHERE id = $id");
    header("Location: read.php"); 
    
}
?>

<h2>Edit User</h2>
<form method="post">
    Name: <input type="text" name="name" value="<?= $row['full_name'] ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br><br>
    Password: <input type="password" name="password" placeholder="Enter new password if changing"><br><br>
    <input type="submit" value="Update">
</form>
