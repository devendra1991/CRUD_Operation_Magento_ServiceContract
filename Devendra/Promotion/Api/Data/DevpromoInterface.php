<?php
/**
 * Copyright © Devendra, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Devendra\Promotion\Api\Data;

/**
 * Interface for Company entity.
 *
 * @api
 * @since 100.0.0
 */
interface DevpromoInterface // extends \Magento\Framework\Api\ExtensibleDataInterface
{
    const LABEL_ID = 'label_id';
    const NAME = 'name';
    const STATUS = 'status';
    const PRODUCT_TAG_LABEL = 'product_tag_label';
    const PRODUCT_PAGE_LABEL_POSITION = 'product_page_label_position';
    const CATEGORY_TAG_LABEL = 'category_tag_label';
    const CATEGORY_PAGE_LABEL_POSITION = 'category_page_label_position';
    const CONDITION = 'condition';
    const FROM_DATE = 'from_date';
    const FROM_TIME = 'from_time';
    const TO_DATE = 'to_date';
    const TO_TIME = 'to_time';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Get Label Id.
     *
     * @return int|null
     */
    public function getLabelId();

    /**
     * Get status.
     *
     * @return int|null
     */
    public function getStatus();

    /**
     * Get name.
     *
     * @return string|null
     */
    public function getName();

    /**
     * Get Product Tag Label.
     *
     * @return string|null
     */
    public function getProductTagLabel();

    /**
     * Get Product Page Label Position.
     *
     * @return string|null
     */
    public function getProductPageLabelPosition();

    /**
     * Get Category Tag Label.
     *
     * @return string|null
     */
    public function getCategoryTagLabel();

    /**
     * Get Category Page Label Position.
     *
     * @return string|null
     */
    public function getCategoryPageLabelPosition();

    /**
     * Get Condition.
     *
     * @return string|null
     */
    public function getCondition();

    /**
     * Get FromDate.
     *
     * @return string[]
     */
    public function getFromDate();

    /**
     * Get FromTime.
     *
     * @return string|null
     */
    public function getFromTime();

    /**
     * Get country.
     *
     * @return string|null
     */
    public function getToDate();

    /**
     * Get region.
     *
     * @return string|null
     */
    public function getToTime();


    /**
     * Set Label Id.
     *
     * @param int $id
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     */
    public function setLabelId($id);

    /**
     * Set status.
     *
     * @param int $status
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     */
    public function setStatus($status);

    /**
     * Set name.
     *
     * @param string $name
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     */
    public function setName($name);

    /**
     * Set Product Tag Label.
     *
     * @param string $productTagLabel
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     */
    public function setProductTagLabel($productTagLabel);

    /**
     * Set Product Page Label Position
     *
     * @param string $productPageLabelPosition
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     */
    public function setProductPageLabelPosition($productPageLabelPosition);

    /**
     * Set Category Tag Label.
     *
     * @param string $categoryTagLabel
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     */
    public function setCategoryTagLabel($categoryTagLabel);

    /**
     * Set Category Page Label Position.
     *
     * @param string $categoryPageLabelPosition
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     */
    public function setCategoryPageLabelPosition($categoryPageLabelPosition);

    /**
     * Set Condition.
     *
     * @param string $condition
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     */
    public function setCondition($condition);

    /**
     * Set FromDate.
     *
     * @param array|string $fromDate
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     */
    public function setFromDate($fromDate);

    /**
     * Set From Time.
     *
     * @param string $fromTime
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     */
    public function setFromTime($fromTime);

    /**
     * Set ToDate.
     *
     * @param string $toDate
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     */
    public function setToDate($toDate);

    /**
     * Set ToTime.
     *
     * @param string $toTime
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     */
    public function setToTime($toTime);

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface|null
     */
 //   public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Devendra\Promotion\Api\Data\DevpromoInterface $extensionAttributes
     * @return $this
     */
//    public function setExtensionAttributes(\Devendra\Promotion\Api\Data\DevpromoInterface $extensionAttributes);
}
