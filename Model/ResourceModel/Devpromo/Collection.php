<?php
/**
 * Copyright © Devendra, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Devendra\Promotion\Model\ResourceModel\Devpromo;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Resource collection for company entity. Used in entity repository for item list retrieving.
 */
class Collection extends AbstractCollection
{
    /**
     * Standard collection initialization.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Devendra\Promotion\Model\Devpromo','Devendra\Promotion\Model\ResourceModel\Devpromo');
    }
}
