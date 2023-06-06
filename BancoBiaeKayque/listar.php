<script>
        function voltar()
        {
            location.href="index.html";
        }
    </script>
<?php
    include 'conecao.php';
    echo"<link rel='stylesheet' href='style.css'>";
    $listar = $comando->query("select * from TB_Teste");
    $Total = $listar->rowCount();

    if($Total > 0)
    {
        echo "<center>";
        echo "<table style ='border.2px solid rgb(0,0,0)'>";
        echo "<tr style ='border.2px solid rgb(0,0,0)'><th colspan=4 style='border:2px solid rgb(0,0,0);text-align:canter'>Dados Cadastrados</th></tr>";

        echo "<tr style ='border:2px solid rgb(0,0,0)'><th style='border:2px solid rgb(0,0,0);text-align:center'>Codigo</th><th style='border:2px solid rgb(0,0,0);text-align:center'>
        Nome</th><th style='border:2px solid rgb(0,0,0);text-align:center'>
        Senha</th><th style='border:2px solid rgb(0,0,0);text-align:center'>
        Sexo</th></tr>";

        while($linha = $listar->fetch(PDO::FETCH_ASSOC))
        {
               $vcodi = $linha['Codi_T'];    
               $vnom = $linha['Nome_T'];
               $vsenh = $linha['Senha_T'];
               $vsexo = $linha['Sexo_T'];

               echo "<tr style='border:2px solid rgb(0,0,0)'><td style='border:2px solid rgb(0,0,0);text
               align:center'>$vcodi</td>
               <td style='border:2px solid rgb(0,0,0);text
               align:center'>$vnom</td>
               <td style='border:2px solid rgb(0,0,0);text
               align:center'>$vsenh</td>
               <td style='border:2px solid rgb(0,0,0);text
               align:center'>$vsexo</td>";
        }
        echo"</table>";
        echo"</center>";
    }
       
    else
    {
        "<script language=javascript> window.alert('Não existe registros para exibir!!!');
        window.history.back(); </script>";
    }    

   echo"<br/><br/>";
   echo "<center>";

   echo "<input type='button' value='Menu' onclick='voltar()'/>";

   echo "</center>";
?>