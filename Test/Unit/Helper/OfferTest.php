<?php
/**
 *  Offer helper test.
 *
 * @category  Mickael
 * @package   Mickael\Offers
 * @author    Mickael BAILLOT <mickael.baillot@smile.fr>
 */
namespace Mickael\Offers\Helper\Test\Unit\Helper;

use \PHPUnit\Framework\TestCase;
use \Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

class OfferTest extends TestCase
{
    /**
     * @var ObjectManager
     */
    protected $objectManager;

    /**
     * Setting up tests
     */
    protected function setUp()
    {
        $this->objectManager   = new ObjectManager($this);
    }


}
