<?php 
$servidor = "localhost";
$usuario = "root";
$senha_bd = "";
$banco = "cadastro";

$conexao = mysqli_connect($servidor, $usuario, $senha_bd, $banco);

if(!$conexao){
    die("Erro de conexão: " . mysqli_connect_error());
}

$nome = $_POST['nome'] ?? '';
$email = trim($_POST['email']) ?? '';
$senha = $_POST['senha'] ?? '';

$sql_check = "SELECT id FROM usuarios_cadastrado WHERE email = '$email'";
$result_check = mysqli_query($conexao, $sql_check);

if (mysqli_num_rows($result_check) > 0) {
    echo "
    <script>
        alert('Este email já está cadastrado');
        window.location.href = '../HTML/cadastro.html';
    </script>
    ";
    exit;
}


$senha_segura = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios_cadastrado (nome, email, senha)
        VALUES ('$nome', '$email', '$senha_segura')";

if(mysqli_query($conexao, $sql)){
    echo "
    <script>
        alert('Cadastro realizado com sucesso, redirecionando para entrar com sua conta')
        window.location.href = '../HTML/entrar.html'
    </script>
    ";
}else{
    echo "Ocorreu um erro" . mysqli_error($conexao);
}

mysqli_close($conexao);
?>