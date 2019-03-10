<?php
namespace Factoryexample\Factoryexample\Block;
class Factoryexample extends \Magento\Framework\View\Element\Template
{
    protected $_productFactory;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Catalog\Model\ProductFactory $_productFactory

    )
    {
        $this->_productFactory = $_productFactory;
        parent::__construct($context);
    }

    public function getProductLoad($id)
    {
        return $this->_productFactory->create()->load($id);
    }


}
?>