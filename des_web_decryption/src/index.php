<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Client</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file"/>
        <br><br>
        <input type="file" name="key"/>
        <br><br>
        <button>Load file</button>
    </form>
</body>
</html>