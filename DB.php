<?php 
    class DB {

        function getConnection(){
            $host = "localhost";
            $user = "root";
            $pass = "";
            $DBname = "aeroporti"
            return mysqli_connect($host, $user, $pass, $DBname);
        }

    }
?>