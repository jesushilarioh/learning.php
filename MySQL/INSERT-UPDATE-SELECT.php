<?php

    // (server, database name, database password, database username)
    $link = mysqli_connect("localhost", "cl29-hello-bzh", "YTTMcfhK.", "worldwide");

    if (mysqli_connect_error()) {

        die ("There was an error connecting to the database");

    }

    // create a query to ADDing(POSTing) information to SQL
    // names of fields inside parenthesis, good habit to use tick marks as well.
    // for VALUES back to using single quotes

    /* $query = "INSERT INTO `users` (`email`, `password`) VALUES('tom@grand.com', 'flowersRow')"; */

    // Run POST query
    /* mysqli_query($link, $query);*/

    /* $query = "UPDATE `users` SET email = 'toward@grand.com' WHERE id = 1 LIMIT 1"; // Use LIMIT as a extra safty net!!!! It limits the number of rows that it will update!!!!

    mysqli_query($link, $query); */

    // 'nother example that changes the password of randyWatson80@gmail.com

    $query = "UPDATE `users` SET password = '@edjRTH7&%' WHERE email = 'randyWatson80@gmail.com' LIMIT 1";

    mysqli_query($link, $query);

    // Create a query to GET(RETRIEVE) info from our SQL
    // Use MySQL syntax within the query
    $query = "SELECT * FROM users";

    if ($result = mysqli_query($link, $query)) {
        
        $row = mysqli_fetch_array($result);
        //print_r($row);

        echo "Your email is ".$row[1]." and your password is ".$row[2];

    }


?>
