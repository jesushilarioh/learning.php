<?php

    if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {

        $link = mysqli_connect("server", "database name", "password", "database username");

            if (mysqli_connect_error()) {

                die ("There was an error connecting to the database");
                
            }


        if ($_POST['email'] == '') {

            echo "<p>Email address is required.</p>";

        } else if ($_POST['password'] == '') {

            echo "<p>Password is required.</p>";

        } else {

            $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";

            $result = mysqli_query($link, $query);

            if (mysqli_num_rows($result) > 0) {

                echo "<p>That email address has already been taken.</p>";

            } else {

                $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";

                if (mysqli_query($link, $query)) {

                    echo "<p>You have been signed up!";

                } else {

                    echo "<p>There was a problem signing you up - please try again later.</p>";

                }

            }

        }

    }




?>

<form method = "post">

    <input name="email" type="text" placeholder="Email address">

    <input name="password" type="password" placeholder="Password">

    <input type="submit" value = "Sign up">

</form>


<?php

    // Assign a variable to database connection
    $link = mysqli_connect("server", "database name", "password", "database username");

    if (mysqli_connect_error()) {
        die ("Unable to connect to database.");
    }

    // Check for post variables in the form, 'email' || 'password'.
    if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
        //print_r($_POST);
        // Check if email and password have values
        if ($_POST['email'] == '') {
            echo "<p>Email address is required. </p>";
        } else if ($_POST['password'] == '') {
            echo "<p>Password is required.</p>";
        } else {
            //Check to see if user exists in our database
            // Remember to us mysqli_real_escape_string()
            // to keep database secure from SQL injections
            $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";

            // Run query
            // send database link and the query itself
            $result = mysqli_query($link, $query);

            // Check if there's any results in this query
            // You can either fetch the results or
            // use a more efficient method
            //... mysqli_num_rows($result)..., that is likely
            // to be used if users are constanly logging in
            // and out of your site:
            if (mysqli_num_rows($result) > 0) {
                echo "<p>That email address has already been taken.</p>";
            } else { // Sign the user up if they are not in the database
                $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";

                // Run query
                if (mysqli_query($link, $query)) {
                    echo "<p>You have been signed up!";
                } else {
                    echo "<p>There was a problem signing you up - please try again later.</p>";
                }
            }

        }



    }

/*$query = "SELECT * FROM users";

// To return everything in the database.
if ($result = mysqli_query($link, $query)) {
    // Notice while loop to print everything in SQL
    while ($row = mysqli_fetch_array($result)) {

        print_r($row);
    }

}

// By ID
$query = "SELECT * FROM users WHERE id = 7";

if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_array($result)){
        print_r($row);
    }
}

// By email
$query = "SELECT * FROM users WHERE email = 'you@email.com'";

if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_array($result)){
        print_r($row);
    }
}

// By anything that end in grand.com
$query = "SELECT * FROM users WHERE email LIKE '%grand.com'";

if ($result = mysqli_query($link, $query)) {
    # code...
    while ($row = mysqli_fetch_array($result)){
        print_r($row);
    }
}

// By any person that has a t anywhere in the email address
$query = "SELECT * FROM  users  WHERE email LIKE '%t%'";

if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_array($result)) {
        print_r($row);
    }
}

// By anyones Id that is 2 or more, using > (greater than)
$query = "SELECT * FROM users WHERE id >= 2";
if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_array($result)) {
        print_r($row);
    }
}

// Return a single Column. In this case
// all email addresses with an Id 2 or greater.
$query = "SELECT `email` FROM users WHERE id >= 2";
if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_array($result)) {
        # code...
        print_r($row);
    }
}

// Combine WHERE clauses
$query = "SELECT `email` FROM users WHERE id >= 2 AND email LIKE '%G%'"; // Notice %G% is case insensitive
if ($result = mysqli_query($link, $query)) {
    # code...
    while ($row = mysqli_fetch_array($result)) {
        # code...
        print_r($row);
    }
}

$name = "Rob O'Grady";
// Always use mysqli_real_escape_string($link, $name)
// whenever you a putting a variable inside a MySQL string...
// in case you run into funny characters within a name
// such as the single quote in O'Grady.
// and to avoid malicious attacks that can add to string and
// gain access to your whole database
// Google SQL injection strings.!.!.!.!
$query = "SELECT `email` FROM users WHERE name = '".mysqli_real_escape_string($link, $name)."'";

if ($result = mysqli_query($link, $query)) {
    # code...
    while ($row = mysqli_fetch_array($result)) {
        # code...
        print_r($row);
    }
}   */





?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" method="post">
            <div class="">
                Email
                <input type="text" name="email" placeholder="Email Address">
            </div>
            <div class="">
                Password
                <input type="password" name="password" placeholder="Password">
            </div>
            <input type="submit" value="Sign Up!"></input>
        </form>
    </body>
</html>
