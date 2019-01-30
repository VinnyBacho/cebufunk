<?php
include('header.php');
?>
<div class="adminLogin">
    <h1>Admin Login</h1>
    <form action="processAdminLogin.php" method="post">
        <input type="text" name="adminUsername" placeholder="Username"/>
        <br/>
        <input type="password" name="adminPassword" placeholder="Password"/>
        <br/>
        <input class="btn btn-primary" type="submit" value="Login">
    </form>
</div>