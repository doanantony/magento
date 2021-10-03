<?php
namespace Rhinos\FirstModule\Block;

class Index extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory 
    ) {
        $this->_orderCollectionFactory = $orderCollectionFactory;
        parent::__construct($context);
    }

    public function getOrderCollection()
    {
        $collection = $this->_orderCollectionFactory->create()
          ->addAttributeToSelect('*');
        //   ->addFieldToFilter($field, $condition); //Add condition if you wish
      
      return $collection;
      
     }


}