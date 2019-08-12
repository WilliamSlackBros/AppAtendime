<?php
class ConexaoSqlitePDO {
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
    $conexao = new PDO("sqlite:".self::$path.self::$database);
    return $conexao;
  }
  public function executeQuery($conexao,$query){
    foreach ($conexao->query($query) as $row) {
      self::$rspBanco[]= $row;
    }
    self::closeConexao($conexao);
    
  }
  public function executeSql($conexao,$query){
     try {
    $conexao->beginTransaction();
    $conexao->exec($query);
    $conexao->commit();
    self::closeConexao($conexao);
    self::$rspBanco= "Excutado com sucesso";
  } catch (\PDOException $e) {
       return $e->getMessage();
     }
  }
  public function closeConexao($conexao){
    $conexao=null;
  }
  public function resp(){
    return self::$rspBanco;
  }
}
?>
