<?php
/**
 *  Model Data Offer.
 *
 * @category  Mickael
 * @package   Mickael\Offers
 * @author    Mickael BAILLOT <mickael.baillot@smile.fr>
 */
declare(strict_types=1);

namespace Mickael\Offers\Model\Data;

use Mickael\Offers\Api\OfferInterface;

class Offer extends \Magento\Framework\Api\AbstractExtensibleObject implements OfferInterface
{

    /**
     * Get offer_id
     * @return string|null
     */
    public function getOfferId()
    {
        return $this->_get(self::OFFER_ID);
    }

    /**
     * Set offer_id
     * @param string $offerId
     * @return OfferInterface
     */
    public function setOfferId($offerId)
    {
        return $this->setData(self::OFFER_ID, $offerId);
    }

    /**
     * Get label
     * @return string|null
     */
    public function getLabel()
    {
        return $this->_get(self::LABEL);
    }

    /**
     * Set label
     * @param string $label
     * @return OfferInterface
     */
    public function setLabel($label)
    {
        return $this->setData(self::LABEL, $label);
    }

    /**
     * Get image
     * @return string|null
     */
    public function getImage()
    {
        return $this->_get(self::IMAGE);
    }

    /**
     * Set image
     * @param string $image
     * @return OfferInterface
     */
    public function setImage($image)
    {
        return $this->setData(self::IMAGE, $image);
    }

    /**
     * Get link
     * @return string|null
     */
    public function getLink()
    {
        return $this->_get(self::LINK);
    }

    /**
     * Set link
     * @param string $link
     * @return OfferInterface
     */
    public function setLink($link)
    {
        return $this->setData(self::LINK, $link);
    }

    /**
     * Get categories
     * @return string|null
     */
    public function getCategories()
    {
        return $this->_get(self::CATEGORIES);
    }

    /**
     * Set categories
     * @param string $categories
     * @return OfferInterface
     */
    public function setCategories($categories)
    {
        return $this->setData(self::CATEGORIES, $categories);
        error_log('set categ', 3, '/tmp/mibai.log');
    }

    /**
     * Get start_date
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->_get(self::START_DATE);
    }

    /**
     * Set start_date
     * @param string $startDate
     * @return OfferInterface
     */
    public function setStartDate($startDate)
    {
        return $this->setData(self::START_DATE, $startDate);
    }

    /**
     * Get end_date
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->_get(self::END_DATE);
    }

    /**
     * Set end_date
     * @param string $endDate
     * @return OfferInterface
     */
    public function setEndDate($endDate)
    {
        return $this->setData(self::END_DATE, $endDate);
    }
}
