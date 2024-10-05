<?php 

    function connection(){

        $con = new mysqli('localhost', 'root', '', 'cafelibrew');

        if($con->connect_error)
        {
            echo $con->connect_error;
        }
        else 
        {
            return $con;
        }
    }

?>
