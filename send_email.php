<?php
$to = "dropoutphilippines@gmail.com";


$email = $_POST['email'];
$feedback = $_POST['feedback'];

$subject = "New feedback from $email";

$body = "Feedback from: $email\n";
$body = "Message:\n$feedback";


if (mail($to, $subject, $body)) {
    
    header("Location: feedbackres.html");
    exit();
} else {
    
    echo "Failed to send feedback.";
}
?>
