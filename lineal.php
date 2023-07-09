<?php
    include("db.php");

    //trayendo los datos de los nombres primero
    $nombre = "SELECT nombre FROM pozos GROUP BY nombre ORDER BY fecha";
    $result = mysqli_query($conn,$nombre);
    $y = 0;
    while($row = mysqli_fetch_array($result))
    {
        $listaNombres[$y] = $row['nombre'];
        $y = $y+1;
    }
    $rownumber = mysqli_num_rows($result);
    
?>

<div id="graficaLineal"></div>

<script type="text/javascript">
    
    <?php
        for($x=0;$x<$rownumber;$x=$x+1){
            $nombreActual = $listaNombres[$x];
            

        $nombre = "SELECT valor,fecha FROM $nombreActual ORDER BY fecha";
        $result = mysqli_query($conn,$nombre);
        $valoresY=array(); //fecha
        $valoresX=array(); //valor

        while ($ver=mysqli_fetch_row($result)) {
            $valoresY[]=$ver[1];
            $valoresX[]=$ver[0];
        }

        $datosX=json_encode($valoresX);
        $datosY=json_encode($valoresY);
        
    
    ?>

    function crearCadenaLineal(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }

    datosX=crearCadenaLineal('<?php echo $datosX ?>');
    datosY=crearCadenaLineal('<?php echo $datosY ?>');

        var <?php echo $listaNombres[$x] ?> = {
        x: datosY,
        y: datosX,
        type: 'scatter'
        };

        var data = [<?php echo $listaNombres[$x] ?>];

        Plotly.newPlot('graficaLineal', data);
    

    
        <?php } ?>
</script>