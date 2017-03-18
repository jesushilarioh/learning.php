<?php

    $emailTo = "info@email.com";

    $subject = "I hope this works!";

    $body = "I think you're great!";

    $headers = "From: sender@email.com";

    // if all mail parameters are true...
    if (mail($emailTo, $subject, $body, $headers)) {
        echo "The email was sent successfully";
    // if not...
    } else {
        echo "The email could not be sent.";
    }
?>
