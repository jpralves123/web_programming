<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "com222";

        //open connection to mysql db
        $connection = mysqli($servername, $username, $password, $dbname) or die("Error " . mysqli_error($connection));

        //fetch table rows from mysql db
        $sql = "select * from usuario";
        $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

        //create an array
        $emparray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $emparray[] = $row;
        }
        echo json_encode($emparray);

        //close the db connection
        mysqli_close($connection);
        ?>
    </body>
</html>
