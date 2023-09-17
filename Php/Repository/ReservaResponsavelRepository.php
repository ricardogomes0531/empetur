<?php
require_once("DataBase.php");

$database = new DataBase();
$conn = $database->connect();

function Inserir($nome, $telefone, $email, $nacionalidade, $estadoCivil, $rg, $cpf, $orgaoExpedidor, $profissao, $logradouro, $numero, $bairro, $cidade, $cep, $complemento, $uf)
{

$sqlEndereco= "insert into reserva_endereco(logradouro, numero, cidade, bairro, uf, cep, complemento) 
values('".$logradouro."', '".$numero."', '".$cidade."', '".$bairro."', '".$uf."', '".$cep."', '".$complemento."')";
mysqli_query($GLOBALS["conn"],$sqlEndereco);

$enderecoId = mysqli_insert_id($GLOBALS["conn"]);
$sql = "insert into reserva_responsavel(nome, telefone, email, nacionalidade, estado_civil, identidade, cpf, endereco_id, profissao, date_created, date_modified, date_removed, orgao_emissor) 
values('".$nome."', '".$telefone."', '".$email."', '".$nacionalidade."', '".$estadoCivil."', '".$rg."', '".$cpf."', ".$enderecoId.", '".$profissao."', now(), now(), null, '".$orgaoExpedidor."')";

if (mysqli_query($GLOBALS["conn"],$sql) > 0)
{
return true;
}
return false;
mysqli_close($GLOBALS["conn"]);

}

?>