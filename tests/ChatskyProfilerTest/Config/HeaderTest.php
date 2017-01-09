<?php


/**
 * Class HeaderTest
 */
class HeaderTest extends PHPUnit_Framework_TestCase
{

    public function testConstructor()
    {

        $expectedParameters = array(
            "param1" => "value1",
            "param2" => "value2",
            "param3" => "value3"

        );

        $header = new \ChatskyProfiler\Config\Header($expectedParameters);

        $actualParameters = $header->getParameters();

        foreach ($expectedParameters as $key => $value) {
            $this->assertEquals($value, $actualParameters[$key]);
        }

    }

}