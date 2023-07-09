<?php include("db.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pozos petroleros</title>
    <!-- codigo de bootstrap para css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!--codigo de font awesome para los iconos -->
    <script src="https://kit.fontawesome.com/e81ba1abf4.js" crossorigin="anonymous"></script>

    <!--cogigo de plotyy para la grafica -->
    <script src="https://cdn.plot.ly/plotly-2.24.1.min.js" charset="utf-8"></script>

    <!--codigo de jquery -->
    <script src="librerias/code.jquery.com_jquery-3.7.0.min.js"></script>
    

</head>
<body>
    <center><h2>Informacion de pozos petroleros</h2></center>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="data_save.php" method="post">
                        <center><h5>FORMULARIO</h5></center><br>
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre del Pozo Petrolero" autofocus><br>
                        </div>
                        <div class="form-group">
                            <input type="number" name="valor" class="form-control" placeholder="Valor medido en PSI" autofocus> <br>
                        </div>
                        <div class="form-group">
                            <input type="date" name="fecha" class="form-control"> <br>
                        </div>
                        <center><input type="submit" class="btn btn-success btn-block" name="save_data" value="REGISTRAR"></center>

                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Valor (PSI)</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM pozos ORDER BY fecha";
                        $result_tasks = mysqli_query($conn,$query);
                        

                        while($row = mysqli_fetch_array($result_tasks)) { ?>
                            <tr>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['valor']; ?></td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td>
                                    <a href="data_edit.php?id=<?php echo $row['id'] ?>&amp;nombre=<?php echo $row['nombre'] ?>&amp;fecha=<?php echo $row['fecha'] ?>" class="btn btn-secondary">
                                        <i class="fa-sharp fa-solid fa-marker"></i>
                                    </a>
                                    <a href="data_delete.php?id=<?php echo $row['id'] ?>&amp;nombre=<?php echo $row['nombre'] ?>&amp;fecha=<?php echo $row['fecha'] ?>" class="btn btn-danger">
                                        <i class="fa-sharp fa-solid fa-trash"></i>
                                    </a>

                                </td>
                                
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><br><br>

    <!--Grafico-->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <center><h2><div class="panel panel-heading">
                        Graficas de pozos petroleros usando Plotly.js
                    </div></h2></center>
                    <div class="panel panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="cargaLineal"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!--codigo de bootstrap para javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <div id="footer" style="background-color: black">
            <center><font color="white"><p> &copy; 2023. Todos los derechos reservados para mi. Maracaibo Venezuela</p></font></center>
        </div>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#cargaLineal').load('lineal.php');
    });

</script>

