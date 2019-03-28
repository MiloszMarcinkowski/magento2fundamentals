<?php

namespace Udemy\Module\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute(){
//        /** @var \Magento\Framework\Controller\Result\Raw $result */
//        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
//        $result->setContents('hello from milosz');
//        return $result;
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}