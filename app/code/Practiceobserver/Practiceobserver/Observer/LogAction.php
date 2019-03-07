<?php
namespace Practiceobserver\Practiceobserver\Observer;

use Magento\Framework\Event\ObserverInterface;

use \Psr\Log\LoggerInterface;
use Magento\Framework\Event\Observer;


class LogAction implements ObserverInterface
{
//    protected $_session;
    protected $logger;
    protected $request;
    public function __construct(
        LoggerInterface $logger,
        \Magento\Framework\App\Request\Http $request
    )
    {
        $this->logger = $logger;
        $this->request = $request;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
//        if ($this->_session->isLoggedIn()){
//            die('true');
//        }
        $action     = $this->request->getActionName();
//        die($action);
        $this->logger->warn($action);
    }
}