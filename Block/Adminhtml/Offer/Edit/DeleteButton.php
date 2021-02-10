<?php
/**
* Mickael Offers Adminhtml Offer edit Delete button Block.
*
* @author    Mickael BAILLOT <mickael.bailot@gmail.com>
* @category  Mickael
* @package   Mickael\Offers
*/
declare(strict_types=1);

namespace Mickael\Offers\Block\Adminhtml\Offer\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
* Class DeleteButton.
*/
class DeleteButton extends GenericButton implements ButtonProviderInterface
{

    /**
     * @return array
     */
    public function getButtonData()
    {
        $data = [];
        if ($this->getModelId()) {
            $data = [
                'label' => __('Delete Offer'),
                'class' => 'delete',
                'on_click' => 'deleteConfirm(\'' . __(
                    'Are you sure you want to do this?'
                ) . '\', \'' . $this->getDeleteUrl() . '\')',
                'sort_order' => 20,
            ];
        }
        return $data;
    }

    /**
     * Get URL for delete button
     *
     * @return string
     */
    public function getDeleteUrl()
    {
        return $this->getUrl('*/*/delete', ['offer_id' => $this->getModelId()]);
    }
}
