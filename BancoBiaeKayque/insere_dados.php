<?php
include 'conecao.php';

$vnome=$_POST['txtnome'];
$vsenha=$_POST['txtsenha'];
$vsexo=$_POST['txtsexo'];


$incluir = $comando->query("insert into TB_Teste(Nome_T,Senha_T,Sexo_T) values('$vnome','$vsenha','$vsexo')");
echo "<script language='JavaScript'> alert('Dados cadastrados com sucesso') </script> ";
echo"<script language = 'JavaScript'>
function Saindo()
{
    location.href='index.html';
}
</script>";
echo "<input type='button' value='MENU' onclick='Saindo()'/>";

?>