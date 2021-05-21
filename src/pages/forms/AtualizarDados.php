<?php
    $conexao=mysqli_connect("localhost", "root", "", "NSolucoes");
    session_start();
 
    $id = $_POST["hdnID"];
    $nome = $_POST["txtnome"];
    $Password = $_POST["pswPassword"];
    $CPF = $_POST["txtCPF"];
    $Email = $_POST["txtEmail"]; 
    $Telefone = $_POST["txtTelefone"];
    
    $alteracoes = '';
    if($nome != ''){
        $alteracoes = $alteracoes . "nome = '$nome',";
        $_SESSION["NameUser"] = $Username;
    }
    if($Password != ''){
        $alteracoes = $alteracoes . "senha = '$Password',";
    }
    if($CPF != ''){
        $alteracoes = $alteracoes . "CPF = '$CPF',";
    }
    if($Email != ''){
        $alteracoes = $alteracoes . "email = '$Email',";
    }
    if($Telefone != ''){
        $alteracoes = $alteracoes . "telefone = '$Telefone',";
    };

    $alteracoes = $alteracoes . "update_date = NOW()";
    
    $_SESSION["NameUser"] = $nome;

    mysqli_query($conexao, "
        UPDATE 
            USERS
        SET
            $alteracoes
        WHERE
            id = $id 
    ");

    header("location: atualizaDados.html?cockpit=0&Ticket=$id")
?>
