<?php
namespace Suraj\CustomMyAccountPage\Controller\Customer;
 
class Retailmode extends \Magento\Framework\App\Action\Action
{
    protected $_session;
    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Customer\Model\Session $session,
        array $data = []
    ) {
        $this->_session = $session;
        parent::__construct($context);
    }

    public function execute()
    {
        if ($this->_session->isLoggedIn()) {
            $this->_view->loadLayout();
            $this->_view->renderLayout();
        } else {
            return $this->resultRedirectFactory->create()->setPath('customer/account/login/');
        }  
    }
}