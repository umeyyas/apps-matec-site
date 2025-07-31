<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name'] ?? '');
  $email = htmlspecialchars($_POST['email'] ?? '');
  $message = htmlspecialchars($_POST['message'] ?? '');

  if (!$name || !$email || !$message) {
    http_response_code(400);
    echo 'Missing required fields';
    exit;
  }

  $to = 'umeyyasbodo55@gmail.com';
  $subject = "New Message from $name";
  $body = "From: $name <$email>\n\n$message";
  $headers = "From: $email\r\nReply-To: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent!';
  } else {
    http_response_code(500);
    echo 'Sending failed!';
  }
}
?>
