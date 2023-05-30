<?php
$conn=mysqli_connect("localhost","root","","studentprojec");
if(mysqli_connect_error()){
    echo "Erro to connect Database";
}else{
    return $conn;
}
?>