<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "references.php" ?>
</head>
<body>
    
    <?php include "header_admin.php"; ?>

    <?php 
    //PASSO 1: incluir as configurações de acesso a BDA 
    include "conexao_bd.php"; 
    //PASSO 2: Capturar os valores digitados
    $login_usuario = $_POST["txtLoginUsuario"];
    $senha_usuario = $_POST["txtSenhaUsuario"];
    $hash = password_hash($senha_usuario,1);
    //PASSO 3: Montar o comando SQL
    $sql = "INSERT INTO usuario(login_usuario,senha_usuario) ";
    $sql .= "VALUES('$login_usuario','$hash')";
    //PASSO 4: Executar no BDA
    if (executarComando($sql))
    {
        echo "<h1>Usuario adicionado!";
    }
    else
    {
        echo "<h1>Erro!</h1>";
    }
    

    ?>

    <?php include "footer_admin.php"; ?>

</body>
</html>