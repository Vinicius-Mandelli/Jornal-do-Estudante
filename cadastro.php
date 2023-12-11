<?php
$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$conn = new mysqli($host, $usuario, $senha, $database);

if($conn->connect_error){
    die("Falha na conexao: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (nome, email, senha)
VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sql) === TRUE){
    echo "Dados inseridos com sucesso!<p><a href=\"login.php\">entrar</a></p>";
}else{
    echo "Erro ao inserir dados: " .$conn->error;
}

$conn->close();
?>