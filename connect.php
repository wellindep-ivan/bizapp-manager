<?php

    $connection = mysqli_connect('mysql.wellerindependent.com', 'wellerindependen', 'QuFjC9FP');

    if(!$connection){
        die("Database Connection Failed" . mysqli_error($connection));
    }

    $select_db = mysqli_select_db($connection, 'wellerindependent_login');

    if(!$select_db){
        die("Database Selection Failed" . mysqli_error($select_db));
    }

?>