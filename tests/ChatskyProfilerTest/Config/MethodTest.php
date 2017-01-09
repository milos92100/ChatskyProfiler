<?php


/**
 * Class MethodTest
 */
class MethodTest extends PHPUnit_Framework_TestCase
{

    public function testConstructorThrowsInvalidHttpMethodException()
    {
        $name = "PUT";

        $this->expectException(\ChatskyProfiler\Config\Exception\InvalidHttpMethodException::class);
        $this->expectExceptionMessage("The given Http method '{$name}' is INVALID");

        $method = new \ChatskyProfiler\Config\Method($name);

    }

    public function testConstructor()
    {
        $expectedName = "POST";

        $method = new \ChatskyProfiler\Config\Method($expectedName);

        $this->assertEquals($expectedName, $method->getName());
    }

    public function testToString()
    {
        $expectedName = "POST";

        $method = new \ChatskyProfiler\Config\Method($expectedName);

        $this->assertEquals($expectedName, $method);
    }

}