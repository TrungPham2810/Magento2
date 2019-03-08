<?php
namespace Discountpractice\Discountpractice\Observer;

use Magento\Framework\Event\ObserverInterface;

class ProductView implements ObserverInterface
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
        $collection2 = $observer->getEvent()->getProduct();
        $a2 = $collection2->getPrice('final_price');
        $collection2->setCustomPrice($a2/2);
        $collection2->setPrice($a2/2);
        $collection2->setOriginalCustomPrice($a2/2);
        $collection2->setName('xxxxxxxxxx');
        }
    }
}