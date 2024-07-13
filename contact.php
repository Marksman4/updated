
<?php
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate the form data
    if (empty($name) || empty($email) || empty($message)) {
      echo "Please fill in all the fields.";
      exit;
    }

    // Send the email
    $to = "ohaegbumarksman@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
      echo "Thank you for contacting us! We'll get back to you soon.";
    } else {
      echo "Error sending email. Please try again.";
    }
  }
?>