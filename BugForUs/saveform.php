<?php
include('header.php');

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Problem = $_POST['Problemtype'];
$Daytovisit = $_POST['date'];
$Telephone = $_POST['phone'];
$Comment = $_POST['Comment'];

if (!empty($Name) || !empty($Email) || !empty($Problem) || !empty($Daytovisit) || !empty($Comment) || !empty($Telephone)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbpassword = "";
    $dbname = "mysql";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT Into form 
    (Name, Email, Telephone, Problem, Daytovisit,Comment) values('$Name', '$Email', '$Telephone', '$Problem', '$Daytovisit','$Comment')";

    if (mysqli_query($conn, $sql)) {
        header("Location: result.php?isSuccess=1");
    } else {
        // add failure redirect page
        header("Location: result.php?isSuccess=0");
    }

    mysqli_close($conn);
}
