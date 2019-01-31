<?php
require('database.php');
include('header.php');
//View, add, delete, update content
session_start();

if(!isset($_SESSION['username'])){
    header('Location: adminLogin.php');
}

echo "<p>Hello, " . $_SESSION['username'] . "</p>";
//View, delete contact stuff -> throw in some email scripts maybe?

echo "<h2>Posts</h2>";
try {
    $stmt = $con->prepare("SELECT entryID, entryDate, entryMessage, entryURL from cebufunk.cebufunk");
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $date, $message, $url);
} catch (Exception $e) {
    $e->getMessage();
}

echo '<table><tr><th>Date</th><th>Message</th><th>Video URL</th>';
while($stmt->fetch()){
    echo '<tr><td>' . $date . '</td><td>' . $message . '</td><td> <iframe
    width="560"
    height="315"
    src="' . $url . '"
    frameborder="0"
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen
  ></iframe></td><td><form action="deleteContent.php" method="post"><input type="submit" value="Delete"/></form></td><td><form action="editContent.php" method="post"><input type="submit" value="Edit"/></form></td></tr>';
}
echo '</table>';
?>