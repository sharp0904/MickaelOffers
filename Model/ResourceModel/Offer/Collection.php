<?php
/**
 *  ResourceModel Offer Collection.
 *
 * @category  Mickael
 * @package   Mickael\Offers
 * @author    Mickael BAILLOT <mickael.baillot@smile.fr>
 */
declare(strict_types=1);

namespace Mickael\Offers\Model\ResourceModel\Offer;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'offer_id';

    protected $_eventPrefix = 'mickael_offers_collection';
    protected $_eventObject = 'offer_collection';


    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Mickael\Offers\Model\Offer',
            'Mickael\Offers\Model\ResourceModel\Offer'
        );
    }
}
