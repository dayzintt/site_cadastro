<?php
session_start();
#echo $_SESSION['usuario_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Lead</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(95deg, rgb(76, 200, 238), rgba(255, 145, 0, 0.856));
        }
        .form-container{
            background-color: rgba(5, 0, 0, 0.7);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 50px;
            border-radius: 25px;
            color: white;
            width: 300px;
        }
        input, select{
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 15px;
        }
        .submit_bt{
            background-color: rgb(3, 92, 209);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        .submit_bt:hover{
            background-color: rgb(84, 154, 245);
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Cadastro de Lead</h1>
        <form action="processa_lead.php" method="POST">
            <input type="text" name="nome_cliente" placeholder="Nome do Cliente" required>
            <input type="number" name="idade" placeholder="Idade" required>
            <input type="text" name="origem_lead" placeholder="Como soube do plano?" required>
            <input type="hidden" name="id_atendente" value="<?php echo $_SESSION['usuario_id']; ?>">
            <!--<input type="hidden" name="id_atendente" value="1">  Certifique-se de que o valor aqui corresponde a um id válido na tabela usuarios -->
    
            <input class="submit_bt" type="submit" value="Cadastrar Lead">
        </form>
    </div>

</body>
</html>
