<?php 
    session_start();
    include 'conexao_pdo.php';

    $conn = getConnection();

    $nome = $_POST['nome'];
    $nome_upd = $_POST['nome_upd'];
    $email = $_POST['email'];
    $email_upd = $_POST['email_upd'];
    $senha = $_POST['senha'];
    $senha_upd = $_POST['senha_upd'];
    $adm = $_POST['admin'];

    $vet1 = array($nome, $email, $senha);
    $vet2 = array($nome_upd, $email_upd, $senha_upd);
    $result = array_diff($vet1, $vet2);

    $sql_consul = "SELECT count(email) FROM usuario WHERE email = '$email' and nome = '$nome' and senha = '$senha'"; 
    
    foreach ($conn->query($sql_consul) as $row) {
        if ($row['count(email)']==1){
            $cont = 0;
            foreach ($result as $diff) {
                $cont++;
                
                echo"<script language='javascript' type='text/javascript'>alert('$nome, dados atualizados com sucesso.');window.location.href='../index.php';</script>";

                if ($cont == 1){
                    if ($nome_upd == ""){
                        $nome_upd = $nome;
                    } else {
                        $sql_updnome = "UPDATE usuario set nome = :nome_upd WHERE email = :email and senha = :senha";
                        $sql = $sql_updnome;

                        $stmt = $conn -> prepare($sql);

                        $stmt -> bindParam(':email', $email);
                        $stmt -> bindParam(':senha', $senha);
                        $stmt -> bindParam(':nome_upd', $nome_upd);
                        $stmt -> execute();

                        $_SESSION["nome"] = $nome_upd;
                    }
                }
                
                if ($cont == 2) {
                    if ($email_upd == ""){
                        $email_upd = $email;
                    } else {
                        $sql_updemail = "UPDATE usuario set email = :email_upd WHERE email = :email and senha = :senha";
                        $sql = $sql_updemail;

                        $stmt = $conn -> prepare($sql);

                        $stmt -> bindParam(':email', $email);
                        $stmt -> bindParam(':senha', $senha);
                        $stmt -> bindParam(':email_upd', $email_upd);
                        $stmt -> execute();
                    }
                }
                
                if ($cont == 3) {
                    if ($senha_upd == ""){
                        $senha_upd = $senha;
                    } else {
                        $sql_updsenha = "UPDATE usuario set senha = :senha_upd WHERE email = :email and senha = :senha";
                        $sql = $sql_updsenha;

                        $stmt = $conn -> prepare($sql);

                        $stmt -> bindParam(':email', $email);
                        $stmt -> bindParam(':senha', $senha);
                        $stmt -> bindParam(':senha_upd', $senha_upd);
                        $stmt -> execute();
                    }
                }
            }
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('Desculpe, seu dados atuais estão incorretos.');javascript: history.go(-1);</script>";
        }
    }

    if ($adm == "true") {
        $adm = "true";
        $sql_adm = "UPDATE usuario set adm = :adm WHERE email = :email and senha = :senha";
        $sql = $sql_adm;

        $stmt = $conn -> prepare($sql);

        $stmt -> bindParam(':email', $email);
        $stmt -> bindParam(':senha', $senha);
        $stmt -> bindParam(':adm', $adm);
        $stmt -> execute();

        $_SESSION['Admin'] = true;
    } else {
        $adm = "false";
        $sql_adm = "UPDATE usuario set adm = :adm WHERE email = :email and senha = :senha";
        $sql = $sql_adm;

        $stmt = $conn -> prepare($sql);

        $stmt -> bindParam(':email', $email);
        $stmt -> bindParam(':senha', $senha);
        $stmt -> bindParam(':adm', $adm);
        $stmt -> execute();

        $_SESSION['Admin'] = false;  
    }
?>