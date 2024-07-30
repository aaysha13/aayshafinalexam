<?php include('db_connection.php'); ?>

<?php
if (isset($_POST['delete'])) {
    $string_id = $_POST['string_id'];


    $stmt = $conn->prepare("DELETE FROM string_info WHERE string_id = ?");
    $stmt->bind_param("i", $string_id);

  
    if ($stmt->execute()) {
        echo "Record successfully deleted!";
    } else {
        echo "Error: " . $stmt->error;
    }


    $stmt->close();
    $conn->close();
}
?>

<a href="showAll.php">Back to Records</a>
