<?php

function notification()
{

    if(isset($_SESSION['notify']))
    {

        $type = $_SESSION['notify']['type'];
        $message = $_SESSION['notify']['message'];

        $html = '<div class="alert alert-'.$type.'"><span>'.$message.'</span></div>';

        unset($_SESSION['notify']);

        echo $html;

    }

}
?>