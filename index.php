<?php include('header.php');
require('database.php');
?>
    <div class="main-container">
      <div class="title-section">
        <img class="title-section-bio-image" src="bio-pic.jpg" />
        <h1>Cebu Funk</h1>
        <p>Funk Master of Southern California</p>
      </div>
      <div class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li>Bio</li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="content-section">
        <!-- We made need a PHP script here so dad can put in information -->
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
      </div>
<?php include('footer.php'); ?>
