<?php
session_start();
$usuario_nome = $_SESSION['usuario_nome'];
if (!isset($_SESSION['usuario_id']) || $_SESSION['usuario_tipo'] != 'cadastrador') {
    header("Location: home_vendedor.php");
    
    
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">    
   
</head>
<body>
<a class = "sair" href= "login.html">Sair</a>
    <div class="content">
        <h1>Bem-vindo, <?php echo $_SESSION['usuario_nome']; ?>!</h1>
        <br><h2>Qual área deseja acessar?<h2>

    </div>
    <div class="navbar">
        <a href="boletos_config.php">Cadastrar Contrato</a>
        <a href="anuncios.php">Entrevista Qualificada</a>
        <a class = "sair" href= "login.html">sair</a>
        
    </div>

    <script>
        // Selecione o botão de Modo Escuro
        var botaoModoEscuro = document.getElementById('modoEscuro');

        // Adicione um ouvinte de evento de clique ao botão
        botaoModoEscuro.addEventListener('click', function() {
            // Se o body tiver a classe "dark-mode", remova-a; caso contrário, adicione-a
            document.body.classList.toggle('dark-mode');
        });
    </script>
</body>
</html>