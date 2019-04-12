<?php
/**
 * Copyright © Devendra, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Devendra\Promotion\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Devpromo mysql resource
 */
class Devpromo extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('devpromo_product_lebel', 'label_id');
    }
}
