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
        $numbers = $input->getArgument('numbers');
        $numberArray = explode(',', $numbers);

        $operator = $input->getArgument('operator');

        if ('sum' === $operator) {
            $output->write(array_sum($numberArray));
        } else if ('difference' === $operator) {
            $output->write($numberArray[0] - $numberArray[1]);
        }
    }
}