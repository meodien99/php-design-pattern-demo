<?php
namespace Patterns\DataAccessObject;


abstract class BaseDAO {
    private $__connection;

    protected $_tableName;
    protected $_primaryKey;

    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'cron';


    public function __construct(){
        $this->__connectToDB(self::DB_USER, self::DB_PASS, self::DB_HOST, self::DB_DATABASE);
    }

    private function __connectToDB($user, $pass, $host, $database) {
        $this->__connection = mysql_connect($host, $user, $pass);
        mysql_select_db($database, $this->__connection);
    }

    public function fetch($value, $key = NULL){
        if(is_null($key)){
            $key = $this->_primaryKey;
        }

        $sql = "SELECT * FROM {$this->_tableName} WHERE {$key}='{$value}'";
        $results = mysql_query($sql, $this->__connection);

        $rows = array();

        while($result = mysql_fetch_array($results)) {
            $rows[] = $result;
        }

        return $rows;
    }

    public function update($keyedArray){
        $sql = "UPDATE {$this->_tableName} SET ";

        $updates = array();

        foreach ($keyedArray as $column => $value) {
            $updates[] = "{$column}='{$value}'";
        }

        $sql .= implode(',', $updates);
        $sql .= " WHERE {$this->_primaryKey}='{$keyedArray[$this->_primaryKey]}'";

        mysql_query($sql, $this->__connection);
    }
} 