<?php

namespace Udemy\Module\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
        protected function _construct()
        {
            $this->_init(\Udemy\Module\Model\ResourceModel\Item::class);

        }
}