<?php
/**
* Mickael Offers Adminhtml Offer Controller.
*
* @author    Mickael BAILLOT <mickael.bailot@gmail.com>
* @copyright 2021 mickaelbaillot
*/
declare(strict_types=1);

namespace Mickael\Offers\Controller\Adminhtml;

abstract class Offer extends \Magento\Backend\App\Action
{

    protected $_coreRegistry;
    const ADMIN_RESOURCE = 'Mickael_Offers::top_level';

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry
    ) {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context);
    }

    /**
     * Init page.
     *
     * @param \Magento\Backend\Model\View\Result\Page $resultPage
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function initPage($resultPage)
    {
        $resultPage->setActiveMenu(self::ADMIN_RESOURCE)
            ->addBreadcrumb(__('Mickael'), __('Mickael'))
            ->addBreadcrumb(__('Offer'), __('Offer'));
        return $resultPage;
    }
}
