<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "references.php" ?>
</head>
<body>
    <?php 
    //PASSO 1: incluir as config de BDA
    include "conexao_bd.php";
    //PASSO 2: Capturar o login e a senha
    $login_usuario = $_POST["txtLoginUsuario"];
    $senha_usuario = $_POST["txtSenhaUsuario"];
    //PASSO 3: Montar o comando SQL
    $sql = "SELECT * FROM usuario ";
    $sql .= "WHERE login_usuario = '$login_usuario'";
    //PASSO 4: Executar o comando BDA
    $dados = retornarDados($sql);
    if ($dados == 0)
    {
        echo "<h1>Usuario inexistente!</h1>";
    }
    else 
    {
        header("loation:index_admin.php");
    }
    ?>
    
</body>
</html>