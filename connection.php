<?php

    $database= new mysqli("localhost","root","mhsb3","abc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>