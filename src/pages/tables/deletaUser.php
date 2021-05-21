<?php
    $conexao=mysqli_connect("localhost", "root", "", "NSolucoes");

    $id = $_GET["id"];
    
    mysqli_query($conexao, "
        DELETE FROM
            USERS
        WHERE
            ID = $id
    ");
?>
