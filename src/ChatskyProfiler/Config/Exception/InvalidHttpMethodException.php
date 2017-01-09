<?php
namespace ChatskyProfiler\Config\Exception;

use ChatskyProfiler\Core\Exception\ChatskyException;

/**
 * Class InvalidHttpMethodException
 *
 * @package ChatskyProfiler\Config\Exception
 */
final class InvalidHttpMethodException extends ChatskyException
{

    public function __construct($name)
    {

        $this->getStringBuilder()->append("The given Http method ")
            ->append("'{$name}'")
            ->append(" is INVALID");

        parent::__construct($this->getStringBuilder()->toString(), 1, null);
    }

}