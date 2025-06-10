<?php
include "db.php"

$id = $_GET["id"];

$result = conn->query("DELETE FROM post WHERE id=$id");
header("Location:post_read.php");
?>