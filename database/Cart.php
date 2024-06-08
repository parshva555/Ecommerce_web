<?php

namespace database;
// php cart class
class Cart
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }
    //insert into cart table
    public function insertIntoCart($params = null, $table = "cart"){
        if($this->db->con!=null){
            if($params !=null){
                //"insert into cart(user_id) values (0)"
                //get cart columns
                $columns = implode(',',array_keys($params));
                print_r($columns);
                $values  = implode(',',array_values($params));
                print_r($values);


            }
        }
    }
}