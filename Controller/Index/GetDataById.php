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
use Magento\Setup\Exception;

class GetDataById extends Action
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
     * @var ModelFactory
     */
    private $modelFactory;


    /**
     * Save constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param ModelFactory $modelFactory
     * @param ModelRepositoryInterface $modelRepositoryInterface
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        ModelFactory $modelFactory,
        ModelRepositoryInterface $modelRepositoryInterface
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->modelFactory = $modelFactory;
        $this->modelRepositoryInterface = $modelRepositoryInterface;
        return parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute()
    {
       $labelId = $this->getRequest()->getParam('id',1);
        try{
            $data = $this->modelRepositoryInterface->getById($labelId);
            print_r($data->getData());
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
}