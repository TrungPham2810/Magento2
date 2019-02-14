<?php
namespace Trung\Currency\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{

    protected $_registry;
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->_registry = $registry;
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->_registry->register('slct_options','oknuon');

        return $this->resultPageFactory->create();
    }
}