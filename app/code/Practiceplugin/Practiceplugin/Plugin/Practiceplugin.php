<?php
namespace Practiceplugin\Practiceplugin\Plugin;

class Practiceplugin
{
    protected $_session;
    public function __construct(
        \Magento\Customer\Model\Session $session
    ) {
        $this->_session = $session;
    }

    public function afterGetMiscellaneousHtml($subject, $result) {
        if ($this->_session->isLoggedIn()) {
            $one = $this->_session->getCustomerData()->getFirstName();
            $two = $this->_session->getCustomerData()->getLastname();
            $three = $this->_session->getCustomerData()->getEmail();
            $a = [$one, $two, $three];
            return $a;
        } else  {
            return '<li><h2>Please log in to show info customer</h2></li>';
//            return $result;
        }

    }
}