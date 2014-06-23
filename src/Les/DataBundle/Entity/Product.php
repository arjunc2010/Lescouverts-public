<?php

namespace Les\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Entity
 * @ORM\Table(name="products")
 *
 */
class Product
{

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var integer
     *
     * @ORM\Column(name="shop_id", type="integer", nullable=false)
     */
    private $shopID;


    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=50, nullable=true)
     */
    private $name;


    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=30, nullable=false)
     */
    private $category;


    /**
     * @var string
     *
     * @ORM\Column(name="product_origin", type="string", length=50, nullable=true)
     */
    private $origin;


    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=30, nullable=true)
     */
    private $country;


    /**
     * @var string
     *
     * @ORM\Column(name="price_per", type="string", length=10, nullable=true)
     */
    private $pricePer;


    /**
     * @var float
     *
     * @ORM\Column(name="quantity_initial", type="float", nullable=true)
     */
    private $quantityInitial;


    /**
     * @var string
     *
     * @ORM\Column(name="des_unit", type="string", length=15, nullable=true)
     */
    private $desUnit;


    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=15, nullable=true)
     */
    private $price;


    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="string", length=10, nullable=true)
     */
    private $discount;


    /**
     * @var string
     *
     * @ORM\Column(name="discount_price", type="string", length=15, nullable=true)
     */
    private $discountPrice;


    /**
     * @ORM\Column(name="valid_from", type="date", nullable=true)
     */
    private $validFrom;


    /**
     * @ORM\Column(name="valid_till", type="date", nullable=true)
     */
    private $validTill;


    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string",  nullable=true)
     */
    private $description;

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $desUnit
     */
    public function setDesUnit($desUnit)
    {
        $this->desUnit = $desUnit;
    }

    /**
     * @return string
     */
    public function getDesUnit()
    {
        return $this->desUnit;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param string $discountPrice
     */
    public function setDiscountPrice($discountPrice)
    {
        $this->discountPrice = $discountPrice;
    }

    /**
     * @return string
     */
    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $origin
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $pricePer
     */
    public function setPricePer($pricePer)
    {
        $this->pricePer = $pricePer;
    }

    /**
     * @return string
     */
    public function getPricePer()
    {
        return $this->pricePer;
    }

    /**
     * @param float $quantityInitial
     */
    public function setQuantityInitial($quantityInitial)
    {
        $this->quantityInitial = $quantityInitial;
    }

    /**
     * @return float
     */
    public function getQuantityInitial()
    {
        return $this->quantityInitial;
    }

    /**
     * @param int $shopID
     */
    public function setShopID($shopID)
    {
        $this->shopID = $shopID;
    }

    /**
     * @return int
     */
    public function getShopID()
    {
        return $this->shopID;
    }

    /**
     * @param mixed $validFrom
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
    }

    /**
     * @return mixed
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param mixed $validTill
     */
    public function setValidTill($validTill)
    {
        $this->validTill = $validTill;
    }

    /**
     * @return mixed
     */
    public function getValidTill()
    {
        return $this->validTill;
    }

    /**
     * @return string
     */


}
