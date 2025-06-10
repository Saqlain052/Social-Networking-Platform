<?php
include 'db.php';

$id =$_GET['id'];

$result = $conn->query("SELECT * FROM post where id=$id");
$row = $result->fetch_assoc();

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $posting = $_POST["posting"];

    conn->query("UPDATE post SET posting=$posting where id=$id");
    header("Location:post_read.php");
}
?>

<h1> Edit Post </h1>
<form method = "POST">
<textarea class="form-control" name="posting" placeholder="What's on your mind?" rows="2" value="<?=$row['posting'] ?>"></textarea>
<input type="submit" value="Update">
</form>
