<?php
/**
 * Created by PhpStorm.
 * User: madcat
 * Date: 11/6/14
 * Time: 11:07 AM
 */

namespace Patterns\DataAccessObject;


class UserDAO extends BaseDAO{
    protected $_tableName = 'userTable';
    protected $_primaryKey = 'id';

    public function getUserByFirstName($name){
        $result = $this->fetch($name, 'firstName');

        return $result;
    }
} 