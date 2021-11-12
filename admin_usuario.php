
<html>

<head>
<meta charset="UTF-8">
<title>Registrar</title>

</head>

<body>
    <h2>Ingresar cuenta</h2>
    <form action="" method="POST">

        <ul>
            <li>
                <label for="rut">rut</label>
                <input type="text" name="rut">
            </li>
            <li>
                <label for="contrasena">contrasena</label>
                <input type="text" name="contrasena">
            </li>
            <li>
                <label for="privg">privg</label>
                <input type="text" name="privg">
            </li>
        </ul>
        <input type="submit" name="submit" value="Subir">
    </form>

    
<?php
    if(isset($_POST['submit'])){
        $rut = $_POST["rut"];
        $contrasena   = $_POST["contrasena"];
        $privg = $_POST["privg"];
        
        
        include_once 'conexion_pdo.php';
        $objeto = new Conexion();
        $conexion = $objeto->Conectar();

        

        $data = [
            'rut' => $rut,
            'passw' => $contrasena,
            'permiso' => $privg,
        ];
    
        $consulta = "INSERT INTO cuenta (rut, passw, permiso) VALUES (:rut, :passw, :permiso)";
        $stmt= $conexion->prepare($consulta);
        $stmt->execute($data);

        echo "BRIGIDOOOOOOO";



    }else{
        echo "completa toa la wea";
    }
    

    


    

    
?>
</body>
</html>