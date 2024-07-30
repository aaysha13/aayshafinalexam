<?php include('header.php'); ?>
<?php include('db_connection.php'); ?>

<form action="index.php" method="post">
    <input type="text" name="message" maxlength="50" required>
    <button type="submit" name="submit">Submit</button>
</form>

<a href="showAll.php">Show all records</a>

<?php
if (isset($_POST['submit'])) {
    $message = $_POST['message'];

 
    $stmt = $conn->prepare("INSERT INTO string_info (message) VALUES (?)");
    $stmt->bind_param("s", $message);

 
    if ($stmt->execute()) {
        echo "Record successfully inserted!";
    } else {
        echo "Error: " . $stmt->error;
    }


    $stmt->close();
    $conn->close();
}
?>
</body>
</html>


