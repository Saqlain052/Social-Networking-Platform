<?php include 'db.php' ?>
<h1>All Posts Lists </h1>
<table border="1" cellpadding="10">
    <tr>
        <th>ID </th>
        <th> Post Content </th>
        <th>Actions</th>
</tr>
<?php
$result = $conn->query("SELECT * FROM post");
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['posting']}</td>
    <td>
    <a href='post_edit.php?=id{$row['id']}'>Edit</a>|
    <a href='post_delete.php?=id{$row['id']}' onclick='return confirm(\"Are you sure you want to delete this Post?\")'>Delete</a>
    </td>
    </tr>";
    
}

?>
</table>