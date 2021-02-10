<?php
/**
* Mickael Offers Adminhtml Block.
*
* @author    Mickael BAILLOT <mickael.bailot@gmail.com>
* @copyright 2021 mickaelbaillot
*/
namespace Mickael\Offers\Block\Adminhtml;

/**
* Class Offer.
*/
class Offer extends \Magento\Backend\Block\Widget\Grid\Container
{

	protected function _construct()
	{
		$this->_controller = 'adminhtml_post';
		$this->_blockGroup = 'Mickael_Offers';
		$this->_headerText = __('Offers');
		$this->_addButtonLabel = __('Create New Offer');
		parent::_construct();
	}
}
