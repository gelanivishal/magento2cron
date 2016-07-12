<?php
namespace Gelani\Vishal\Cron;
use \Psr\Log\LoggerInterface;

/**
 * custom cron actions
 */
class CustomClassName
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute()
    {
        $this->logger->info('Cron Works');
        // do your custom code as your requirement
    }
}