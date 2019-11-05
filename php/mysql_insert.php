<?php
session_start();
/*	arquivo "insere.php" insere dados na tabela
	atraves de declarações pdo
*/

//inclue o arquivo onde contem dados da conexão
include 'conexao_pdo.php';

//	nova variavel onde guarda o objeto criado na funcao getConnection()
$conn = getConnection();


// Aqui capturamos através do metodo POST os valores passado lá no formulario pelo "name=''", lembra?
$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

$tam_senha = strlen($senha);

if ($senha != $conf_senha or $tam_senha < 8 or $tam_senha > 10){
	echo"<script language='javascript' type='text/javascript'>alert('Desculpe, as senhas não estão coincidindo ou não estão no padrão estabelecido.');javascript: history.go(-1);</script>";
} else {
	//	Guardo na variavel $sql a minha consulta ao banco de dados com os place-holders
	$sql_insert = "INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)";	

	// nova variavel é criada recebendo os dados do objeto e do metodo "prepare"
	$stmt = $conn->prepare($sql_insert);

	
	/*	criamos uma variável que guarda o objeto "$conn". Como "stmt" agora é um objeto, então podemos
		também utilizar seus muitos metodos. um deles é o bindValue, onde podemos associar os valores de acordo com as posições que passamos com as interrogações.
	*/	
	$stmt->bindParam(':nome', $nome);		//Desse modo podemos chamar os métodos da classe. Uma delas é o bindValue
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':senha', $senha);

	$stmt->execute();
		
	echo"<script language='javascript' type='text/javascript'>alert('$nome, cadastro efetuado com sucesso. Faça login para acessar nosso conteúdo.');window.location.href='../pag/login.php';</script>";
}
exit;