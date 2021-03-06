<?php
namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Connection\Client;

class ConnectionCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('singleton:connection')
            ->setDescription('singleton example')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        new Client();
    }
}
