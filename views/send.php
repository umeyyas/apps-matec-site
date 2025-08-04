<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $message = $_POST['message'] ?? '';

  $to = "umeyyascode55@email.com"; // 🔁 CHANGE THIS to your real email
  $subject = "New message from $name";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
  $headers = "From: $email\r\nReply-To: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send.";
  }
}
?>
