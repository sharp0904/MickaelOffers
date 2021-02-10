<?php
/**
 *  Offer test.
 *
 * @category  Mickael
 * @package   Mickael\Offers
 * @author    Mickael BAILLOT <mickael.baillot@smile.fr>
 */
namespace Mickael\Offers\Test\Unit\Model;

use \PHPUnit\Framework\TestCase;
use \Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use \Mickael\Offers\Model\Offer as ModelOffer;

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

    /**
     * Get the seller model
     *
     * @return ModelOffer
     */
    protected function getOfferModel()
    {
        /** @var ModelOffer $model */
        $model = $this->objectManager->getObject(ModelOffer::class);

        return $model;
    }

    /**
     * Test the name methods
     */
    public function testLabel()
    {
        $value = 'test';

        $model = $this->getOfferModel();

        $model->setName($value);

        $this->assertEquals($value, $model->getName());
    }

    /**
     * Test the created_at methods
     */
    public function testCreatedAt()
    {
        $value = date('Y-m-d H:i:s');

        $model = $this->getOfferModel();

        $model->setCreatedAt($value);

        $this->assertEquals($value, $model->getCreatedAt());
    }

    /**
     * Test the updated_at methods
     */
    public function testUpdatedAt()
    {
        $value = date('Y-m-d H:i:s');

        $model = $this->getOfferModel();

        $model->setUpdatedAt($value);

        $this->assertEquals($value, $model->getUpdatedAt());
    }

    /**
     * Test the offer_id methods
     */
    public function testOfferId()
    {
        $value = '99 ';

        $model = $this->getOfferModel();

        $model->setOfferId($value);

        $this->assertSame(intval($value), intval($model->getOfferId()));
    }
}
