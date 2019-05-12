<?php
require_once 'autoload.php';


//$file = new File();

$file = new Files\File();
$csvR = new Files\Csv\Read();
$csvW = new Files\Csv\Write();
$xmlR = new Files\Xml\Read();
$xmlW = new Files\Xml\Write();
