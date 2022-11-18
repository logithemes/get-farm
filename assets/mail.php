<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        # FIX: Replace this email with recipient email
        $mail_to = "www.domainname@gmail.com"; //here put your email id
        
        # Sender Data
        //$subject = trim($_POST["subject"]);
		$subject = "Holidays - Tour & Travel New Booking";
        $package = trim($_POST["packages"]);
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["phone"]);
        $date = trim($_POST["date"]);
        $adults = trim($_POST["adults"]);
        $children = trim($_POST["children"]);
        
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($phone)) {
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }
        
        # Mail Content
        $content = "Package: $package\n";
        $content .= "Name: $name\n";
        $content .= "Email: $email\n";
        $content .= "Phone: $phone\n";
        $content .= "Date: $date\n";
        $content .= "No of adults: $adults\n";
        $content .= "NO of childrens: $children\n";

        # email headers.
        $headers = "From: $name <$email>";

        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong, we couldn't send your message.";
        }

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
