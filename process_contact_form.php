<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone_number = $_POST["phone_number"];
    $email_address = $_POST["email_address"];
    $company_name = $_POST["company_name"];
    $company_email = $_POST["company_email"];
    $help_with = $_POST["help_with"];

    // Set the recipient email address
    $to = "test@workculture.com.ng";

    // Set the subject of the email
    $subject = "New Contact Form Submission";

    // Build the email message
    $email_message = "First Name: $first_name\n";
    $email_message .= "Last Name: $last_name\n";
    $email_message .= "Phone Number: $phone_number\n";
    $email_message .= "Email Address: $email_address\n";
    $email_message .= "Company Name: $company_name\n";
    $email_message .= "Company Email: $company_email\n\n";
    $email_message .= "Message:\n$help_with";

    // Send the email
    mail($to, $subject, $email_message);

    // Redirect to a thank-you page
    header("Location: thank_you.html");
    exit;
}
?>
