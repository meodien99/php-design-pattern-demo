<?php
use Patterns\DataAccessObject\UserDAO;
class UserDAOTest extends PHPUnit_Framework_TestCase{

    /**
     * @var $user Patterns\DataAccessObject\UserDAO
     */
    protected $user;

    public function setUp(){
        $this->user = new UserDao();
    }

    public function testInstanceOf(){
        $this->assertInstanceOf('Patterns\DataAccessObject\UserDAO', $this->user);

        $this->assertInstanceOf('Patterns\DataAccessObject\BaseDAO', $this->user);
    }

    public function testFetchFunctionality(){
        $user = $this->user->fetch(1);

//        var_dump(count($user[0]));
    }

    public function testUpdateFunctionality(){
        $updates = array('id'=>1, 'username' => 'madcat2');

        $this->user->update($updates);

        $user = $this->user->getUserByUserName('madcat2');

//        var_dump($user);
    }
} 