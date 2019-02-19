<?php
namespace Takeinfo\Correct\Controller\Index;


class Index extends \Magento\Framework\App\Action\Action
{
    protected $currentCustomer;
    protected $_session;
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Customer\Model\Session $session

    )
    {
        parent::__construct($context);
        $this->_session = $session;

    }
//
    public function getData(){
        $a = $this->_session->getCustomerData()->getFirstName();

        return $a;
    }
    public function execute()
    {
        var_dump($this->_session->getCustomerData()->getEmail());
        var_dump($this->_session->getCustomerData()->getLastName());
//        echo '<hr>';

        var_dump($this->getData());
        echo 'hihihihi';
        echo '<hr>';
    }

}