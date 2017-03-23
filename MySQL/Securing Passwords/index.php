# Instructor

<?php

	// $salt = "isefjfehi2736582KUFED";

	$row['id'] = 73;

	echo md5(md5($row['id'])."password");

?>

# Instructor NEW!!!! Use!!!
<?php
    // Generate a hash of the password "mypassword"
    $hash = password_hash("mypassword", PASSWORD_DEFAULT);

    // Echoing it out, so we can see it:
    echo $hash;

    // Some line breaks for a cleaner output:
    echo "<br><br>";

    // Using password_verify() to check if "mypassword" matches the
    // hash.
    // Try chaning "mypassword" below to something else and
    // then refresh the page.
    if (password_verify('mypassword', $hash)) {
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
    }

    // DOCUMENTATION!
    // http://php.net/manual/en/function.password-hash.php
?>

# Student

<?php

    // Level 3 encryption
    // adding this to a password make it stronger
    // as opposed to a users week password.
    $salt = "sldka3409VN9W$98345979aw$(#*$)";

    // Create a hash to encrypt use passwords
    // md5 great example of one way encryption.
    // md5 is a Level 2 encryption
    echo md5($salt. "password");

    $row['id'] = 73;
    // USE level 4 for sure!!!!
    echo md5(md5($row['id'])."password");

?>
