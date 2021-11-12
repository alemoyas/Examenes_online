
<?php
    session_start();
    $rut = $_SESSION['login'];
    //echo ($rut);
?>
<!DOCTYPE html>
<html>
<head>
	<title>eleccion</title>
	<style>
	</style>
</head>
<body>
    <a href="ver_lista_exa.php">ver examen por rut (lista)</a>
    <p>      </p>
    <a href="admin_index.php">admin</a>
    
</body>
</html>