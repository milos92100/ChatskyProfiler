<?php
declare(strict_types = 1);

namespace ChatskyProfiler\Config;

/**
 * Class Request
 *
 * @package ChatskyProfiler\Config
 */
class Task
{

    /**
     * $name
     *
     * @var string
     */
    private $name;

    /**
     * $description
     *
     * @var string
     */
    private $description;

    /**
     * $url
     * @var string
     */
    private $url;

    /**
     *
     * $method
     *
     * @var Method
     */
    private $method;

    /**
     *
     * $data
     *
     * @var Body
     */
    private $data;

    /**
     * $header
     *
     * @var Header
     */
    private $header;

    /**
     *
     * $timeout
     *
     * @var float
     */
    private $timeout;

    /**
     * $repeatTimes
     *
     * @var int
     */
    private $repeatTimes;

    /**
     * Request constructor.
     *
     * @param $name        string the name of the task
     * @param $description string the task description
     * @param $url         string the http request url for the task
     * @param $method      Method the http method for the request
     * @param $data        Body the http request body
     * @param $header      Header the http request header
     * @param $timeout     float the response timeout for the http request
     * @param $repeatTimes int the times to repeat the request.
     */
    public function __construct(string $name, string $description, string $url, Method $method, Body $data, Header $header, float $timeout, int $repeatTimes)
    {
        $this->name = $name;
        $this->description = $description;
        $this->url = $url;
        $this->method = $method;
        $this->data = $data;
        $this->header = $header;
        $this->timeout = $timeout;
        $this->repeatTimes = $repeatTimes;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return Method
     */
    public function getMethod(): Method
    {
        return $this->method;
    }

    /**
     * @return Body
     */
    public function getData(): Body
    {
        return $this->data;
    }

    /**
     * @return Header
     */
    public function getHeader(): Header
    {
        return $this->header;
    }

    /**
     * @return float
     */
    public function getTimeout(): float
    {
        return $this->timeout;
    }

    /**
     * @return int
     */
    public function getRepeatTimes(): int
    {
        return $this->repeatTimes;
    }


}