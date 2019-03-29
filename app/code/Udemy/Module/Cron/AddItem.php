<?php

namespace Udemy\Module\Cron;

use Udemy\Module\Model\ItemFactory;
use Udemy\Module\Model\Config;

class AddItem
{
    private $itemFactory;
    private $config;

    public function __construct(ItemFactory $itemFactory, Config $config)
    {
        $this->itemFactory = $itemFactory;
        $this->config = $config;
    }

    public function execute()
    {
        if ($this->config->isEnabled()) {
            $this->itemFactory->create()
                ->setName('Scheduled Item')->save();
        }
    }
}