<?php

    if ($_POST) {
        $family = array('jesus', 'christina', 'johnny', 'joe', 'lisa');
        $isKnown = false;

        // Check if the users name is part of the $family array
        foreach ($family as $value) {

            if ($value == $_POST['name']) {
                $isKnown = true;
            }
        }
        // If they are...
        if ($isKnown) {
            echo "Hello there ".$_POST['name']."!";

        // If they aren't...
        } else {
            echo "I don't know you.";
        }
    }


?>

<form method="post"><!-- get is the default -->
    <p>What is your name?</p>
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>
