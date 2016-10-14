<?php
namespace application\models;

use core\lib\model;

class userModel extends model
{
    /*
  * 查询所有数据
  */
    public function sel($table,$where="*"){
        $select= $this->select($table,$where);
        return $select;
    }
    /*
     * 添加
     */
    public function add($table,$arr){
        $add=$this->insert($table,$arr);
        return $add;
    }
    /*
     * 删除
     */
    public function del($table,$where){
        $del=$this->delete($table,$where);
        return $del;
    }
    /*
     * where多条件
     */
    public function where($table,$arr){
        $select= $this->select($table,"*",["AND" =>$arr]);
        //var_dump($select);die;
        return $select;
    }
    /*
     * where单挑件
     */
    public function getone($table,$arr){
        $one=$this->get($table,'*',$arr);
        return $one;
    }
}