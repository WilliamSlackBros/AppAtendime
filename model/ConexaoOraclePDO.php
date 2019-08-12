<?php
class ConexaoOraclePDO {
  private static $rspBanco;
  private static $database;
  private static $path;
  private static $driver;
  private static $usuario;
  private static $senha;
  public function __construct($database,$path,$usuario,$senha){
    self::$database=$database;
    self::$path=$path;
    self::$usuario=$usuario;
    self::$senha=$senha;
  }
  public function openConexao(){
    $conexao = new PDO("oci:dbname=".self::$path."/".self::$database.";charset=utf8",self::$usuario,self::$senha);
    return $conexao;
  }
  public function executeQuery($conexao,$query){
    $conexao->beginTransaction();
    foreach ($conexao->query($query) as $row) {
      self::$rspBanco[]= $row;
    }
    self::closeConexao($conexao);
  }
  public function closeConexao($conexao){
    $conexao=null;
  }
  public function resp(){
    return self::$rspBanco;
  }
}

?>
