<?php
session_start();
$usuario_nome = $_SESSION['usuario_nome'];

if (!isset($_SESSION['usuario_id']) || $_SESSION['usuario_tipo'] == 'atendente') {
    header("Location: home_atendente.php");
    
    
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
        

    <div class="content">
        <h1>Bem-vindo, <?php echo $_SESSION['usuario_nome']; ?>!</h1>
        <br><h2>Qual área deseja acessar?<h2>

    </div>
    <div class="navbar">
        <a href="boletos_config.php">Leads</a>
        <a href="anuncios.php">Propostas</a>
        <a class = "sair" href= "login.html">Sair</a>
        
        
    </div>

    
</body>
</html>