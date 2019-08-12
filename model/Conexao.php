<?php
//namespace app\model;
//use \PDO;
class Conexao {//extends Test_drivers{
  private static $rspBanco;
  public function __construct($database,$path,$driver,$query,$usuario,$senha){
    switch(strtoupper($driver)){
      case 'SQLITEPDO':
      if(file_exists($path.$database)){
        $conexao = new PDO("sqlite:".$path.$database);
       foreach ($conexao->query($query) as $row) {
          self::$rspBanco[]= $row;
        }
      }else{
         self::$rspBanco="Erro de conexão Sqlite PDO";
      }
      break;
      case 'POSTGRESPDO':
      try{
        $ex = explode('/', $path);
        $path = $ex[count($ex)-1];
        $conexao = new PDO("pgsql:host=".$path.";  port=5432; dbname=".$database .";  user='".$usuario."'; password='".$senha."'");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($conexao) {
          return self::$rspBanco=$conexao->query($query);
        }else{
          return self::$rspBanco="Erro de conexão Postgres PDO";
        }
      }catch(PDOexception $error_conecta){

        die('Erro ao conectar </br>'.$error_conecta->getMessage());

      }
      break;
      case 'POSTGRESBASE':
    //  se for usar driver basico use   $arraylist  = parent::execQuery("POSTDriverBasico","SELECT * from actor"); somente, deviso a necessdade do pg_fetch_all
      $ex = explode('/', $path);
      $path = $ex[count($ex)-1];
      try{
        $conexao = pg_connect("host=".$path." port=5432 dbname=".$database." user=".$usuario." password=".$senha." ");
        if ($conexao) {
          self::$rspBanco=pg_query($conexao,$query);
         foreach (pg_fetch_all(self::$rspBanco) as $value) {
          $resp[]=$value;
          }
           return print_r(json_encode($resp));
        }else{
          return self::$rspBanco="Erro de conexão Postgres Base";
        }
      }catch(Exception  $error_conecta){

        die('Erro ao conectar </br>');

      }
      break;
      case 'ORACLEPDO':
      $ex = explode('/', $path);
      $path = $ex[count($ex)-1];
      try{
       $conexao = new PDO("oci:dbname=".$path."/".$database.";charset=utf8",$usuario,$senha);
        if ($conexao) {
          return self::$rspBanco=$conexao->query($query);
        }else{
          return self::$rspBanco="Erro de conexão Oracle PDO";
        }
      }catch(\Exception  $error_conecta){

        die('Erro ao conectar </br>'.$error_conecta->getMessage());

      }
      break;
      case 'ORACLEBASE':
      $ex = explode('/', $path);
      $path = $ex[count($ex)-1];
      try{
        $conexao =  oci_connect($usuario,$senha,$path."/".$database);
        if ($conexao) {
          $result = oci_parse($conexao, $query);
          oci_execute($result);
            while($row = oci_fetch_array($result, OCI_ASSOC+OCI_RETURN_LOBS)){//OCI_ASSOC+OCI_RETURN_NULLS
           foreach ($row as $item) {
             $resp[]=$item ;
           }
        }
            print json_encode($resp);
            oci_close($conexao);
        }else{
          return self::$rspBanco=oci_error();
        }
      }catch(\Exception  $error_conecta){

        die('Erro ao conectar </br>'.$error_conecta->getMessage());

      }
      break;
      default:
    }
  }
  public function getrspBanco(){
    return self::$rspBanco;
  }

}

//$teste = new Conexao($database,$path,$driver,$query,$usuario,$senha);
/*
echo "start</br>";
$teste = new Conexao("pagila","localhost","POSTGRESPDO","select * from actor","postgres","qwe123");
foreach ($teste->getrspBanco() as  $value) {
  print_r($value);
}
var_dump($teste);
*/
?>
