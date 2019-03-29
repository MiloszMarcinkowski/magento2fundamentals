<?php

namespace Udemy\Module\Model;

use Udemy\Module\Api\ItemRepositoryInterface;
use Udemy\Module\Model\ResourceModel\Item\CollectionFactory;

class ItemRepository implements ItemRepositoryInterface
{
    private $collectionFactory;

     public function __construct(CollectionFactory $collectionFactory)
     {
         $this->collectionFactory = $collectionFactory;
     }

     public function getList()
     {
         return $this->collectionFactory->create()->getItems();
     }
}