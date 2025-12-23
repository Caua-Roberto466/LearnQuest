<?php 
session_start();

if(!isset($_SESSION['id_usuario'])){
    echo "
    <script>
        alert('Para acessar essa página você deve estar logado')
        window.location.href = '../HTML/entrar.html'
    </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cauã Roberto">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/perfil.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">  
    <title>Perfil</title>
</head>
<body>
    <header>
        <img src="../IMG/Logo-learnQuest.png" alt="" class="logo">
        <div class="navbar">
            <ul>
                <li><a href="#" class="nav-link">Escola Virtual</a></li>
                <li><a href="#" class="nav-link">Planos</a></li>
                <li><a href="#" class="nav-link">Sobre nós</a></li>
                <li><a href="#" class="nav-link">Contato</a></li>
                <li><a href="perfil.php" class="nav-link">Perfil</a></li>
                <li><a href="../HTML/entrar.html" class="nav-link">Entrar</a></li>
                <li><a href="../HTML/cadastro.html" class="nav-link">Cadastre-se</a></li>
            </ul>
        </div>
    </header>

    <h1>Veja seu perfil <?php echo $_SESSION['nome_usuario']?></h1>

    <footer>
        <div class="coluna">
            <img src="../IMG/Logo-learnQuest.png" class="logo" alt="">
            <div class="rede-social">
                <a href="#">@learnquest_oficial</a>
                <a href="#">@learnquestofc</a>
                <a href="#">@learnquest_insta</a>
                <a href="#">@learnquest11</a>
            </div>
            <p id="Copy">&copy; LearnQuest - Todos direitos reservados</p>
        </div>
        <div class="coluna">
            <div class="links">
                <h4>Links Rápidos</h4>
                <a href="cadastro.html" class="linkr">Cadastre-se</a>
                <a href="entrar.html" class="linkr">Entrar</a>
                <a href="../PHP/perfil.php" class="linkr">Perfil</a>
                <a href="#" class="linkr">Cotato</a>
                <a href="#" class="linkr">Sobre Nós</a>
                <a href="#" class="linkr">Planos</a>
                <a href="#" class="linkr">Escola Virtual</a>
                <a href="#" class="linkr">Estudo Inteligente</a>
            </div>
        </div>
        <div class="coluna">
            <div class="diretrizes">
                <h4>Diretrizes do Site</h4>
                <a href="#">Termos de Uso</a>
                <a href="#">Direitos e Obrigações</a>
                <a href="#">Política de privcacidade</a>
                <a href="#">Direito de imagem</a>
            </div>
        </div>
        <div class="coluna">
            <div class="contatos">
                <h4>Contatos</h4>
                <p class="p">learnquestoficial@gmil.com</p>
                <p class="p">+55 (11) 99876-1535</p>
                <p class="p">5005-9002</p>
                <p class="p">learnquest@outlook.com</p>
                <p class="p">suportelearnquest@gmail.com</p>
            </div>
        </div>
    </footer>
</body>
</html>