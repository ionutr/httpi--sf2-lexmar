<?php

namespace Httpi\Maritime\Bundle\CoreBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\ArrayInput;

class InstallAppCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this->setName('lexmar:install:app')
			->addOption('import', null, InputOption::VALUE_OPTIONAL, 'Description comes here @todo', 'lexicon.csv')
            ->setDescription('Initial process. Run it only on install.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
		$em = $this->getContainer()->get('doctrine')->getManager();
		$connection = $em->getConnection();
		$timeStarted = microtime(true);
		
		$output->writeln("");
		$output->writeln("<bg=blue>Starting initial process</bg=blue>");
		$output->writeln("");
		$output->writeln("<error>Warning! This will drop the database and make a fresh start of the project. All acquired data will be lost!</error>");
		
		// old entity cleanup
		$output->writeln("");
		$command = $this->getApplication()->find('httpi:utils:cleanup');
		$arguments = array(
			"command" => "httpi:utils:cleanup",
			"bundles" => array(
                "src/Httpi/Bundle/CoreBundle/",
                "src/Httpi/Maritime/Bundle/CoreBundle/"
            )
		);
		$commandInput = new ArrayInput($arguments);
		$command->run($commandInput, $output);

        // file cleanup
        $output->writeln("");
        $command = $this->getApplication()->find('httpi:files:cleanup');
        $arguments = array(
            "command" => "httpi:files:cleanup"
        );
        $commandInput = new ArrayInput($arguments);
        $command->run($commandInput, $output);

		// drop database
		$output->writeln("");
		$command = $this->getApplication()->find('doctrine:database:drop');
		$arguments = array(
			"command" => "doctrine:database:drop",
			"--force" => true
		);
		$commandInput = new ArrayInput($arguments);
		$command->run($commandInput, $output);
		$connection->close();

		// create database
		$output->writeln("");
		$command = $this->getApplication()->find('doctrine:database:create');
		$arguments = array(
			"command" => "doctrine:database:create"
		);
		$commandInput = new ArrayInput($arguments);
		$command->run($commandInput, $output);

		// convert mapping
		$output->writeln("");
		$command = $this->getApplication()->find('doctrine:mapping:convert');
		$arguments = array(
			"command" => "doctrine:mapping:convert",
			"to-type" => "annotation",
			"dest-path" => "src/"
		);
		$commandInput = new ArrayInput($arguments);
		$command->run($commandInput, $output);
		
		// generate entities from orm
		$output->writeln("");
		$command = $this->getApplication()->find('doctrine:generate:entities');
		$arguments = array(
			"command" => "doctrine:generate:entities",
			"name" => "HttpiCoreBundle",
            "--no-backup" => true
		);
		$commandInput = new ArrayInput($arguments);
		$command->run($commandInput, $output);
		$arguments['name'] = 'HttpiMaritimeCoreBundle';
		$commandInput = new ArrayInput($arguments);
		$command->run($commandInput, $output);

		// schema create from entities
		$output->writeln("");
		$command = $this->getApplication()->find('doctrine:schema:create');
		$arguments = array(
			"command" => "doctrine:schema:create"
		);
		$commandInput = new ArrayInput($arguments);
		$command->run($commandInput, $output);

		// dump assets
		$output->writeln("");
		$command = $this->getApplication()->find('assets:install');
		$arguments = array(
			"command" => "assets:install"
		);
		$commandInput = new ArrayInput($arguments);
		$command->run($commandInput, $output);

		// clear cache
		$output->writeln("");
		$output->writeln("");
		$command = $this->getApplication()->find('cache:clear');
		$arguments = array(
			"command" => "cache:clear",
			"--env" => "dev",
			"--no-debug" => true
		);
		$commandInput = new ArrayInput($arguments);
		$command->run($commandInput, $output);
		
		$timeEnded = microtime(true);
		$ranForSeconds = number_format($timeEnded - $timeStarted, 5);
		$output->writeln("");
		$output->writeln("<bg=blue>Process succesfully ran in <comment>" . $ranForSeconds . "</comment> seconds.</bg=blue>");
    }
}