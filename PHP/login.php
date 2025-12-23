<?php 
//Inicia o código da sessão
session_start();

//Cria as variáveis que vão conectar ao banco de dados
$servidor = "localhost";
$usuario = "root";
$senha_bd = "";
$banco = "cadastro";

//Cria a variável que faz a conexão com o banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha_bd, $banco);

//Testa a conexão com o banco
if(!$conexao){
    die("Erro de conexão". mysqli_connect_error());
}

//Pega informações do formulário
$email = trim($_POST['email']);
$senha = $_POST['senha'];

//Pega o email do banco de dados
$sql = "SELECT * FROM usuarios_cadastrado WHERE email = '$email'";

$resultado = mysqli_query($conexao, $sql);

//Verifica se encontrou o dado
if(mysqli_num_rows($resultado) == 1){
    //Transforma o usuário em um array com as informações do banco de dados
    $usuario = mysqli_fetch_assoc($resultado);

    //Verifica se a senha está certa
    if(password_verify($senha, $usuario['senha'])){
        //Cria a sessão que fala que o usuário está logado
        $_SESSION['id_usuario'] = $usuario['id'];
        $_SESSION['nome_usuario'] = $usuario['nome'];

        header("Location: perfil.php");
        exit;
    }else{
        echo"
        <script>
            alert('Senha incorreta');
            window.location.href = '../HTML/entrar.html';
        </script>
        ";
    }
}else{
    echo "
    <script>
        alert('Usuário não registrado');
        window.location.href = '../HTML/entrar.html';
    </script>
    ";
}
mysqli_close($conexao);
?>