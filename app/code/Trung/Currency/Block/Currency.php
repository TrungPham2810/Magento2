<?php
namespace Trung\Currency\Block;

use \Magento\Framework\View\Element\Template;

class Currency extends Template
{
    protected $request;
    protected $_registry;

    public function __construct(
        Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\App\Request\Http $request,
        array $data = [])
    {
        $this->_request = $request;
        $this->_registry = $registry;
        parent::__construct($context, $data);
    }           
     public function getRegisterData()
    {         
        return $this->_registry->registry('slct_options');
    }
    
    public function helloWorld()
    {
        return 'ok nuon hihi';
    }

    public function getInfo()
    {

        echo $this->_request->getFrontName();
        echo "<br>";
        echo $this->_request->getRouteName();
        echo "<br>";
        echo $this->_request->getControllerModule();

    }
}
?>