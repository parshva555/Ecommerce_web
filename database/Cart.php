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
                $values  = implode(',',array_values($params));
                // creating sql query
                $query_string  = sprintf("INSERT INTO %s(%s) VALUES (%s)", $table, $columns, $values);
                //insert value in cart table
                $result = $this->db->con->query($query_string);
                return $result;
            }
            // to get user id and item id and insert into cart table
        }
    }
    public  function addToCart($userid, $itemid){
        if (isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            // insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result){
                // Reload Page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

}