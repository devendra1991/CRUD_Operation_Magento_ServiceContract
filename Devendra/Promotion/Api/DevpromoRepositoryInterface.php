<?php
/**
 * Copyright © Devendra, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Devendra\Promotion\Api;

/**
 * A repository interface for company entity that provides basic CRUD operations.
 *
 * @api
 * @since 100.0.0
 */
interface DevpromoRepositoryInterface
{
    /**
     * Create or update a promotion lebel.
     *
     * @param \Devendra\Promotion\Api\Data\DevpromoInterface $devpromo
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\InputException
     */
    public function save(\Devendra\Promotion\Api\Data\DevpromoInterface $devpromo);

    /**
     * Returns label details.
     *
     * @param int $labelId
     * @return \Devendra\Promotion\Api\Data\DevpromoInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($labelId);

    /**
     * Removes company entity and all the related links from the system.
     *
     * @param \Devendra\Promotion\Api\Data\DevpromoInterface $devpromo
     * @return bool
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function delete(\Devendra\Promotion\Api\Data\DevpromoInterface $devpromo);

    /**
     * Delete a company. Customers belonging to a company are not deleted with this request.
     *
     * @param int $labelId
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function deleteById($labelId);

    /**
     * Returns the list of companies. The list is an array of objects, and detailed information about item attributes
     * might not be included.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Company\Api\Data\CompanySearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
