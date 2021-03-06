<?php
namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Pizza\Client;

class PizzaCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('factory:pizza')
            ->setDescription('factory method example')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        new Client();
    }
}
