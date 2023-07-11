<?php

//  this is used to configure the form to the database
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "mini_attendance_system";

// this adds the variables to the mysqli command that is to connect to the database
$connect = new mysqli($db_host, $db_user, $db_pass, $db_name);


if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $matricNo = $_POST['matricNo'];
    $level = $_POST['level'];

    // Make sure to include the backticks (`) around column names in the query
    // the query inserts data from the form into the database
    $query = "INSERT INTO `students_records`(`fullname`, `MatricNo`, `level`) VALUES ('$user_name','$matricNo', '$level')";
    
    // the result variable connects the config to the query variable
    $result = mysqli_query($connect, $query);

    // this is validation that if the database recieved the data... reload the form page

    if($result){
        header('location:index.php');    
    }
    else{
        die(mysqli_error($connect)) ;
    }
    
}
?>