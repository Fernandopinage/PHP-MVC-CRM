<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$retorna = ['sit' => true , 'msg' => '<div class="alert alert-warning" role="alert">Cadastrado com Sucesso</div>'];

var_dump($retorna);
echo json_decode($retorna);
?>