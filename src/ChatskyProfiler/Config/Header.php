<?php
declare(strict_types = 1);

namespace ChatskyProfiler\Config;

/**
 * Class Header
 *
 * @package ChatskyProfiler\Config
 */
final class Header
{

    /**
     * @var array
     */
    private $parameters;

    /**
     * Header constructor.
     *
     * @param array $parameters
     */
    public function __construct(array $parameters = array())
    {
        $this->parameters = $parameters;
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }


}