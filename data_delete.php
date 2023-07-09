<?php

    include("db.php");

    if (isset($_GET['fecha'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM pozos WHERE id = $id";
        $result = mysqli_query($conn,$query);

        $nombre = $_GET['nombre'];
        $fecha = $_GET['fecha'];
        $query2 = "DELETE FROM $nombre WHERE fecha = '$fecha'";
        $result = mysqli_query($conn,$query2);
        if (!$result) {
            die("Query failed");
        }


        header("Location: index.php");
    }
    else
    echo "no paso el dato"


?>