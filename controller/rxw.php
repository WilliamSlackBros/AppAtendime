<?php
//namespace app\controller;
class rxw{
  private static $conteudo;
  function __construct(){
  }

  public function ler($arq){
    $path = str_replace("controller", "model",dirname(__FILE__));
    $pathArquivo =$path.'//'.$arq;
    $pathConfigBD = str_replace("//", "\\",$pathArquivo);
    self::$conteudo = file_get_contents($pathConfigBD);
    return json_decode(self::$conteudo);
  }
  public function escrever(){

  }
  public function criar(){

  }
  
}
 ?>
