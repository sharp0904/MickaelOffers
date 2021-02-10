<?php
/**
* Mickael Offers Catalog category view Offer Block.
*
* @author    Mickael BAILLOT <mickael.bailot@gmail.com>
* @category  Mickael
* @package   Mickael\Offers
*/
namespace Mickael\Offers\Block\Catalog\Category\View;

use Magento\Catalog\Model\Category;
use DateTime;
use \Magento\Framework\View\Element\Template\Context;
use \Mickael\Offers\Model\OfferFactory;
use \Magento\Framework\Registry;

/**
* Class Offer.
*/
class Offer extends \Magento\Framework\View\Element\Template
{

    protected $_offerFactory;

    protected $_registry;

    /**
     * @param Context $context
     * @param OfferFactory $offerFactory
     * @param Registry $registry
     * @param array $data
     *
     */
    public function __construct(
        Context $context,
        OfferFactory $offerFactory,
        Registry $registry,
        array $data = []
    ) {
        $this->_offerFactory = $offerFactory;
        $this->_registry = $registry;
        parent::__construct($context, $data);
    }

    /**
    * @return array $result
    */
    public function getCurrentOffersByCategory()
    {
      $category = $this->getCurrentCategory();

      $offer = $this->_offerFactory->create();
      $offerCollection = $offer->getCollection();
      $result = [];

      $currentTimeStamp = time();

      foreach($offerCollection as $offer) {
        if (!$offer->getCategories()) {
          continue;
        }

        $categories = explode(',', $offer->getCategories());

        $datetimeStart = strtotime(str_replace("/", "-", $offer->getStartDate()));
        $datetimeEnd   = strtotime(str_replace("/", "-", $offer->getEndDate()));

        if (in_array($category->getId(), $categories)
          && $currentTimeStamp < $datetimeEnd
          && $currentTimeStamp > $datetimeStart) {
            $result[] = $offer;
        }
      }

      return $result;
    }

    /**
    * @return Mage\Catalog\Category current category
    */
    public function getCurrentCategory()
    {
        return $this->_registry->registry('current_category');
    }



}
