<?php
session_start();
require('database.php');

if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['message'])){
    header("Location: contact-cebu.php");
} else{
    $sql = $con->prepare("INSERT INTO contacts(contactID, contactFirstName, contactLastName, contactEmail, contactMessage) VALUES (DEFAULT,?,?,?,?)");
    $sql->bind_param("ssss", $firstname, $lastname, $email, $message);

    $firstname = mysqli_real_escape_string($con, htmlspecialchars($_POST['name']));
    $lastname = mysqli_real_escape_string($con, htmlspecialchars($_POST['surname']));
    $email = mysqli_real_escape_string($con, htmlspecialchars($_POST['email']));
    $message = mysqli_real_escape_string($con, htmlspecialchars($_POST['message']));

    try{
        $sql->execute();
        $_SESSION['notify']['type'] = "success";
        $_SESSION['notify']['message'] = "The message was sent successfully!";
        header("Location: contact-cebu.php");
    } catch (Exception $e){
        $error_message = $e->getMessage();
        $_SESSION['notify']['type'] = "danger";
        $_SESSION['notify']['message'] = "The message failed to send. Please try again.";
        header("Location: contact-cebu.php");
    }
    
}
mysqli_close($con);
?>