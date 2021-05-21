<?php
    $conexao=mysqli_connect("localhost", "root", "", "NSolucoes");
    session_start();

    $Username = $_POST["Username"];
    $Password = $_POST["Password"];
    $CPF = $_POST["CPF"];
    $Email = $_POST["Email"];
    $Telefone = $_POST["Telefone"];
 
    $_SESSION["NameUser"] = $Username;

    mysqli_query($conexao, "
        INSERT INTO USERS(
            nome,
            senha,
            data_criacao,
            CPF,
            email,
            telefone
        )VALUES(
            '$Username',
            '$Password',
            NOW(),
            '$CPF',
            '$Email',
            '$Telefone'
        )
    ");

    header("location:../../index.html")
?>
