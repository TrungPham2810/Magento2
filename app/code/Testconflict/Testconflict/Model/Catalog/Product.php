<?php
namespace Testconflict\Testconflict\Model\Catalog;
class Product extends \Magento\Catalog\Model\Product
{
    public function getName()
    {
        return $this->_getData(self::NAME) . ' + Demo Text';
    }
    public function getSku()
    {
        return "test conflict";
    }
}