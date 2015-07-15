<?php

    //Connects to the database
    //
    //Assigns the server hosting the Database and the Database to the $dataSourceName variable
    $dataSourceName = 'mysql:host=localhost;dbname=laureate_in137';
    //Username and password of the Data base refrenced in the $dataSourceName variable
    $username = 'root';
    $password = 'root';
    //Create a new connection to database and store reference in $dbc
    $dbc = new PDO($dataSourceName, $username, $password);
    //PDO error reporting
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>