<?php

require_once("database.php");

if(isset($_GET['action']) && $_GET['action'] == 'login'){
    session_start();

    if($_REQUEST['password'] == 'wbfa' || $_REQUEST['password'] == 'WBFA'){

        $_SESSION["loggedIn"] = true;

        header("Location: index.php");
        die();
    } else {
        header("Location: login.php?error=1");
        die();
    }
}

if(isset($_GET['action']) && $_GET['action'] == 'logout'){
    session_start();

    session_destroy();

    header("Location: login.php");
}

if(isset($_GET['action']) && $_GET['action'] == 'confirm'){

    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $telefone = $_REQUEST["telefone"];

    if (isset($_POST['answer_yes'])) {
        $resposta = $_POST['answer_yes'];
    } else if (isset($_POST['answer_dontknow'])) {
        $resposta = $_POST['answer_dontknow'];
    } else if (isset($_POST['answer_not'])) {
        $resposta = $_POST['answer_not'];
    }

    $sql = "INSERT INTO confirm (nome, email, telefone, resposta)
              VALUES ('$nome', '$email', '$telefone', '$resposta')";

    if(execQuery($sql)){
        header("Location: index.php?error=2#confirme");
    } else {
        header("Location: index.php?error=1#confirme");
    }
}