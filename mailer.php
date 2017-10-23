<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $dob =$_POST["date"];
    $city =$_POST["city"];
    $state =$_POST["state"];
    $country =$_POST["country"];
    $tel =$_POST["tel"];
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $partners =$_POST["partners"];
    $partners_dob =$_POST["partner-date"];
    $message = trim($_POST["details"]);
   


//    // Check the data.
//    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        header("Location:http://dinahjohn.com/index.html?success=-1#form");
//        exit;
//    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "ehidalgo1988@gmail.com";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Date of Birth:\n$dob\n";
    $email_content .= "City:\n$city\n";
    $email_content .= "State:\n$state\n";
    $email_content .= "Country:\n$country\n";
    $email_content .= "Telephone:\n$tel\n";
    $email_content .= "Partners name:\n$partners\n";
    $email_content .= "Partners date of birth:\n$dpartners_dob\n";
    $email_content .= "Tell me about your situation::\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location:http://dinahjohn.com/index.html");

?>