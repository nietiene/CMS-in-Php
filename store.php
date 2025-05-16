<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tittle = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    $sql = "INSERT INTO posts(title, content) VALUES ('$tittle', '$content')";

    if (mysqli_query($conn, $sql)) {
        header("location:index.php");
        exit();
    } else {
        echo "ERROR:". mysqli_error();
    }
}

?>