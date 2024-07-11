<?php
//     $connection = mysqli_connect("localhost", "root", "", "mainproject_db");

// if(!$connection){
//     die("Connection failed: " . mysqli_connect_error());
// }

// if(isset($_POST['send'])){
//     $First_name = $_POST['First_name'];
//     $Last_name = $_POST['Last_name'];
//     $Email = $_POST['Email'];
//     $Mobile_no = $_POST['Mobile_no'];
//     $Adrdess = $_POST['Adrdess'];
//     $Username = $_POST['Username'];
//     $Password = $_POST['Password'];


//     $stmt = $connection->prepare("INSERT INTO `register_del`(`First_name`,`Last_name`,`Email`,`Mobile_no`,`Adrdess`,`Username`,`Password`) VALUES (?,?,?,?,?,?,?)");

//     $stmt->bind_param("sssssss",$First_name,$Last_name,$Email,$Mobile_no,$Adrdess,$Username,$Password);


//     if($stmt->execute())
//     {
//         echo"Record inserted succesfully";
//         header('Location: index.html');
//         exit();

//     }else{
//          echo "Error: " . $stmt->error;
//     }
    
//     $stmt->close();
// }

// mysqli_close($connection);
$connection = mysqli_connect("localhost", "root", "", "mainproject_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Country = $_POST['Country'];
    $StreetAddress = $_POST['StreetAddress'];
    $Town = $_POST['Town']; 
    $Postcode = $_POST['Postcode'];
    $Phone = $_POST['Phone'];
    $EmailAddress = $_POST['EmailAddress'];


    $stmt = $connection->prepare("INSERT INTO `schedule_det`(`FirstName`, `LastName`,`Country`,`StreetAddress`,`Town`, `Postcode`, `Phone`, `EmailAddress`) VALUES (?, ?, ?, ?, ?, ?, ?,?)");

    $stmt->bind_param("ssssssss", $FirstName, $LastName, $Country,$StreetAddress,$Town,$Postcode,$Phone, $EmailAddress);

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