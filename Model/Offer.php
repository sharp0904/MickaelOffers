<?php
/**
 *  Model Offer.
 *
 * @category  Mickael
 * @package   Mickael\Offers
 * @author    Mickael BAILLOT <mickael.baillot@smile.fr>
 */
namespace Mickael\Offers\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Mickael\Offers\Model\ResourceModel\Offer as OfferResource;

class Offer extends AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    /**
     * Offer cache tag
     */
    const CACHE_TAG = 'mickael_offer';

    protected $_cacheTag = 'mickael_offers_offer';

    protected $_eventPrefix = 'mickael_offers_offer';


    /**
     * Magento Constructor
     */
    protected function _construct()
    {
        $this->_init(
            OfferResource::class
        );
    }


    public function getIdentities()
    {
      return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
      $values = [];

      return $values;
    }


}
