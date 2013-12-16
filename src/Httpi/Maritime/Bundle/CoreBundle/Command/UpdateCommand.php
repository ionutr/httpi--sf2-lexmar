<?php

namespace Httpi\Maritime\Bundle\CoreBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\ArrayInput;

class UpdateCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this->setName('lexmar:update:do')
            ->setDescription('Update process.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
		$em = $this->getContainer()->get('doctrine')->getManager();
		$connection = $em->getConnection();

        //@TODO: update command: migrations, rebuild entities?
    }
}