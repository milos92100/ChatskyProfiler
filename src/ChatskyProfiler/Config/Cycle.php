<?php
declare(strict_types = 1);

namespace ChatskyProfiler\Config;

/**
 * Class Cycle
 *
 * @package ChatskyProfiler\Config
 */
class Cycle
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var TaskCollection
     */
    private $tasks;

    /**
     * Cycle constructor.
     *
     * @param string         $name
     * @param string         $description
     * @param TaskCollection $tasks
     */
    public function __construct(string $name, string $description, TaskCollection $tasks)
    {
        $this->name = $name;
        $this->description = $description;
        $this->tasks = $tasks;
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
     * @return TaskCollection
     */
    public function getTasks(): TaskCollection
    {
        return $this->tasks;
    }


}