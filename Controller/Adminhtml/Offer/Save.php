<?php
/**
* Mickael Offers Adminhtml Offer Save Controller.
*
* @author    Mickael BAILLOT <mickael.bailot@gmail.com>
* @category  Mickael
* @package   Mickael\Offers
*/
declare(strict_types=1);

namespace Mickael\Offers\Controller\Adminhtml\Offer;

use Magento\Framework\Exception\LocalizedException;

class Save extends \Magento\Backend\App\Action
{

    protected $dataPersistor;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
    ) {
        $this->dataPersistor = $dataPersistor;
        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        if ($data) {
            $id = $this->getRequest()->getParam('offer_id');

            $model = $this->_objectManager->create(\Mickael\Offers\Model\Offer::class)->load($id);
            if (!$model->getId() && $id) {
                $this->messageManager->addErrorMessage(__('This Offer no longer exists.'));
                return $resultRedirect->setPath('*/*/');
            }

            if ($data['categories']) {
              $data['categories'] = implode(',', $data['categories']);
            }

            if (is_array($data['image_path']) && count($data['image_path']) > 0) {
              $data['image_path'] = $data['image_path'][0]['url'];
            }

            $data['start_date'] = str_replace('/', '-', $data['start_date']);
            $data['end_date'] = str_replace('/', '-', $data['end_date']);

            $model->setData($data);

            try {
                $model->save();
                $this->messageManager->addSuccessMessage(__('You saved the Offer.'));
                $this->dataPersistor->clear('mickael_offers');

                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['offer_id' => $model->getId()]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->mOfferCollectionessageManager->addExceptionMessage($e, __('Something went wrong while saving the Offer.'));
            }

            $this->dataPersistor->set('mickael_offers', $data);
            return $resultRedirect->setPath('*/*/edit', ['offer_id' => $this->getRequest()->getParam('offer_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
