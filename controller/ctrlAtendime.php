<?php
require_once("../model/Crud.php");

class TabAtedimento extends Crud
{
private static $arrayDados = array();

function __construct()
{

}
function getDadosAtendime(){
  self::$arrayDados[] =parent::execQuery('SQLITE_PDO',"select * from atendimentos where  substr(DT_ATE,1,2)= strftime('%d', date('now','-1 day')) order by DT_ATE desc");
  return json_encode(self::$arrayDados[0]);
}
function setDadosAtendimeInsert($arrayDadosEnviados){

 $Nr_func_ate = "'".$arrayDadosEnviados['Nr_func_ate']."'";
 $Nm_func_ate =  "'".$arrayDadosEnviados['Nm_func_ate']."'";
 $matricula= "'".$arrayDadosEnviados['matricula']."'";
 $NomeFunc= "'".$arrayDadosEnviados['NomeFunc']."'";
 $Estacao = "'".$arrayDadosEnviados['Estacao']."'";
 $Ip = "'".$arrayDadosEnviados['Ip']."'";
 $Setor= "'".$arrayDadosEnviados['Setor']."'";
 $Funcao= "'".$arrayDadosEnviados['Funcao']."'";
 $Ramal= "'".$arrayDadosEnviados['Ramal']."'";
 $Problema= "'".$arrayDadosEnviados['Problema']."'";
 $Solucao= "'".$arrayDadosEnviados['Solucao']."'";
 $startTempo= "'".$arrayDadosEnviados['startTempo']."'";
 $stopTempo= "'".$arrayDadosEnviados['stopTempo']."'";
 $dt_ate= "'".$arrayDadosEnviados['dt_ate']."'";

  $resp=parent::execQuery('SQLITE_PDO_SQL',"insert into ATENDIMENTOS(NR_FUNC_ATE, NM_FUNC_ATE,NR_MATRICULA,NM_FUNCIONARIO,NM_ESTACAO, NR_IP, NM_SETOR, NM_FUNCAO,NR_RAMAL,DS_PROBLEMAS,DS_SOLUCAO,DT_HR_INICIO,DT_HR_FIM,DT_ATE) values($Nr_func_ate, $Nm_func_ate,$matricula,$NomeFunc, $Estacao, $Ip, $Setor, $Funcao,$Ramal,$Problema, $Solucao, $startTempo, $stopTempo, $dt_ate)");
  return $resp;

}

}

$TabAtend = new TabAtedimento();

//print_r(getDadosAtendime());

if($_POST['funcAction']=='setDadosAtendimeInsert'){
print_r($TabAtend->setDadosAtendimeInsert($_POST['p_dados']));
unset($_POST['funcAction']);
}
if($_POST['funcAction']=='getTabDetalhe'){
print_r($TabAtend->getDadosAtendime());
unset($_POST['funcAction']);
}
?>
