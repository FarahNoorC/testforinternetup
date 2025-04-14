<?php
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $message = $_POST['Message'];

  echo "Message received:<br>";
  echo "Name: " . htmlspecialchars($name) . "<br>";
  echo "Email: " . htmlspecialchars($email) . "<br>";
  echo "Message: " . nl2br(htmlspecialchars($message)) . "<br>";
?>
