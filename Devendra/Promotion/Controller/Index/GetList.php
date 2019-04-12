<?php
/**
 * Copyright © Devendra, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Devendra\Promotion\Controller\Index;

use Magento\Framework\App\Action\Action;
use Devendra\Promotion\Api\Data\DevpromoInterface as ModelFactory;
use Devendra\Promotion\Api\DevpromoRepositoryInterface as ModelRepositoryInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Api\SearchCriteriaBuilder;

class GetList extends Action
{
    /**
     * @var ModelRepositoryInterface
     */
    private $modelRepositoryInterface;

    /**
     * Index resultPageFactory
     * @var PageFactory
     */
    private $resultPageFactory;
    /**
     * @var
     */
    private $modelFactory;
    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;


    /**
     * GetList constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param ModelFactory $modelFactory
     * @param ModelRepositoryInterface $modelRepositoryInterface
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        ModelFactory $modelFactory,
        ModelRepositoryInterface $modelRepositoryInterface,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->modelFactory = $modelFactory;
        $this->modelRepositoryInterface = $modelRepositoryInterface;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        return parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute()
    {
        $searchCriteria = $this->searchCriteriaBuilder
            ->addFilter('status', 1, 'eq')
            ->create();
        try{
            $searchResults = $this->modelRepositoryInterface->getList($searchCriteria);
            $result = $searchResults->getItems();
            print_r($result);
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
}