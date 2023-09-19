<?php
require_once("DataBase.php");

$database = new DataBase();
$conn = $database->connect();

function PesquisarPorNome($nome)
{
$sql = "select * from reserva_cliente c, reserva_endereco e where e.id=c.endereco_id and c.nome like '%".$nome."%'";
return mysqli_query($GLOBALS["conn"],$sql);
mysqli_close($GLOBALS["conn"]);
}



function Listar()
{
$sql = "select * from reserva_cliente c, reserva_endereco e where e.id=c.endereco_id order by c.id desc limit 10";
return mysqli_query($GLOBALS["conn"],$sql);
mysqli_close($GLOBALS["conn"]);
}

function Inserir($nome, $cnpj, $cpf, $razaoSocial, $tipo, $logradouro, $numero, $bairro, $cidade, $cep, $complemento, $uf)
{

$sqlEndereco= "insert into reserva_endereco(logradouro, numero, cidade, bairro, uf, cep, complemento) 
values('".$logradouro."', '".$numero."', '".$cidade."', '".$bairro."', '".$uf."', '".$cep."', '".$complemento."')";
mysqli_query($GLOBALS["conn"],$sqlEndereco);

$enderecoId = mysqli_insert_id($GLOBALS["conn"]);
$sql = "insert into reserva_cliente(nome, cnpj, cpf, razao_social, endereco_id, tipo_pessoa, nome_razao_social, date_created, date_modified, date_removed) 
values('".$nome."', '".$cnpj."', '".$cpf."', null, ".$enderecoId.", '".$tipo."', '".$razaoSocial."', now(), now(), null)";

//$sql = "insert into reserva_cliente(nome, cnpj, cpf, razao_social, endereco_id, tipo_pessoa, nome_razao_social, date_created, date_modified, date_removed) 
//values('teste', '123', '1234', 'teste', 111332, 'f', 'teste', now(), now(), now())";

if (mysqli_query($GLOBALS["conn"],$sql) > 0)
{
return true;
}
return false;
mysqli_close($GLOBALS["conn"]);




}

?>