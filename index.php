<?php
    session_start();
    if(isset($_GET['rut']) && ($_GET['pass'])) {
        $rut = $_GET["rut"];
        $pass   = $_GET["pass"];


        include_once 'conexion_pdo.php';
        $objeto = new Conexion();
        $conexion = $objeto->Conectar();    
        
        $consulta = "SELECT * FROM cuenta WHERE rut = '$rut'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $credenciales=$resultado->fetchAll(PDO::FETCH_ASSOC);
            
            
        //print_r($credenciales[0]);
        //$rut = $credenciales['rut'];
            

        //verificando si la contraseña es correcta
        if($pass = $credenciales[0]['passw']){
            $_SESSION['login'] = $rut;
            $url = "menu.php";
            header('Location: ' . $url);
            
        }else{
            echo "a";
        }

        //$rut = $credenciales[0]['rut'];
        //$pass = $credenciales[0]['password'];
        //$permiso = $credenciales[0]['permiso'];
        //Login
            

            
    }
?>

<!DOCTYPE html>
<head>
    
    <title>loginnt</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <!--cuadro de --> 
    <form action="" method="$_POST">
        <h2>Iniciar sesión</h2>
        <input type="text" placeholder="&#128273; rut" name="rut" required>
        <input type="password" placeholder="&#128274; password" name="pass" required>
        <input type="submit" value="Ingresar" name="btningresar">
    </form>

	
    
</body>
</html>