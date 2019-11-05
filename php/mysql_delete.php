<?php
    session_start();
    require 'conexao_pdo.php';
    include 'logout.php';

    $conn = getConnection();

    $sql_del = "DELETE FROM usuario WHERE email = :email";
    $sql = $sql_del;

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_SESSION['email']);
    $stmt->execute();

    echo"<script language='javascript' type='text/javascript'>alert('Seu dados foram destruídos.');javascript: history.go(-1);</script>";

    session_destroy();
    header('Location: ../index.php');                                                                                                               
?>