<?php
declare(strict_types = 1);

namespace ChatskyProfiler\Config;


use ChatskyProfiler\Core\Util\Collection;

/**
 * Class TaskCollection
 *
 * @package ChatskyProfiler\Config
 */
class TaskCollection extends Collection
{

    /**
     * TaskCollection constructor.
     *
     * @param array $arr
     */
    public function __construct(array $arr = array())
    {
        if (null !== $arr) {
            foreach ($arr as $task) {
                $this->addTask($task);
            }
        }
    }

    /**
     * Adds a new taks to the collection
     *
     * @param Task $task
     */
    public function addTask(Task $task)
    {
        $this->add($task);
    }

}