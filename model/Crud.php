<?php
require_once("../model/ConexaoSqlitePDO.php");
require_once("../model/ConexaoOraclePDO.php");

class Crud{
  public function __construct(){
  }
  public function execQuery($NomeConexao,$query){
    self::isVulneravel($query);

    switch (strtoupper($NomeConexao)) {

      case 'SQLITE_PDO':
      $cx = new ConexaoSqlitePDO("sqlite.db","../bds/",null,null);
      if($cx->openConexao()){
        $cx->executeQuery($cx->openConexao(),$query);
      };
      if(!is_null($cx->resp())) {
        return $cx->resp();
      }else{
        echo "Erro de conexão Sqlite PDO";
      }
      break;
      case 'SQLITE_PDO_SQL':
      $cx = new ConexaoSqlitePDO("sqlite.db","../bds/",null,null);
      if($cx->openConexao()){
        $cx->executeSql($cx->openConexao(),$query);
      };
      if(!is_null($cx->resp())) {
        return $cx->resp();
      }else{
        echo "Erro de conexão Sqlite PDO";
      }
      break;
      case 'ORACLE_PDO':
//    $cx = new ConexaoOraclePDO("xe","127.0.0.1:1521","SUE_SANTACASA","qwe123");
$cx = new ConexaoOraclePDO("xe","'127.0.0.1:1521","","");
      if($cx->openConexao()){
        $cx->executeQuery($cx->openConexao(),$query);
      };
      if(!is_null($cx->resp())) {
        return $cx->resp();
      }else{
        echo "Erro de conexão Oracle PDO";
      }
      break;
      case 'ORACLE_PDO_LOCAL':
//    $cx = new ConexaoOraclePDO("xe","127.0.0.1:1521","SUE_SANTACASA","qwe123");
$cx = new ConexaoOraclePDO("xe","127.0.0.1:1521","SUE_SANTACASA","qwe123");
      if($cx->openConexao()){
        $cx->executeQuery($cx->openConexao(),$query);
      };
      if(!is_null($cx->resp())) {
        return $cx->resp();
      }else{
        echo "Erro de conexão Oracle PDO";
      }
      break;
      default:
      echo "Defina a base de Dados com as configurações necessárias!";
      break;
    }
  }
  public function isVulneravel($query){
    $isNot = array(
      "/1=1/i"
    );
    foreach ($isNot as $regra) {
      $valid =   preg_match_all($regra,$query,$matches);
      if ($valid) {
        die("Erro de Violação da Query! => \"".$query."\"");
      }
    }
  }

}
/*
$o = new Crud();
$o->execQuery('sqlite','SELECT * from funcionarios');
*/
?>
