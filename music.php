<?php
/**
 * Created by PhpStorm.
 * User: Vinnie B
 * Date: 2/8/2019
 * Time: 11:29 AM
 */
include('header.php');
require('database.php');
?>

<div class="content-section">
        <!-- We made a PHP script here so dad can put in information -->
        <?php

        try {
            $stmt = $con->prepare("SELECT entryID, entryDate, entryMessage, entryURL from cebufunk.cebufunk");
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $date, $message, $url);
        } catch (Exception $e) {
            $e->getMessage();
        }

        while($stmt->fetch()){
            echo '<div class="content-container"><p class="content-date"><strong>' . $date . '</strong></p>';
            echo '<p class="content-message">' . $message . '</p>';
            echo '<div class="content-video">
            <iframe
              width="560"
              height="315"
              src="' . $url . '"
              frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
        </div>';
        }
        ?>
        </div>