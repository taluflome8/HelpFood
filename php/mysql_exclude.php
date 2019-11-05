<?php
    include_once '../pag/show.php';

    $conn = getConnection();

    $email_exc = $_GET['email'];

    $sql_del = "DELETE FROM usuario WHERE email = :email" or die();
    $sql = $sql_del;

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email_exc);
    $stmt->execute();

    $email = $_SESSION['email'];
    $nome = $_SESSION['nome'];

    if ($email_exc == $email){
        $_SESSION['Logged'] = false;
        session_destroy();
        
        echo"<script language='javascript' type='text/javascript'>window.location='../index.php' ;alert('$nome, seus dados foram destruídos.');</script>";                                                                                                            

    } else {
        echo"<script language='javascript' type='text/javascript'>alert('Os dados de $email_exc foram destruídos.');javascript: history.go(-1);</script>";                                                                                                            
    }
?>