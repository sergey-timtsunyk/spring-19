<?php
namespace App\Json;

use App\App\User;
use App\Xml\Read as XmlRead;
use App\Csv\Read as CsvRead;

class Write
{
    public function indexTest()
    {
        $jsonR = new Read();
        $xmlR = new XmlRead();
        $csvR = new CsvRead();

        $user = new User();
    }

    public function indexTest1()
    {
        $jsonR = new Read();
        $user = new User();
    }
}