<?php namespace frontend\tests;

use common\models\User;
use common\fixtures\UserFixture;

class UserTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */
    protected $tester;
    
    public function _fixtures()
    {
        return [
            'user' => [
                'class' => UserFixture::className(),
                'dataFile' => codecept_data_dir() . 'login_data.php',
            ],
        ];
    }
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testUsername()
    {
        $user = new User();

        $user->username = null;
        $this->assertNull($user->findByUsername($user->username));

        $user->username = 'toolooooongnaaaaaaameeee';
        $this->assertNull($user->findByUsername($user->username));

        $user->username = 'sai';
        $this->assertInstanceOf(User::class, $user->findByUsername($user->username));
    }
}