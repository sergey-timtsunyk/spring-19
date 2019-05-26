<?php


namespace App\Model;


use Doctrine\ActiveRecord\Dao\EntityDao;

class Phone extends EntityDao
{
    protected $_tableName = 'phones';

    protected $_fieldMap = [
        'phone' => 'phone',
    ];

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }
}