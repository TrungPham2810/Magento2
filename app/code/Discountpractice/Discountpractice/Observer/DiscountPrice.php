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
        if($this->_session->isLoggedIn()) {
            $collection = $observer->getEvent()->getCollection();
            foreach ($collection as $pro){
//                $a = $pro->getPrice('final_price');
//                $a = $a/2;
//                $pro->setOriginalCustomPrice($a);
                $pro->setName('vvvvvvvvvvvvvvvvvvvvv');
            }
            return $this;
        }

        $collection = $observer->getEvent()->getCollection();
        foreach ($collection as $pro){
           $a = $pro->getPrice('final_price');
           $a = $a/2;
            $pro->setOriginalCustomPrice($a);
            $pro->setName('xxxxxxxxxxx');
        }
        return $this;

    }
}