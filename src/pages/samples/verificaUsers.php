<?php
    $conexao=mysqli_connect("localhost", "root", "", "NSolucoes");
    session_start();

    $Username = $_POST["Username"];
    $Password = $_POST["Password"];

    $_SESSION["NameUser"] = $Username;

    $select = mysqli_query($conexao, "
        SELECT 
            nome
        FROM 
            USERS
        WHERE
            nome = '$Username' 
        AND
            senha = '$Password'
    ");

    $campo = mysqli_fetch_array($select);

    if($campo == NULL){
        
        $_SESSION["UserInvalido"] = true;
        
        header("location:login.html");
    }else{
        header("location:../../index.html");
    }
?>
