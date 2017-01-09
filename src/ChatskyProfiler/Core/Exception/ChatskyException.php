<?php


namespace ChatskyProfiler\Core\Exception;

use ChatskyProfiler\Core\Util\StringBuilder;

/**
 * Class ChatskyException
 *
 * @package ChatskyProfiler\Core\Exception
 */
abstract class ChatskyException extends \Exception
{


    private $stringBuilder = null;


    protected function getStringBuilder()
    {
        if (null === $this->stringBuilder) {
            $this->stringBuilder = new StringBuilder();
        }
        return $this->stringBuilder;
    }

}