<?php  
 include  "$connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <form action=<?php echo $_SERVER["PHP_SELF"]  ?> method="post">
        <label for="">Class Name</label>
        <input name="class" type="text">
        <br>
        <label for="">Instractor</label>
        <input name="teacher" type="text">
        <br>
        <button>Save</button>
    </form>
    <?php 
    if($_SERVER["RECUEST_METHOD" === "POST"]){
        $name = $_POST["class"];
        $instractor = $_POST["teacher"];
    }
    ?>
</body>
</html>