<?php


namespace ChatskyProfiler\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MainCommand extends Command
{
    protected function configure()
    {
        $this->setName('run')
            ->setDescription('Run the application');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        while (true) {

            // Print the menu on console
            $this->printMenu($output);

            // Read user choice
            $choice = trim(fgets(STDIN));

            $output->writeln("choice = " . $choice);


            // Exit application
            if ($choice == 5) {
                break;
            }
        }
    }

    protected function printMenu(OutputInterface $output)
    {

        $output->writeln("************ Reservation System ******************");
        $output->writeln("1 - Choose Source");
        $output->writeln("2 - Choose Destination");
        $output->writeln("5 - Quit");
        $output->writeln("************ Reservation System ******************");
        $output->writeln("Enter your choice from 1 to 5 ::");
    }

}