<?php
namespace Discountpractice\Discountpractice\Observer;

use Magento\Framework\Event\ObserverInterface;

class CatalogLoad implements ObserverInterface
{
    protected $_session;

    public function __construct(
        \Magento\Customer\Model\SessionFactory $session
    ) {
        $this->_session = $session->create();
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if($this->_session->isLoggedIn()) {
            $collection = $observer->getEvent()->getCollection();
            foreach ($collection as $pro){
                $a = $pro->getPrice('final_price');
                $a = $a/2;
                $pro->setCustomPrice($a);
                $pro->setPrice($a);
                $pro->setOriginalCustomPrice($a);
                $pro->setName($a);
            }
        }
    }
}