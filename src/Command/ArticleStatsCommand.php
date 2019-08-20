<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ArticleStatsCommand extends Command
{
    protected static $defaultName = 'article:stats';

    protected function configure()
    {
        $this
            ->setDescription('Returns some article stats !')
            ->addArgument('titre', InputArgument::REQUIRED, 'The article\'s title')
            ->addOption('format', null, InputOption::VALUE_REQUIRED, 'output', 'text')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $titre = $input->getArgument('titre');

        $data = [
            "titre" => $titre,
            "hearts" => rand(10, 100),
        ];

        if ($titre) {
            $io->note(sprintf('You passed an argument: %s', $titre));
        }

        switch ($input->getOption('format')) {
            case "text":
                $rows = [];
                foreach ($data as $key => $val) {
                    $rows[] = [$key, $val];
                }
                $io->table(["Key", "Value"], $rows);
                break;
            case "json":
                $io->write(json_encode($data));
                break;
            default:
                throw new \Exception ("non");
        }

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');
    }
}
