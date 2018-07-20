<?php

namespace phpreboot\calculator;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CalculatorCommand extends Command
{
    protected function configure()
    {
        $this->setName('calculate')
            ->setDescription('Runs the calculator.')
            ->addArgument('operator', InputArgument::REQUIRED, 'Enter the operator')
            ->addArgument('numbers', InputArgument::REQUIRED, 'Enter numbers');
        ;;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Operator = ' . $input->getArgument('operator'));
        $output->writeln('Numbers = ' . $input->getArgument('numbers'));
    }
}