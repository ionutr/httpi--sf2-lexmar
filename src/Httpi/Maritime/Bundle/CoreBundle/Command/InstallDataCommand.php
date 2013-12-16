<?php

namespace Httpi\Maritime\Bundle\CoreBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\ArrayInput;

class InstallDataCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this->setName('lexmar:install:data')
            ->setDescription('Data install.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
		$em = $this->getContainer()->get('doctrine')->getManager();
		$connection = $em->getConnection();
		$timeStarted = microtime(true);
		
		$output->writeln("");
		$output->writeln("<bg=blue>Starting data install process</bg=blue>");
		$output->writeln("");

		// doctrine migrations
		$command = $this->getApplication()->find('doctrine:migrations:status');
		$arguments = array(
			"command" => "doctrine:migrations:status"
		);
		$commandInput = new ArrayInput($arguments);
		$command->run($commandInput, $output);

        // load fixtures
        $output->writeln("");
        $command = $this->getApplication()->find('doctrine:fixtures:load');
        $arguments = array(
            "command" => "doctrine:fixtures:load",
            "--append" => true
        );
        $commandInput = new ArrayInput($arguments);
        $command->run($commandInput, $output);

		// run imports
		$output->writeln("");
		$command = $this->getApplication()->find('lexmar:import:do');
		$arguments = array(
			"command" => "lexmar:import:do",
			"file" => "lexicon.csv"
		);
		$commandInput = new ArrayInput($arguments);
		$command->run($commandInput, $output);

        $output->writeln("");
        $command = $this->getApplication()->find('lexmar:import:do');
        $arguments = array(
            "command" => "lexmar:import:do",
            "file" => "glossary.csv",
            "type" => "glossary"
        );
        $commandInput = new ArrayInput($arguments);
        $command->run($commandInput, $output);

		$timeEnded = microtime(true);
		$ranForSeconds = number_format($timeEnded - $timeStarted, 5);
		$output->writeln("");
		$output->writeln("<bg=blue>Process succesfully ran in <comment>" . $ranForSeconds . "</comment> seconds.</bg=blue>");
    }
}