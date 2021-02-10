<?php
/**
 *  ResourceModel Offer.
 *
 * @category  Mickael
 * @package   Mickael\Offers
 * @author    Mickael BAILLOT <mickael.baillot@smile.fr>
 */
namespace Mickael\Offers\Model\ResourceModel;


use Magento\Framework\EntityManager\EntityManager;
use Magento\Framework\EntityManager\MetadataPool;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;
use Zend\Db\Sql\Select;


class Offer extends AbstractDb
{

    /**
     * @param Context $context
     */
    public function __construct(
        Context $context
    ) {
      parent::__construct($context);
    }

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'mickael_offers',
            'offer_id'
        );
    }

}
