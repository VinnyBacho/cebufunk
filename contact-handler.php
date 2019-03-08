<?php
session_start();
require('database.php');

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])){
    header("Location: index.php#contact");
} else{
    $sql = $con->prepare("INSERT INTO contacts(contactID, contactFirstName, contactEmail, contactMessage) VALUES (DEFAULT,?,?,?)");
    $sql->bind_param("sss", $firstname, $email, $message);

    $firstname = mysqli_real_escape_string($con, htmlspecialchars($_POST['name']));
    $email = mysqli_real_escape_string($con, htmlspecialchars($_POST['email']));
    $message = mysqli_real_escape_string($con, htmlspecialchars($_POST['message']));

    try{
        $sql->execute();
        $_SESSION['notify']['type'] = "success";
        $_SESSION['notify']['message'] = "The message was sent successfully!";
        header("Location: index.php#contact");
    } catch (Exception $e){
        $error_message = $e->getMessage();
        $_SESSION['notify']['type'] = "danger";
        $_SESSION['notify']['message'] = "The message failed to send. Please try again.";
        header("Location: index.php#contact");
    }
    
}
mysqli_close($con);
?>