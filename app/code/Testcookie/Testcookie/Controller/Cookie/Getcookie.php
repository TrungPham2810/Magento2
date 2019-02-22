<?php
namespace Testcookie\Testcookie\Controller\Cookie;

//use \Magento\Framework\Stdlib\CookieManagerInterface;
//use \Magento\Framework\App\Action\Context;

class Getcookie extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\Stdlib\CookieManagerInterface
     */
    protected $_cookieManager;
    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager
    )
    {
        $this->_cookieManager = $cookieManager;
        parent::__construct($context);
    }
    public function execute()
    {
        $cookieValue = $this->_cookieManager->getCookie('test');
        echo($cookieValue);
    }
}
//class Index extends \Magento\Framework\App\Action\Action
//{
//    public function execute()
//    {
//        $layout = $this->_view->getLayout();
//        $block = $layout->createBlock('Magento\Framework\View\Element\Text');
//        $block->setText('Hello world from Nam currency !');
//        $this->getResponse()->appendBody($block->toHtml());
//    }
//}