<?php

namespace Kassner\TestAdminObserver\Observer;

use Magento\Framework\Event\ObserverInterface;

class ModelSaveBeforeAdmin implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        var_dump(__METHOD__);
    }
}
