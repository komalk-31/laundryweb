<?php
$connection = mysqli_connect("localhost", "root", "", "mainproject_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    
    $stmt = $connection->prepare("INSERT INTO `login_del`(`Username`, `Password`) VALUES (?, ?)");

    $stmt->bind_param("ss", $Username, $Password);

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