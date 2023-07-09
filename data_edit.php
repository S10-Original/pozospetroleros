<?php
    include("db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM pozos WHERE id = $id";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $valor = $row['valor'];
            $fecha = $row['fecha'];
        }
    }

    if (isset($_POST['update'])){
        $id = $_GET['id'];
        $fechaRef = $_GET['fecha'];
        $nombre = $_POST['nombre'];
        $valor = $_POST['valor'];
        $fecha = $_POST['fecha'];

        $query = "UPDATE pozos set nombre = '$nombre', valor = '$valor', fecha = '$fecha' WHERE id = $id";
        mysqli_query($conn,$query);

        $query2 = "UPDATE $nombre set valor = '$valor', fecha = '$fecha' WHERE fecha = '$fechaRef'";
        mysqli_query($conn,$query2);
        header("Location: index.php");

    }

?>

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
</head>
<body>
<div></div>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="data_edit.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <center><h5>FORMULARIO</h5></center><br>
                        <div class="form-group">
                            <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="update nombre"><br>
                        </div>
                        <div class="form-group">
                        <input type="number" name="valor" value="<?php echo $valor; ?>" class="form-control" placeholder="update valor"><br>
                        </div>
                        <div class="form-group">
                            <input type="date" name="fecha" value="<?php echo $fecha; ?>" class="form-control"><br>
                        </div>
                        <center><button class="btn btn-success" name="update">
                            Update
                        </button>
                        </center>

                    </form>

                </div>

            </div>

        </div>
    </div>
    




<!--codigo de bootstrap para javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>