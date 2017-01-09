<?php


class BodyTest extends PHPUnit_Framework_TestCase
{

    public function testConstructor()
    {
        $expectedParameters = array(
            "param1" => "value1",
            "param2" => "value2",
            "param3" => "value3"
        );

        $body = new \ChatskyProfiler\Config\Body($expectedParameters);

        $actualParameters = $body->getParameters();

        foreach ($expectedParameters as $key => $value) {
            $this->assertEquals($value, $actualParameters[$key]);
        }
    }


    public function testGetContent()
    {
        $expectedParameters = array(
            "param1" => "value1",
            "param2" => "value2",
            "param3" => "value3"
        );

        $expectedContent = "param1=value1&param2=value2&param3=value3";

        $body = new \ChatskyProfiler\Config\Body($expectedParameters);

        $this->assertEquals($expectedContent, $body->getContent());

    }

    public function testToString()
    {
        $expectedParameters = array(
            "param1" => "value1",
            "param2" => "value2",
            "param3" => "value3"
        );

        $expectedContent = "param1=value1&param2=value2&param3=value3";

        $body = new \ChatskyProfiler\Config\Body($expectedParameters);

        $this->assertEquals($expectedContent, $body);
    }


}