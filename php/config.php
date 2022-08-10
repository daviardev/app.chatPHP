<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'chat');

    if (!$conn) {
        echo "Conectado".mysqli_connect_error();
    }
?>