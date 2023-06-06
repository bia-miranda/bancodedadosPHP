<?php
    include 'conecao.php';

    $cod = $_POST['txtcodi'];
    if ($cod != '') 
    {
        $pesq = $comando->query("select * from TB_Teste where codi_t='$cod'");
        $total_registros = $pesq->rowCount();
        if ($total_registros > 0)
            {
                $excluir = $comando->query("delete from TB_Teste where codi_t='$cod'");
                echo "<script language=javascript> window.alert('Registro excluído com sucesso');</script>";
            }    
        else
                echo "<script language=javascript> window.alert('Registro inexistente!');</script>";
     }
     else
        echo "<script language=javascript> window.alert('FDP, escolha um código da lista!');</script>";
    
    echo "<script language=javascript> location.href='deleta.php'; </script>";    
?>