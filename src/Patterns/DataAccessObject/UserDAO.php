<?php
/**
 * Created by PhpStorm.
 * User: madcat
 * Date: 11/6/14
 * Time: 11:07 AM
 */

namespace Patterns\DataAccessObject;


class UserDAO extends BaseDAO{
    protected $_tableName = 'users';
    protected $_primaryKey = 'id';

    public function getUserByUserName($name){
        $result = $this->fetch($name, 'username');

        return $result;
    }
} 