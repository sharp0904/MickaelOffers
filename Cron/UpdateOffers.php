<?php
/**
 *  Update Offers CRON.
 *
 * @category  Mickael
 * @package   Mickael\Offers
 * @author    Mickael BAILLOT <mickael.baillot@smile.fr>
 */
declare(strict_types=1);

namespace Mickael\Offers\Cron;

use \Psr\Log\LoggerInterface;

class UpdateOffers
{

    protected $logger;

    /**
     * Construct.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Execute cron.
     *
     * @return void
     */
    public function execute()
    {
        /* TODO : Add config (boolean) for autoremove old offers */
        $this->logger->addInfo("Cronjob UpdateOffers is executed.");
    }
}
