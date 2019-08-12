<?php
spl_autoload_register(function ($class) {
  $classReduce = str_replace("app\\", "", $class);
  if (file_exists(dirname(__FILE__).'\\'.$classReduce.'.php')) {
    require_once(dirname(__FILE__).'\\'.$classReduce.'.php');
  }else{
    return false;
  }
});
spl_autoload_register();

?>
