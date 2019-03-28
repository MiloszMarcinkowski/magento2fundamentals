<?php

namespace Udemy\Module\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('udemy_module_sample_item'),
            [
                'name' => 'Item1'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('udemy_module_sample_item'),
            [
                'name' => 'Item2'
            ]
        );

        $setup->endSetup();
    }
}
