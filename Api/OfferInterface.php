<?php
/**
* Mickael Offers Api interface.
*
* @author    Mickael BAILLOT <mickael.bailot@gmail.com>
* @category  Mickael
* @package   Mickael\Offers
*/

declare(strict_types=1);

namespace Mickael\Offers\Api;


interface OfferInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

  /**
  * Offer id.
  *
  * @var string
  */
  const OFFER_ID = 'offer_id';

  /**
  * Label.
  *
  * @var string
  */
  const LABEL = 'label';

  /**
  * Categories.
  *
  * @var string
  */
  const CATEGORIES = 'categories';

  /**
  * Start date.
  *
  * @var string
  */
  const START_DATE = 'start_date';

  /**
  * End date.
  *
  * @var string
  */
  const END_DATE = 'end_date';

  /**
  * Link.
  *
  * @var string
  */
  const LINK = 'link';

  /**
  * Image path.
  *
  * @var string
  */
  const IMAGE = 'image_path';

  /**
  * Get offer_id
  * @return string|null
  */
  public function getOfferId();

  /**
  * Set offer_id
  * @param string $offerId
  * @return OfferInterface
  */
  public function setOfferId($offerId);

  /**
  * Get label
  * @return string|null
  */
  public function getLabel();

  /**
  * Set label
  * @param string $label
  * @return OfferInterface
  */
  public function setLabel($label);

  /**
  * Get image
  * @return string|null
  */
  public function getImage();

  /**
  * Set image
  * @param string $image
  * @return OfferInterface
  */
  public function setImage($image);

  /**
  * Get link
  * @return string|null
  */
  public function getLink();

  /**
  * Set link
  * @param string $link
  * @return OfferInterface
  */
  public function setLink($link);

  /**
  * Get categories
  * @return string|null
  */
  public function getCategories();

  /**
  * Set categories
  * @param string $categories
  * @return OfferInterface
  */
  public function setCategories($categories);

  /**
  * Get start_date
  * @return string|null
  */
  public function getStartDate();

  /**
  * Set start_date
  * @param string $startDate
  * @return OfferInterface
  */
  public function setStartDate($startDate);

  /**
  * Get end_date
  * @return string|null
  */
  public function getEndDate();

  /**
  * Set end_date
  * @param string $endDate
  * @return OfferInterface
  */
  public function setEndDate($endDate);
}
