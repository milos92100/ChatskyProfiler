<?php
namespace ChatskyProfiler\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class HelloCommand
 *
 * @package ChatskyProfiler\Command
 */
class HelloCommand extends Command
{


    protected function configure()
    {
        $this->setName('hello')
            ->setDescription('Say hello');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World');
    }


}