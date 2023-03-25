<?php
    function dbconnection()
    {
        $conn = mysqli_connect("localhost","root","","example");
        return $conn;
    }
?>