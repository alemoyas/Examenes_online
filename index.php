<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando php</title>
    <style>
        body{
            display: flex;
            justify-contect: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh
        }
    </style>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" names="mi_Imagen">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>