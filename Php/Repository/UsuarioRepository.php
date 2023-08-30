<?php
require_once("DataBase.php");

$database = new DataBase();
$conn = $database->connect();

function Listar()
{
$sql = "select * from Usuarios";
return mysqli_query($GLOBALS["conn"],$sql);
mysqli_close($GLOBALS["conn"]);
}

function PesquisarPorNome($nome)
{
$sql = "select * from Usuarios where Nome like '%".$nome."%'";
return mysqli_query($GLOBALS["conn"],$sql);
mysqli_close($GLOBALS["conn"]);
}

function PesquisarPorEmail($email)
{
$sql = "select * from Usuarios where Email = '".$email."'";
return mysqli_query($GLOBALS["conn"],$sql);
mysqli_close($GLOBALS["conn"]);
}

function UsuarioValido($login, $senha)
{
$sql = "select count(Email) as Total, Email, Senha from Usuarios where Email='".$login."' and senha='".$senha."'";
return mysqli_query($GLOBALS["conn"],$sql);
mysqli_close($GLOBALS["conn"]);
}

function UsuarioAdmin($login)
{
$sql = "select Administrador from Usuarios where Email='".$login."'";
$query=mysqli_query($GLOBALS["conn"],$sql);
$result=mysqli_fetch_array($query);
if ($result["Administrador"] == "s")
{
return true;
}

return false;
mysqli_close($GLOBALS["conn"]);
}

?>