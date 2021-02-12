<?php
/**
* Mickael Offers Adminhtml Offer edit Controller.
*
* @author    Mickael BAILLOT <mickael.bailot@gmail.com>
* @category  Mickael
* @package   Mickael\Offers
*/
declare(strict_types=1);

namespace Mickael\Offers\Controller\Adminhtml\Offer;

class Edit extends \Mickael\Offers\Controller\Adminhtml\Offer
{

    protected $resultPageFactory;
    protected $_coreRegistry;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context, $coreRegistry);
    }

    /**
     * Edit action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        // 1. Get ID and create model
        $id = $this->getRequest()->getParam('offer_id');

        $model = $this->_objectManager->create(\Mickael\Offers\Model\Offer::class);

        // 2. Initial checking
        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This Offer no longer exists.'));
                /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->_coreRegistry->register('mickael_offers', $model);

        // 3. Build edit form
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $this->initPage($resultPage)->addBreadcrumb(
            $id ? __('Edit Offer') : __('New Offer'),
            $id ? __('Edit Offer') : __('New Offer')
        );

        $resultPage->getConfig()->getTitle()->prepend(__('Offers'));
        $resultPage->getConfig()->getTitle()->prepend($model->getId() ? __('Edit Offer %1', $model->getId()) : __('New Offer'));
        return $resultPage;
    }
}
