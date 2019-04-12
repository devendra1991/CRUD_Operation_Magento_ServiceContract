<?php
namespace Devendra\Promotion\Controller\Index;

use Magento\Framework\App\Action\Action;
use Devendra\Promotion\Api\Data\DevpromoInterface as ModelFactory;
use Devendra\Promotion\Api\DevpromoRepositoryInterface as ModelRepositoryInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Save extends Action
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
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\InputException
     */
    public function execute()
    {

//        $objData = $this->modelFactory;
//        $obj->setLabelId(2); // To Update existing record pass primary key data
//        $objData->setName('Devendra Promo');
//        $objData->setProductTagLabel('my product label');
//        $objData->setProductPageLabelPosition(1);
//        $objData->setCategoryTagLabel('My Category Tag label');
//        $objData->setCategoryPageLabelPosition(1);
//        $objData->setCondition('condition');

        $data = [
            "name" => "Devendra test",
            "status" => 1,
            "product_tag_label" => "my product lable",
            "product_page_label_position" => "product position",
            "category_tag_label" => "category label",
            "category_page_label_position" => "category position",
            "condition" => "1"
        ];
        $objData = $this->modelFactory->addData($data);


        try{
            $data = $this->modelRepositoryInterface->save($objData); // Service Contract
            echo $data->getName() . " Data saved with " . $data->getLabelId(). " id.";
        } catch (\Exception $e){
            echo $e->getMessage();
        }
    }
}