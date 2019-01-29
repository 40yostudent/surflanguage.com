<?php

    $dir = 'sqlite:translations.db';
    $db  = new PDO($dir) or die("UNABLE TO OPEN THE DATABASE");
    $query = 'SELECT key, '.($_GET['lang'] ? $_GET['lang'] : 'en' ).' FROM translations';

    $strings = [];

    foreach ($db -> query($query) as $column) {
        $strings[$column[0]] = $column[1];
    }

    // ECHOES A SINGLE STRING FOR THE GIVEN LANGUAGE
    // echo $strings["homepage-maintitle"];

    // ECHOES ALL DATABASE VALUES FOR GIVEN LANGUAGE
    // foreach ($strings as $key => $value) {
    //     echo $key.' ---------- '.$value;
    //     echo '<br>';
    //     echo '<br>';
    // }

    $db = null; // close PDO connection

?>
