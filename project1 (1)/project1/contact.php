<?php
$connection = mysqli_connect("localhost", "root", "", "mainproject_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $name= $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    
    $stmt = $connection->prepare("INSERT INTO `contact`(`name`, `email`, `msg`) VALUES (?, ?, ?)");

    $stmt->bind_param("sss", $name, $email, $msg);

    if ($stmt->execute()) {
        echo "Record inserted successfully";
        header('Location: index.html');
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

mysqli_close($connection);



?>