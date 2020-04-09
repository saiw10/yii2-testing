<?php // namespace frontend\tests;

use common\models\LoginForm;
use common\fixtures\UserFixture;

class LoginTest extends \Codeception\Test\Unit
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
    public function testLogin()
    {
        $model = new LoginForm([
            'username' => 'sai',
            'password' => '123456',
        ]);
        
        $this->assertTrue($model->login());
    }
}