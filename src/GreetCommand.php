<?php

namespace App;

use Symfony\Component\Console\Command\Command;

class  GreetCommand extends Command 
{
    protected function configure()
    {
        $this
            ->setName('greet')
            ->addArgument('name');
    } 
}