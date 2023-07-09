<?php

include("db.php");        


if(isset($_POST['save_data'])){
    $nombre = $_POST['nombre'];
    $valor = $_POST['valor'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO pozos(nombre, valor, fecha) VALUES('$nombre','$valor','$fecha')";

    $result = mysqli_query($conn,$query);

    if (!$result) {
        die("El Query valio burger");
    }
    else{
        $query = "SELECT nombre FROM pozos GROUP BY nombre ORDER BY fecha";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $nombre2 = $row['nombre'];
            $rownumber = mysqli_num_rows($result);

            for($x=0;$x<$rownumber;$x=$x+1){
                if($nombre==$nombre2[$x]){
                    $query = "INSERT INTO $nombre(valor,fecha) VALUES('$valor','$fecha')";
                    mysqli_query($conn,$query);
                    $x=$rownumber+1;
                }
                else{
                    if($x==$rownumber-1){
                        $query = "CREATE TABLE IF NOT EXISTS $nombre (id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT, valor DECIMAL(8,2), fecha DATE)";
                        mysqli_query($conn,$query);

                        $query = "INSERT INTO $nombre(valor,fecha) VALUES('$valor','$fecha')";
                        mysqli_query($conn,$query);
                    }
                    
                }
                
            }
        }
        header("Location: index.php"); //esto es para redireccionarlo a la pagina inicial de nuevo
    }

    
}
?>