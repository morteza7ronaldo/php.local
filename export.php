<?php
require_once "oop/calsses/htmlExport.php";
require_once "oop/calsses/jasonExport.php";
require_once "oop/calsses/xmlExport.php";
$export = "html";
$handler= $export.'Export';
$handlerObject = new $handler;

class exportHndler {
    public function doExport (canExport $handler)
    {
        $handler -> export();
    }
}
$object = new exportHndler();
$object -> doExport($handlerObject);
