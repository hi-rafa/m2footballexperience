<?php
namespace Footballexperience\Match\Controller\Adminhtml\Match;

class NewAction extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Footballexperience_Match::stadiums';
    protected $resultPageFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;        
        parent::__construct($context);
    }
    
    public function execute()
    {
    
        //DEMO https://www.pierrefay.com/magento2-training/form-component-backend-crud-admin.html
//        $this->_view->loadLayout();
//        $this->_view->renderLayout();
//
//        $contactDatas = $this->getRequest()->getParam('contact');
//        if(is_array($contactDatas)) {
//            $contact = $this->_objectManager->create(Contact::class);
//            $contact->setData($contactDatas)->save();
//            $resultRedirect = $this->resultRedirectFactory->create();
//            return $resultRedirect->setPath('*/*/index');
//        }
        
        return $this->resultPageFactory->create();  
    }    
}
