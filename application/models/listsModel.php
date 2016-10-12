<?php
namespace application\models;

use core\lib\model;

class listsModel extends model
{
    private $table = 'send';

    public function add_lists($data)
    {
    	return $this->insert($this->table,$data);

    }
}