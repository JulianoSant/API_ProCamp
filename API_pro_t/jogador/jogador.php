<?php

include_once("../conexao.php");

$dados = array();

//$query = $pdo->query("SELECT * from cadastroaluno");
//$res = $query->fetchAll(PDO::FETCH_ASSOC);
//$pdo = null;

$sql = "Select * from cadastroaluno ";
$rs = $conexao->query($sql);
$list = $rs->fetchAll(PDO::FETCH_ASSOC);
$conexao = null;

for ($i=0; $i < count($list); $i++) {
    foreach ($list[$i] as $key => $value) {}

    $dados = $list;
}

echo ($list) ?
json_encode(array("code" => 1, "result"=>$dados)) :
json_encode(array("code" => 0, message=>"Dados nao encontrados!"))

?>