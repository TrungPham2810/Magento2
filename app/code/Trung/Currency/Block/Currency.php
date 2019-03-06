<?php
namespace Trung\Currency\Block;

use \Magento\Framework\View\Element\Template;

class Currency extends Template
{
    protected $request;
    protected $_registry;
    public $object1;
    public $object2;


    public function __construct(
        Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\App\Request\Http $request,
        $object1 = "object1",
        $object2 = "object2",
        array $data = [])
    {
        $this->object1 = $object1;
        $this->object2 = $object2;
        $this->_request = $request;
        $this->_registry = $registry;
        parent::__construct($context, $data);
    }           
     public function getRegisterData()
    {         
        return $this->_registry->registry('slct_options');
    }
    
    public function helloWorld($ok = "ok nuon hihi")
    {
        return $ok;
    }
    public function testArgumentReplacement()
    {
        return $this->object1.' '.$this->object2;
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