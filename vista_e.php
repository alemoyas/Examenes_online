<?php include "db_conn.php"; ?>
<!DOCTYPE html>

<head>
    <title>Document</title>
</head>
<body>
    <?php 
    $sql = "SELECT examen_url FROM examen WHERE id = 1 ";
    $res = mysqli_query($conn,  $sql);
    $examen_imagen = mysqli_fetch_assoc($res)
    ?>

    <div class="alb">
        <img src="examenes/<?=$examen_imagen['examen_url']?>">
    </div>
</body>
</html>