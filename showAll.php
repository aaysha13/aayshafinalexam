<?php include('header.php'); ?>
<?php include('db_connection.php'); ?>

<h2>All Records</h2>

<?php
$sql = "SELECT string_id, message FROM string_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["string_id"] . " - Message: " . $row["message"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<form action="delete.php" method="post">
    <input type="text" name="string_id" placeholder="Enter ID to delete" required>
    <button type="submit" name="delete">Delete</button>
</form>

</body>
</html>

