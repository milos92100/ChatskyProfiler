<?php
declare(strict_types = 1);

namespace ChatskyProfiler\Config;

use ChatskyProfiler\Config\Exception\InvalidHttpMethodException;


/**
 * Class Method
 *
 * @package ChatskyProfiler\Config
 */
final class Method
{

    const POST = "POST";
    const GET = "GET";
    const UPDATE = "UPDATE";
    const DELETE = "DELETE";

    private static $_methods = array(
        self::POST,
        self::GET,
        self::UPDATE,
        self::DELETE
    );

    private $name;

    /**
     * Method constructor.If the given method name is not valid,
     * a InvalidHttpMethodException with the appropriate message is
     * thrown.
     *
     * @param string $name
     * @throws InvalidHttpMethodException
     */
    public function __construct(string $name)
    {
        if (!in_array(strtoupper($name), self::$_methods)) {
            throw new InvalidHttpMethodException($name);
        }

        $this->name = $name;
    }

    /**
     * Returns the name of the method.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->getName();
    }


}