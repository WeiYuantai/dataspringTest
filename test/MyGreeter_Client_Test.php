<?php

namespace MyGreeter;

require_once '../MyGreeter/Client.php';

use PHPUnit\Framework\TestCase;

class MyGreeter_Client_Test extends TestCase
{
    private $greeter;
    private static $greetingList = ['Good morning', 'Good afternoon', 'Good evening'];

    public function setUp() : void
    {
        $this->greeter = new Client();
    }

    public function test_Instance()
    {
        $this->assertInstanceOf('MyGreeter\Client', $this->greeter);
    }

    public function test_getGreeting()
    {
        $greeting = $this->greeter->getGreeting();
        $greetingList = $this->getGreetingList();

        $this->assertIsString($greeting);
        $this->assertEquals($greetingList[intval(date('H'))], $greeting);
    }

    /**
     * 获取问候语列表
     *
     * @return array
     */
    private function getGreetingList()
    {
        $greetingList = [];
        for($hour = 0; $hour < 24; $hour++){
            if($hour >= 0 and $hour < 12){
                $greetingList[$hour] =  'Good morning';

            }else if($hour >= 12 and $hour < 18){
                $greetingList[$hour] =  'Good afternoon';

            }else{
                $greetingList[$hour] =  'Good evening';
            }
        }

        return $greetingList;
    }
}
