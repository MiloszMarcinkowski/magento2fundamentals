<?php

namespace Udemy\Module\Api;

interface ItemRepositoryInterface
{
    /**
     * @return \Udemy\Module\Api\Data\ItemInterface[]
     */
    public function getList();
}