<?php

require_once __DIR__ . "/../vendor/autoload.php";


use ChatskyProfiler\Command\HelloCommand;
use ChatskyProfiler\Command\MainCommand;
use Symfony\Component\Console\Application;

//echo ChatskyProfiler\Persistence\Database::getDatabaseDirPath();
ChatskyProfiler\Persistence\Database::initialize();
ChatskyProfiler\Persistence\Database::getInstance();

$application = new Application('Profiler', '0.1-dev');

$application->addCommands([
    new HelloCommand(),
    new MainCommand()
]);
$application->run();