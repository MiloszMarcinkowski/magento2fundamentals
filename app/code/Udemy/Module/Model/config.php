<?php

namespace Udemy\Module\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    const XML_PATH_ENABLED = 'udemy/general/enable';
    const XML_PATH_CRON_EXP = 'udemy/general/cron_exp';

    private $config;

    public function __construct(ScopeConfigInterface $config)
    {
        $this->config = $config;
    }

    public function isEnabled()
    {
        return $this->config->getValue(self::XML_PATH_ENABLED);
    }
}