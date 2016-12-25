<?php
declare(strict_types = 1);


namespace ChatskyProfiler\Persistence\Table;

/**
 * Interface TableInterface , this interface must implement all
 * classes that will represent a table int the database.This interface
 * will provide all required functionality in the persistence domain.
 *
 * @package ChatskyProfiler\Persistence\Table
 */
interface TableInterface
{

    /**
     * It should return the table name
     *
     * @return string
     */
    public function getName():string;

    /**
     *  It should return the table schema
     *
     * @return string
     */
    public function getSchema() : string;

}