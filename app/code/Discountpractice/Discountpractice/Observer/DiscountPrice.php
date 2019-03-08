<?php
namespace Discountpractice\Discountpractice\Observer;

use Magento\Framework\Event\ObserverInterface;

class DiscountPrice implements ObserverInterface
{
    protected $_session;

    public function __construct(
        \Magento\Customer\Model\Session $session
    ) {
        $this->_session = $session;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
//        if($this->_session->isLoggedIn()) {
//            $collection = $observer->getEvent()->getCollection();
//            foreach ($collection as $pro){
//                $a = $pro->getPrice('final_price');
//                $a = $a/2;
//                $pro->setOriginalCustomPrice($a);
//                $pro->setName($a);
//            }
//            return $this;
//        }
//        $collection = $observer->getEvent()->getCollection();
//        foreach ($collection as $pro){
//           $a = $pro->getPrice('final_price');
////           $a = $pro->getFinalPrice('final_price');
//           $a = $a/2;
//            $pro->setCustomPrice($a);
//            $pro->setPrice($a);
//            $pro->setOriginalCustomPrice($a);
////            $pro->getFinalPrice($a);
//            $pro->setName('xxxxxxxxxx');
//        }
//        return $this;
//
//
//        $collection2 = $observer->getEvent()->getProduct();
//        $a2 = $collection2->getPrice('final_price');
//        $collection2->setCustomPrice($a2/2);
//        $collection2->setPrice($a2/2);
//        $collection2->setOriginalCustomPrice($a2/2);
//        $collection2->setName('xxxxxxxxxx');


//        $writer = new \Zend\Log\Writer\Stream(BP.'/var/log/stackexchange.log');
//        $logger = new \Zend\Log\Logger();
//        $logger->addWriter($writer);




//        /* Code here */
        if($this->_session->isLoggedIn()) {
        $quote_item = $observer->getEvent()->getQuoteItem();
        $quote_item2 = $observer->getEvent()->getProduct();
        $price = $quote_item2->getPrice(); //set your price here
        $price = $price/2;
//        $price = 500; //set your price here
        $quote_item->setPrice($price);
        $quote_item->setOriginalCustomPrice($price);
    }
    }
}