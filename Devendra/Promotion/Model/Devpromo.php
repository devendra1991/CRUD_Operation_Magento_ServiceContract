<?php
/**
 * Copyright © Devendra, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Devendra\Promotion\Model;

use Devendra\Promotion\Api\Data\DevpromoInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Api\AttributeValueFactory;

/**
 * Class that implements interface for data transfer object of company entity.
 *
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 */
class Devpromo extends AbstractModel implements DevpromoInterface
{
    /**
     * Cache tag.
     */
    const CACHE_TAG = 'devpromo';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'devpromo';

    /**
     * Initialize resource model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init("Devendra\Promotion\Model\ResourceModel\Devpromo");
    }

    /**
     * @inheritdoc
     */
    public function getLabelId()
    {
        return $this->getData(self::LABEL_ID);
    }

    /**
     * @inheritdoc
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritdoc
     */
    public function getProductTagLabel()
    {
        return $this->getData(self::PRODUCT_TAG_LABEL);
    }

    /**
     * @inheritdoc
     */
    public function getProductPageLabelPosition()
    {
        return $this->getData(self::PRODUCT_PAGE_LABEL_POSITION);
    }

    /**
     * @inheritdoc
     */
    public function getCategoryTagLabel()
    {
        return $this->getData(self::CATEGORY_TAG_LABEL);
    }

    /**
     * @inheritdoc
     */
    public function getCategoryPageLabelPosition()
    {
        return $this->getData(self::CATEGORY_PAGE_LABEL_POSITION);
    }

    /**
     * @inheritdoc
     */
    public function getCondition()
    {
        return $this->getData(self::CONDITION);
    }

    /**
     * @inheritdoc
     */
    public function getFromDate()
    {
        return $this->getData(self::FROM_DATE);
    }

    /**
     * @inheritdoc
     */
    public function getFromTime()
    {
        return $this->getData(self::FROM_TIME);
    }

    /**
     * @inheritdoc
     */
    public function getToDate()
    {
        return $this->getData(self::TO_DATE);
    }

    /**
     * @inheritdoc
     */
    public function getToTime()
    {
        return $this->getData(self::TO_TIME);
    }

    /**
     * @inheritdoc
     */
    public function setLabelId($id)
    {
        return $this->setData(self::LABEL_ID, $id);
    }

    /**
     * @inheritdoc
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * @inheritdoc
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @inheritdoc
     */
    public function setProductTagLabel($productTagLabel)
    {
        return $this->setData(self::PRODUCT_TAG_LABEL, $productTagLabel);
    }

    /**
     * @inheritdoc
     */
    public function setProductPageLabelPosition($productPageLabelPosition)
    {
        return $this->setData(self::PRODUCT_PAGE_LABEL_POSITION, $productPageLabelPosition);
    }

    /**
     * @inheritdoc
     */
    public function setCategoryTagLabel($categoryTagLabel)
    {
        return $this->setData(self::CATEGORY_TAG_LABEL, $categoryTagLabel);
    }

    /**
     * @inheritdoc
     */
    public function setCategoryPageLabelPosition($categoryPageLabelPosition)
    {
        return $this->setData(self::CATEGORY_PAGE_LABEL_POSITION, $categoryPageLabelPosition);
    }

    /**
     * @inheritdoc
     */
    public function setCondition($condition)
    {
        return $this->setData(self::CONDITION, $condition);
    }

    /**
     * @inheritdoc
     */
    public function setFromDate($fromDate)
    {
        return $this->setData(self::FROM_DATE, $fromDate);
    }

    /**
     * @inheritdoc
     */
    public function setFromTime($fromTime)
    {
        return $this->setData(self::FROM_TIME, $fromTime);
    }

    /**
     * @inheritdoc
     */
    public function setToDate($toDate)
    {
        return $this->setData(self::TO_DATE, $toDate);
    }

    /**
     * @inheritdoc
     */
    public function setToTime($toTime)
    {
        return $this->setData(self::TO_TIME, $toTime);
    }

    /**
     * @inheritdoc
     */
//    public function getExtensionAttributes()
//    {
//        if (!$this->_getExtensionAttributes()) {
//            $this->setExtensionAttributes(
//                $this->extensionAttributesFactory->create(get_class($this))
//            );
//        }
//        return $this->_getExtensionAttributes();
//    }
//
//    /**
//     * @inheritdoc
//     */
//    public function setExtensionAttributes(\Devendra\Promotion\Api\Data\DevpromoInterface $extensionAttributes)
//    {
//        return $this->_setExtensionAttributes($extensionAttributes);
//    }
}
