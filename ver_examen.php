
<!DOCTYPE html>
<html>
<head>
	<title>ver examen</title>
	<style>
        .buscador{
            margin-bottom: 20px;
        }
	</style>
</head>
<body>
    <form action="" method="GET" class="buscador">
            <label for="exam_id">id</label>
            <input type="text" name="exam_id" class="buscador">
            <br>
            <button type="submit">Buscar</button>
            
            
    </form>

	<?php
        
        if(isset($_GET['exam_id'])){




            $exam_id = $_GET['exam_id'];
            
            include_once 'conexion_pdo.php';
            $objeto = new Conexion();
            $conexion = $objeto->Conectar();
            
            $consulta = "SELECT * FROM examen WHERE id = $exam_id";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $examens=$resultado->fetchAll(PDO::FETCH_ASSOC);

            foreach($examens as $examen){
                $id_exa = $examen['id'];
                $url_exa = $examen['examen_url'];
                $rut_exa = $examen['cliente_rut'];
                $info_exa = $examen['info'];
                print_r($examen);
            }

        }
    
    ?>

    
    
        

        <div class="ventana">

            <div class="alb">
                <img src="examenes/<?=$url_exa?>" style="max-width: 250px; max-height:250px">
            </div>
        </div>

        
</body>
</html>