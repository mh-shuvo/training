<?php
namespace Atova\Eshoper\Foundation\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ServeCommand  extends Command{

    protected function configure()
    {
        $this->setDescription('This is Test Generate Admin Command Class. ');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try{    
            $port=env("APP_PORT",8000);
            $result = shell_exec(sprintf("php -S localhost:%d",$port));

        }catch(\Exception $exc){
            $output->writeln($exc->getMessage());
        }
        
        return Command::SUCCESS;
    
    }

}