<?php
include('conecao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $senha = $_POST['senha'];

 
    $sql = "UPDATE TB_Teste SET nome_t = '$nome', sexo_t = '$sexo', senha_t = '$senha' WHERE codi_t = '$id'";

    if ($comando->query($sql) == true) {
        echo"Alterado com sucesso";
    } else {
        echo"Erro",$comando->errorCode();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Atualizar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Atualizar</h1>
    <form method="POST" action="">
        <label for="id">ID do registro:</label>
        <input type="number" name="id" required>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="senha">Senha:</label>
        <input type="senha" name="senha" required>

        
       <div>
       <label for="sexo">SEXO: </label>
        <input type="radio" name="sexo" id="" value="M" required>M
        <input type="radio" name="sexo" id="" value="F" required>F
        <input type="radio" name="sexo" id="" value="I" required>I
       </div>

        <input type="submit" value="Atualizar">

        
    </form>

    </form>
    <a href="index.html">Menu</a>
</body>
</html>

