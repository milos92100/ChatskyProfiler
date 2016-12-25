<?php
namespace ChatskyProfiler\Persistence;


/**
 * Class Database
 *
 * @package ChatskyProfiler\Persistence
 */
class Database extends \SQLite3
{

    const DB_NAME = "profiler.db";

    private static $instance = null;

    public function __construct()
    {
        $this->initialize();

        parent::__construct(self::getDatabasePath());

        $this->validateSchema();
    }

    private function validateSchema()
    {
        //  $this->tableExists(self::TABLE_TASKS);
    }

    private function tableExists($table)
    {
        $result = $this->query("SELECT name FROM `sqlite_master` WHERE type = 'table' AND name='$table'");

        if (count($result->fetchArray(SQLITE3_ASSOC)) < 1) {
            return false;
        }

        return true;
    }

    public static function initialize()
    {
        if (!file_exists(self::getDatabaseDirPath())) {
            mkdir(self::getDatabaseDirPath(), 0777, true);
        }
    }


    public static function getDatabaseDirPath()
    {
        return __DIR__ . '/db';
    }

    public static function getDatabasePath()
    {
        return self::getDatabaseDirPath() . "/" . self::DB_NAME;
    }

    /**
     * Returns a instance of the Database class.
     *
     * @return Database
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}