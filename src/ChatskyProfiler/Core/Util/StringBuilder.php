<?php
declare(strict_types = 1);

namespace ChatskyProfiler\Core\Util;


/**
 * Class StringBuilder
 *
 * @package ChatskyProfiler\Core\Util
 */
final class StringBuilder
{
    /**
     * $partials
     *
     * @var array
     */
    private $partials;

    /**
     * StringBuilder constructor.
     *
     * @param string|null $value
     */
    public function __construct(string $value = null)
    {
        if ($value !== null) {
            $this->partials[] = $value;
        }
    }

    /**
     * Add a string value
     *
     * @param string $value
     * @return StringBuilder returns the instance
     */
    public function append(string $value)
    {
        $this->partials[] = $value;
        return $this;
    }

    /**
     * Returns the concatenated string
     *
     * @return string
     */
    public function toString()
    {
        return join("", $this->partials);
    }


    public function __toString()
    {
        return $this->toString();
    }
}