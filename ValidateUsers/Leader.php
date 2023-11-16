<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p></p>

    <h1> <?php
                        include("./conn.php");
                        session_start();
                        echo "Welcome " . $_SESSION["username"];
                        ?></h1>

    <?php
    $name = $_SESSION["username"];
    $query = "select * from leadform where leader_name='$name'";

    $result = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_assoc($result)) {
        echo " " . $data['agent_name']."<br>";
    }
    ?>
</body>

</html>