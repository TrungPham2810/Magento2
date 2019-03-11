<?php
namespace Testconflict2\Testconflict2\Model\Catalog;
class Product extends \Magento\Catalog\Model\Product
{
    public function getName()
    {
        return $this->_getData(self::NAME) . ' + conflict';
    }
    public function getSku()
    {
        return "test conflict2222";
    }
}