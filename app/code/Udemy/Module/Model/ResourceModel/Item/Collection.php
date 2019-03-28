<?php

namespace Udemy\Module\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Udemy\Module\Model\Item;
use Udemy\Module\Model\ResourceModel\Item as ItemResource;

class Collection extends AbstractCollection {

    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(
            Item::class,ItemResource::class
        );
    }
}