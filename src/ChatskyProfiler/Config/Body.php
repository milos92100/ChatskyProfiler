<?php
declare(strict_types = 1);

namespace ChatskyProfiler\Config;

/**
 * Class Body
 *
 * @package ChatskyProfiler\Config
 */
final class Body
{
    /**
     * $parameters
     *
     * @var array
     */
    private $parameters;

    /**
     * Body constructor.
     *
     * @param array $parameters
     */
    public function __construct(array  $parameters)
    {
        $this->parameters = $parameters;
    }

    public function __toString()
    {
        return $this->getContent();
    }

    public function getParameters() : array
    {
        return $this->parameters;
    }

    /**
     * Returns a query string built from the passed parameters.
     *
     * @return string
     */
    public function getContent() : string
    {
        return http_build_query($this->parameters);
    }

}