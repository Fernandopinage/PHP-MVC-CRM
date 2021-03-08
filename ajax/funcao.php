<?php 

include_once "../class/classGrupoUsuario.php";
include_once "../dao/GrupoUsuarioDAO.php";



$cod = $_POST['codigo'];
$sigle = $_POST['sigla'];
$descricao = $_POST['descricao'];

$GrupoUsuario = new ClassGrupoUsuario();
$GrupoUsuario->setCod($cod);
$GrupoUsuario->setCod($sigle);
$GrupoUsuario->setCod($descricao);

$grupo = new ClassGrupoUsuarioDAO();
$grupo->insertGrupoUsuario($GrupoUsuario);

?>