# Instructor
<?php

    //setcookie("customerId", "1234", time() + 60 * 60 * 24);

    setcookie("customerId", "test", time() - 60 * 60);

    // $_COOKIE["customerId"] = "test";

    echo $_COOKIE["customerId"];

?>

# Student
<?php

    //
    // Using Cookies
    // So user stays logged in even after they've
    // closed the browser
    //

    // Set cookie to last for 24 hours
    //        (variable   , value ,      expire date     )
    setcookie("customerId", "1234", time() + 60 * 60 * 24);


    // To remove a cookie
    /**
     * Note:
     * when you remove a cookie like this it stays untill
     * the next page load.
     **/
    //       (variable, "empty string", a time in the past)
    setcookie("customerId", "", time() - 60 * 60);

    // Update the value of the cookie
    $_COOKIE["customerId"] = "test";





    // Access cookie.
    echo $_COOKIE["customerId"]; // Prints value


?>
