<?php
$data = json_decode(file_get_contents("php://input"));

$name = htmlspecialchars($data->name);
$email = htmlspecialchars($data->email);
$subject = htmlspecialchars($data->subject);
$message = htmlspecialchars($data->message);

$to = "F2023332001@umt.edu.pk";
$subjectLine = "New Message from Website";

$body = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";
$headers = "From: $email";

if (mail($to, $subjectLine, $body, $headers)) {
    echo "Message sent successfully!";
} else {
    echo "Failed to send message.";
}
?>
