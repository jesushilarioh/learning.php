<?php
    // Keeping user signed in to our website so that
    // we know who they are and can show them the
    // right information...One way to do that is with
    // SESSION VARIABLES.

        /*
         * Note:
         * You can use session variables on different pages
         * of your website. But, you need to have session_start()
         * at the beginning of each page!! If you load a page on
         * your site without session start, then that will loose
         * the session.
         *
         * It's also a good idea to avoid putting any HTML code
         * before you start your session. Because that can
         * break your session as well!
         */


        // Start Session
        session_start();

        if ($_SESSION['email']) {
            echo "You are logged in!";
        } else {
            header("Location: index.php");
        }
        //$_SESSION['username'] = "jesushilarioh";

        // echo $_SESSION['username'];

?>
