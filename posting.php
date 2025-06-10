<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $posting = $_POST["posting"];

    $sql = "INSERT INTO post (posting) VALUES ('$posting')";

    if($conn->query($sql)){
    header("Location:index.html");
    }
    else{
    echo "Error" .conn->error;
     }
}

?>