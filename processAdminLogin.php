<?php
require('database.php');
include('header.php');

session_start();

if(!isset($_POST['adminUsername']) || !isset($_POST['adminPassword'])){
    header('Location: adminLogin.php');
} else {
    $stmt = $con->prepare("SELECT adminUsername, adminPassword from admin WHERE adminUsername=? AND adminPassword=?");
    $stmt->bind_param("ss", $username, $password);

    $username = mysqli_real_escape_string($con, htmlspecialchars($_POST['adminUsername']));
    $password = mysqli_real_escape_String($con, htmlspecialchars($_POST['adminPassword']));

    try{
        $stmt->execute();
        $stmt->bind_result($username,$password);

        if($stmt->fetch() != NULL) {
            $_SESSION["username"] = $username;
            header("Location: adminView.php");
        } else {
            header("Location: adminLogin.php");
        }
    } catch (Exception $e){
        exit();
    }
}
mysqli_close($con);
?>