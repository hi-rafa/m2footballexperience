<?php
namespace Footballexperience\Team\Controller\Adminhtml\Team;

use Magento\Backend\App\Action;
use Footballexperience\Team\Model\Team;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Exception\LocalizedException;
            
class Save extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Footballexperience_Team::base';

    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;

    /**
     * @param Action\Context $context
     * @param DataPersistorInterface $dataPersistor
     */
    public function __construct(
        Action\Context $context,
        DataPersistorInterface $dataPersistor
    ) {
        $this->dataPersistor = $dataPersistor;
        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($data) {
            
            if (empty($data['id'])) {
                $data['id'] = null;
            }

            /** @var \Footballexperience\Team\Model\Team $model */
            $model = $this->_objectManager->create('Footballexperience\Team\Model\Team');

            $id = $this->getRequest()->getParam('id');
            if ($id) {
                $model->load($id);
            }

            $model->setData($data);

            try {
                $model->save();
                $this->messageManager->addSuccess(__('You saved the thing.'));
                $this->dataPersistor->clear('febase_stadium');
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['id' => $model->getId(), '_current' => true]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the data: ') . $e->getMessage());
            }

            $this->dataPersistor->set('febase_stadium', $data);
            return $resultRedirect->setPath('*/*/edit', ['id' => $this->getRequest()->getParam('id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }    
}
