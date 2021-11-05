<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>ver examen</title>
	<style>
	</style>
</head>
<body>
    <form action="" method="GET">
            <input type="text" name="exam_id" value="<?php if(isset($_GET['exam_id'])){echo $_GET['exam_id'];} ?>">
            <button type="submit"></button>
    </form>

	<?php
        if(isset($_GET['exam_id'])){
            $exam_id = $_GET['exam_id'];

            $sql = "SELECT * FROM examen WHERE id = $exam_id ";
            $res = mysqli_query($conn,  $sql);
            $examen_imagen = mysqli_fetch_assoc($res);
            
        }
    
    
    ?>

    
    
        

        <div class="ventana">

            <div class="alb">
                <img src="examenes/<?=$examen_imagen['examen_url']?>" style="max-width: 250px; max-height:250px">
            </div>
        </div>

        //listar examenes que sean acorde a el rut del pacienet
        <?php 
            foreach($res as $row)
            {
                ?>
                    <label for="">ID</label>
                    <input type="text" value="<?= $row['id']; ?>" class="form-control">
                
                    <label for="">IMAGE_URL</label>
                    <input type="text" value="<?= $row['examen_url']; ?>" class="form-control">

                <?php
            }
        ?>
</body>
</html>