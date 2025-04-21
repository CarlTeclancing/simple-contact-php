<?php

if($_SERVER["REQUEST_METHOD"] ==  "POST"){

    //getting data from the input fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    //connect to the database

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "student_info";

     $conn = new mysqli($host, $user, $pass, $db);

     if($conn->connect_error){
        die("connection failed" . $conn->connect_error);
     }else{
        echo "connection succesful";

        $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

        if($conn->query($sql)== true){
            echo "data submited succesfully";
        }else{
            echo "failed to submit data";
        }

        $conn->close();

     }

}
