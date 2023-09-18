<?php
require_once("DataBase.php");

$database = new DataBase();
$conn = $database->connect();


function PesquisarPorNome($nome)
{
$sql = "select * from reserva_responsavel where nome like '%".$nome."%'";
return mysqli_query($GLOBALS["conn"],$sql);
mysqli_close($GLOBALS["conn"]);
}



function Listar()
{
$sql = "select * from reserva_responsavel order by id desc limit 10";
return mysqli_query($GLOBALS["conn"],$sql);
mysqli_close($GLOBALS["conn"]);
}


function Inserir($tipo, $nome, $capacidade, $dimensao, $peDireito, $dependenciaId, $caucao, $situacao, $nome2, $descricao, $preco, $turno, $quantidade, $inativa)
{

$sql= "insert into reserva_area(tipo, nome, capacidade, dimensao, pe_direito, dependencia_id, caucao, inativa, vizualizar, date_created, date_modified, date_removed) 
values('".$tipo."', '".$nome."', ".$capacidade.", ".$dimensao.", ".$peDireito.", ".$dependenciaId.", ".$caucao.", ".$inativa.", 0, now(), now(), null)";
if (mysqli_query($GLOBALS["conn"],$sql) <=0 )
{
return false;
}

$areaId = mysqli_insert_id($GLOBALS["conn"]);
$sql2 = "insert into reserva_opcao(area_id, descricao, preco, turno, nome, quantidade, inativa) 
values(".$areaId.", '".$descricao."', ".$preco.", '".$turno."', '".$nome."', ".$quantidade.", ".$inativa.")";
if (mysqli_query($GLOBALS["conn"],$sql2) > 0)
{
return true;
}
return false;
mysqli_close($GLOBALS["conn"]);

}

?>