<?php
    include ("../config/Conexion.php");
    
    $Id = $GET['Id'];
    $sql = "DELETE FROM productos WHERE IdProducto ='$Id'";

    $query = mysqli_query($conexion,$sql);
    if ($query === TRUE) {
        header("Location: ../Index.php");
    }
    ?>