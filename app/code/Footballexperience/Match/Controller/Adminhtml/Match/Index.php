<?php
namespace Footballexperience\Match\Controller\Adminhtml\Match;


use Magento\Framework\App\Action\Action;

class Index extends Action
{
    protected $_resultPageFactory;
    
    protected $_resultPage;
    
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    
    public function execute()
    {
//        die('rafa');
        //Call page factory to render layout and page content
        $this->_setPageData();
        return $this->getResultPage();
    }
    
 
    public function getResultPage()
    {
        if (is_null($this->_resultPage)) {
            $this->_resultPage = $this->_resultPageFactory->create();
        }
        return $this->_resultPage;
    }
    
    protected function _setPageData()
    {
        $resultPage = $this->getResultPage();
//        $resultPage->setActiveMenu('Alfa9_CatalogPreview::downloads_list');
        $resultPage->getConfig()->getTitle()->prepend((__('Matchs List')));
        
        //Add bread crumb
//        $resultPage->addBreadcrumb(__('Downloads'), __('Downloads'));
//        $resultPage->addBreadcrumb(__('Options'), __('Options'));
        
        return $resultPage;
    }
    
    
}