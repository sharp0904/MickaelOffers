<?php
/**
* Mickael Offers Adminhtml Offer edit Save and continue button Block.
*
* @author    Mickael BAILLOT <mickael.bailot@gmail.com>
* @category  Mickael
* @package   Mickael\Offers
*/
declare(strict_types=1);

namespace Mickael\Offers\Block\Adminhtml\Offer\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
* Class SaveAndContinueButton.
*/
class SaveAndContinueButton extends GenericButton implements ButtonProviderInterface
{

    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Save and Continue Edit'),
            'class' => 'save',
            'data_attribute' => [
                'mage-init' => [
                    'button' => ['event' => 'saveAndContinueEdit'],
                ],
            ],
            'sort_order' => 80,
        ];
    }
}
