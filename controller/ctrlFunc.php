<?php
/**
 *
 */
 require_once("../model/classTest.php");
 require_once("../model/Crud.php");

class TabFunc extends Crud
{
private static $arrayDados = array();
private static $arrayDadosFunc = array();
private static $arrayProblemas = array();
private static $arraySolucoes = array();
private static $arrayFuncOficina = array();
private static $matricula;
private static $nomefunc;
private static $setor;
private static $papel;

  function __construct()
  {

  }
function getTodosDadosFunc(){
//  if( sizeof(self::$arrayDados) <= 0){
    self::$arrayDados[] =parent::execQuery('ORACLE_PDO_LOCAL','select SGU.CD_USUARIO ,SGU.NM_USUARIO,SGU.DS_OBSERVACAO,SGU.RAMAL,SGU.CD_PAPEL from sys.funcionarios sgu order by 1 desc');
    die(var_dump(self::$arrayDados));
    return json_encode(self::$arrayDados[0]);
  //}

}
  function getMatriculas(){
    self::getTodosDadosFunc();
      foreach (self::$arrayDados[0] as $key => $value) {
        self::$matricula[] =  $value["CD_USUARIO"];
      }
      return json_encode(self::$matricula);
}

function getNomeFunc(){
    foreach (self::$arrayDados[0] as $key => $value) {
      self::$nomefunc[] =  $value["NM_USUARIO"];
    }
    return json_encode(self::$nomefunc);
}
function getDadosFunc($nrMatricula){
  self::$arrayDadosFunc=parent::execQuery('ORACLE_PDO_LOCAL',"select SGU.CD_USUARIO ,SGU.NM_USUARIO,SGU.DS_OBSERVACAO,SGU.RAMAL,SGU.CD_PAPEL from SYS.FUNCIONARIOS SGU where SGU.CD_USUARIO like upper('%".$nrMatricula."%')");
  return json_encode(self::$arrayDadosFunc[0]);

}
function getProblemas(){
  self::$arrayProblemas=parent::execQuery('SQLITE_PDO',"select ds_problemas from problemas");

  foreach (self::$arrayProblemas as $key => $value) {
    $problemas[]=$value["DS_PROBLEMAS"];
  }
  return json_encode($problemas);
}
function getSolucoes(){
  self::$arrayProblemas=parent::execQuery('SQLITE_PDO',"select DS_SOLUCAO from SOLUCOES;");

  foreach (self::$arrayProblemas as $key => $value) {
    $problemas[]=$value["DS_SOLUCAO"];
  }
  return json_encode($problemas);
}
function getNomesFuncsOficina(){
  self::$arrayFuncOficina=parent::execQuery('ORACLE_PDO_LOCAL',"select NM_USUARIO from SYS.FUNCIONARIOS where DS_OBSERVACAO like 'T%I%' AND SN_ATIVO='S'");

    foreach (self::$arrayFuncOficina as $key => $value) {
      $funcOficina[] =  $value["NM_USUARIO"];
    }

    return json_encode($funcOficina);
}

function getarrayDados(){
  var_dump(self::$arrayDados);
}
}


  $funcDados = new TabFunc();

if ($_GET['funcAction']=='getDadosFunc') {
  print_r($funcDados->getDadosFunc($_GET['nrMat']));
  unset($_GET['funcAction']);
  unset($_GET["nrMat"]);
}
if($_POST['funcAction']=='getMatriculas'){
print_r($funcDados->getMatriculas());
unset($_POST['funcAction']);
}
if($_POST['funcAction']=='getNomesFuncs'){
print_r($funcDados->getNomeFunc());
unset($_POST['funcAction']);
}
if($_POST['funcAction']=='getProblemas'){
print_r($funcDados->getProblemas());
unset($_POST['funcAction']);
}
if($_POST['funcAction']=='getSolucoes'){
print_r($funcDados->getSolucoes());
unset($_POST['funcAction']);
}
if($_POST['funcAction']=='getNomesFuncsOficina'){
print_r($funcDados->getNomesFuncsOficina());
unset($_POST['funcAction']);
}
?>
