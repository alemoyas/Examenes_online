<?php
include_once 'conexion_pdo.php';
include_once 'result_login.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM examen WHERE cliente_rut = '20243812-1'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$examen=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!--    Datatables  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
        <title></title>
        <style>
            table.dataTable thead {
                background: linear-gradient(to right, #0575E6, #00F260);
                color:white;
            }
        </style>  
        
    </head>
    <body>
        <h1 class="text-center">Datatables</h1>
        
        <h3 class="text-center">Consumiendo datos desde MySQL - PHP - Foreach</h3>
        
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="tablaExamen" class="table-striped table-bordered" style="width:100%">
                    <thead class="text-center">
                        <th>id</th>
                        <th>examen_url</th>
                        <th>cliente_rut</th>
                        <th>info</th>
                        
                    </thead>
                    <tbody>
                        <?php
                            foreach($examen as $examen){
                        ?>
                        <tr>
                            <td><?php echo $examen['id']?></td>
                            <td><?php echo $examen['examen_url']?></td>
                            <td><?php echo $examen['cliente_rut']?></td>
                            <td><?php echo $examen['info']?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div> 
        </div>
    
        

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        
    <!--    Datatables-->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
        
        
        <script>
        $(document).ready(function(){
            $('#tablaExamen').DataTable(); 
        });
        </script>
        
        
    </body>
</html>