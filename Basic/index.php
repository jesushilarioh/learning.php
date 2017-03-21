<?php
    // Variables
    $name = "Jesus Hilario";

    // Display $name variable
    echo $name;

    echo "<p>My name is $name</p>";

    $string1 = "<p>This is the first string ";
    $string2 = "This is the second Part.</p>";

    echo $string1." ".$string2;

    $myNumber = 54;

    $calculation = $myNumber + 31 / 97 + 4;

    echo "The result of the calculation is ".$calculation."<br>";

    $myArray = array("Jesus", "Hilario", "Hernandez");

    print_r($myArray);

    echo "<p>".$myArray[1]."</p>";

    $anotherArray[0] = "Jam";

    $anotherArray[1] = "Cross";

    $anotherArray[5] = "Grant";

    print_r($anotherArray);


    echo "<p>".sizeof($anotherArray)."</p>";

    for ($i = 10; $i >= 0; $i--) {
        echo $i." ";
    }

    echo "<br><br>";


    $family = array("Jesus", "Francesca", "Christina", "Hernandez");

    // foreach loop!!!
    foreach($family as $key => $value) {
        $family[$key] = $value." Grand";
        echo "<p>".$value."</p>";
    }

    print_r($family);

    for($i = 0; $i < sizeof($family); $i++) {
        echo "<p>".$family[$i]."</p>";
    }

    echo "<br><br>";

    print_r($_GET);



?>
