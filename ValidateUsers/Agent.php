<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?php
    session_start();
    echo"Welcome".$_SESSION["username"];
    echo "Welcome" . $_SESSION["leader"];
    

    ?>
    
    <a href="Form.php">LEAD FORM</a>

</body>
</html>