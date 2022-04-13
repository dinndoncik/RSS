<?php

namespace RSSReader\Command;

use RSSReader\Entity\Article;
use RSSReader\Repository\ArticleRepository;
use RSSReader\Repository\ResourceRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FetchResourcesCommand extends Command
{
    protected static $defaultName = 'rss:fetch';

    protected function configure(): void
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        ArticleRepository::saveArticles();
        $output->writeln("<info> Items were saved</info>");
        return Command::SUCCESS;

    }

}