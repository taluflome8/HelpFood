<?php

/*
	Como de constume, um arquivo chamado "conexao.php" fica encarregado
	de processar as instuções de conexao com o servidor , bem como o banco
	de dados
*/

    function getConnection(){
        /*criamos a variavel $dsn (data source name) onde guarda as informações
        do servidor e nome do banco de dados
        */
        $dsn = 'mysql:host=localhost;dbname=form';
        $user = 'tarike';
        $password = 'AH05fpCk6jWYzBNW';

        try {
            // criado o objeto da classe PDO e recebe como parametro os valores passados antes.
            $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            echo "<script language='javascript' type='text/javascript'>console.log('Sucesso ao conectar!')</script>";
        } catch (PDOExeption $exe){
            echo 'Error: '. $exe->getMessage();
            return false;
        }
        /* 
            nesse caso ele retorna o objeto criado na função. Iremos utiliza-lo nos arquivos para as eventuais manipulações ao banco.
        */
        return $pdo;
    }
    getConnection();

    function Logged(){
        if (!isset($_SESSION['Logged']) || $_SESSION['Logged'] !== true)
        {
            return false;
        }
    
        return true;
    }

    function Admin(){
        if (!isset($_SESSION['Admin']) || $_SESSION['Admin'] !== true)
        {
            return false;
        }
    
        return true;
    }
?>