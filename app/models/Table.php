<?php
namespace models;
use core\abstracts\Model;


abstract class Table extends Model
{
    protected static $table_name;

    function select($join = "*", $columns = null, $where = null){
        return $this->db()->select(static::$table_name, $join, $columns, $where);
    }

    function get($join = "*", $columns = null, $where = null){
        return $this->db()->get(static::$table_name, $join, $columns, $where);
    }

    function insert($data){
        return $this->db()->insert(static::$table_name, $data);
    }

    function update($data, $where = null){
        return $this->db()->update(static::$table_name, $data, $where);
    }

    function delete($where = null){
        return $this->db()->delete(static::$table_name, $where);
    }

    function has($where = null){
        return $this->db()->has(static::$table_name, $where);
    }

    function getById($id){
        return$this->get("*", [
            "id" => $id
        ]);
    }
}