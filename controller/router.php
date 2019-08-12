<?php
class router{
    private static $page;
    public function __construct($page){
        self::$page =$page.".php";
    }

    public function getPage(){
            return require_once(self::$page);
    }
}
?>
