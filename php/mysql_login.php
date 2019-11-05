<?php 
    session_start();
    include 'conexao_pdo.php';
    
    $conn = getConnection();

    $nome_log = $_POST['nome_log'];
    $email_log = $_POST['email_log'];
    $senha_log = $_POST['senha_log'];

    $sql_login = "SELECT count(email), adm FROM usuario WHERE email = '$email_log' and nome = '$nome_log' and senha = '$senha_log'";

    foreach ($conn->query($sql_login) as $row) {
        if ($row['count(email)'] == 1){
            $_SESSION['nome'] = $nome_log;
			$_SESSION['email'] = $email_log;	
            $_SESSION['senha'] = $senha_log;
            $_SESSION['Logged'] = true;
            foreach ($conn->query($sql_login) as $row) {
                if ($row['adm'] == "true"){
                    $_SESSION["Admin"] = true;
                } else {
                    $_SESSION["Admin"] = false;
                }
            }
			echo "<script>window.location='../index.php' ;alert('Bem vindo(a) $nome_log!');</script>";
        } else {
            unset ($_SESSION['nome']);
			unset ($_SESSION['email']);
			unset ($_SESSION['senha']);
            echo"<script language='javascript' type='text/javascript'>alert('Desculpe, seu usuário não está cadastrado.');javascript: history.go(-1);</script>";
        }
    }
?>