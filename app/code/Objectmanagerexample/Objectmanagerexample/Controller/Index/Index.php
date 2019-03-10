<?php
namespace Objectmanagerexample\Objectmanagerexample\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {

        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();

        // $productCollection = $objectManager->create('Magento\Catalog\Model\ResourceModel\Product\CollectionFactory');

        // $collection = $productCollection->create()
        //     ->addAttributeToSelect('*')
        //     ->load();

        // foreach ($collection as $product){
        //     echo 'Name  =  '.$product->getName().'<br>';
        // }
            $product2 = $objectManager->get('Magento\Catalog\Model\Product')->load(20);
            echo $product2->getName();
            echo '<br>';
            echo $product2->getSku();
            echo '<br>';
            echo $product2->getId();
//        return $this->resultPageFactory->create();
    }
}