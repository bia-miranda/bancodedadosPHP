<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Registros</title>
    <link rel="stylesheet" href="style.css">

    <script language="JavaScript">
        function Saindo() {
            location.href = "index.html";
        }
    </script>
</head>

<body>

    <form id="form1" method="post" action="deletar.php">
        <?php
            echo "<h2>Exclusão de Registros</h2>";
            echo "<p>";
            echo "Código do Registro a ser apagado&nbsp;";
            echo "<input type='text' name='txtcodi' id='txtcodi'/>&nbsp;&nbsp;";
            echo "<input type='submit' name='bt' id='bt' value='CONFIRMA'/>&nbsp;&nbsp;";
            echo "<input type='button' value='MENU' onclick='Saindo()'/>";
            echo "</p>";

            include 'conecao.php';

            $pesq = $comando->query("select * from TB_Teste");
            $total_registros = $pesq->rowCount();
            if ($total_registros > 0) 
            {
                echo "<center>";
                echo "<table style='border:2px solid rgb(0,0,0)'>";
                echo "<tr style='border:2px solid rgb(0,0,0)'><th colplan=4 style='border:2px solid rbg(0,0,0);
                        text-align:center'>Dados Cadastrados</th></tr>";
                echo "<tr style='border:2px solid rgb(0,0,0)'>
                    <th style='border:2px solid rgb(0,0,0); text-align:center'>Código</th>
                    <th style='border:2px solid rgb(0,0,0);text-align:center'>Nome</th>
                    <th style='border:2px solid rgb(0,0,0);text-align:center'>Senha</th>
                    <th style='border:2px solid rgb(0,0,0);text-align:center'>Sexo</th>
                        </tr>";
                while ($linha = $pesq->fetch(PDO::FETCH_ASSOC)) 
                {
                    $codigo = $linha['Codi_T'];
                    $nome = $linha['Nome_T'];
                    $senha = $linha['Senha_T'];
                    $sexo = $linha['Sexo_T'];

                    echo "<tr style='border:2px solid rgb(0,0,0)'>
                        <td style='border:2px solid rgb(0,0,0);text-align:center'>$codigo</td>
                        <td style='border:2px solid rgb(0,0,0);text-align:center'>$nome</td>
                        <td style='border:2px solid rgb(0,0,0);text-align:center'>$senha</td>
                        <td style='border:2px solid rgb(0,0,0);text-align:center'>$sexo</td>
                    </tr>";
                }
                echo "</table>";
                echo "</center>";
            } 
            else 
            {
                echo "<script language=javascript>window.alert('Não existem registros para excluir');window.history.back();<script>";
            }

            

        ?>


    </form>

</body>

</html>