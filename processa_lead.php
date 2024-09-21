<?php
include('configs.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_cliente = $_POST['nome_cliente'];
    $idade = $_POST['idade'];
    $origem_lead = $_POST['origem_lead'];
    $id_atendente = $_POST['id_atendente'];

    // Verifica se o atendente com o ID fornecido existe
    $stmt = $conex->prepare("SELECT id FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id_atendente);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Atendente existe, então insira o lead
        $stmt->close();
        
        $sql = "INSERT INTO leads_contratos (nome_cliente, idade, origem_lead, estado_lead, id_atendente) VALUES (?, ?, ?, 'novo', ?)";
        $stmt = $conex->prepare($sql);
        $stmt->bind_param("sisi", $nome_cliente, $idade, $origem_lead, $id_atendente);

        if ($stmt->execute()) {
            echo "Lead cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar lead: " . $stmt->error;
        }
    } else {
        echo "Atendente não encontrado.";
    }

    $stmt->close();
    $conex->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href = "home.php">voltar</a>
</body>
</html>
