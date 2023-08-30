<?php
session_start();
require_once("Php/Repository/UsuarioRepository.php");
$login=$_POST["email"];
$senha=$_POST["password"];
$valido = UsuarioValido($login, $senha);
$result = mysqli_fetch_array($valido);
if ($result["Total"] > 0)
{
$_SESSION["email"] = $result["Email"];
header("location: index.php");
}
else
{
echo "<h1>Não foi possível fazer login porque o usuário não foi encontrado.</h1>";
echo "<a href='javascript:history.go(-1)'>Voltar</a>";
}
?>