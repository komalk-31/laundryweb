<?php

        $conn = mysqli_connect(
            hostname:"localhost",
            username:"root",
            password:"",
            database:"laundry"            
        );

        if($conn){
            $sql ="INSERT INTO 'regi'('First_name','Last_name','Email','Mobile_no','Address','Username','Password') VALUES ('$First_name','$Last_name','$Email','$Mobile_no','$Address','$Username','$Password')";

            $result = mysqli_query($conn, $sql);  
            
            
            if($result){
                echo"data Submitted";
            }else{
                echo"Error";
            }
        }
        
?>