<?php
$conn=new mysqli("localhost","root","admin","vehicle");
                            if($conn->connect_error){
                           echo "Failed to connect!";
                           }
?>