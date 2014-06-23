<?php

namespace Les\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restaurants
 *
 * @ORM\Entity(repositoryClass="Les\DataBundle\Entity\RestaurantsRepository")
 * @ORM\Table(name="restaurants")
 *
 */
class Restaurants
{


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_of_reservations", type="integer",  nullable=true)
     */
    private $numberOfReservations;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="cuisine", type="string", length=50, nullable=true)
     */
    private $cuisine;





    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;


    /**
     * @var string
     *
     * @ORM\Column(name="special_1", type="string", length=200, nullable=true)
     */
    private $special_1;

    /**
     * @var string
     *
     * @ORM\Column(name="special_2", type="string", length=200, nullable=true)
     */
    private $special_2;

    /**
     * @var string
     *
     * @ORM\Column(name="special_3", type="string", length=200, nullable=true)
     */
    private $special_3;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_price_max", type="integer", nullable=true)
     */
    private $menu_price_max;


    /**
     * @var integer
     *
     * @ORM\Column(name="menu_price_min", type="integer", nullable=true)
     */
    private $menu_price_min;


    /**
     * @var integer
     *
     * @ORM\Column(name="meal_price_max", type="integer", nullable=true)
     */
    private $meal_price_max;


    /**
     * @var integer
     *
     * @ORM\Column(name="meal_price_min", type="integer", nullable=true)
     */
    private $meal_price_min;

    /**
     * @var boolean
     *
     * @ORM\Column(name="payment_visa", type="boolean" , nullable=true)
     */
    private $payment_visa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="payment_master", type="boolean" , nullable=true)
     */
    private $payment_master;

    /**
     * @var boolean
     *
     * @ORM\Column(name="payment_ticket", type="boolean" , nullable=true)
     */
    private $payment_ticket;

    /**
     *
     * @ORM\Column(name="vacation_period_start", type="date",  nullable=true)
     */
    private $vacation_period_start;

    /**
     *
     * @ORM\Column(name="vacation_period_end", type="date", nullable=true)
     */
    private $vacation_period_end;

    /**
     *
     * @ORM\Column(name="servicing_hour_start", type="time",  nullable=true)
     */
    private $servicing_hour_start;

    /**
     *
     * @ORM\Column(name="servicing_hour_end", type="time", nullable=true)
     */
    private $servicing_hour_end;


    /**
     * @var boolean
     *
     * @ORM\Column(name="terrace", type="boolean", nullable=true)
     */
    private $terrace;

    /**
     * @var string
     *
     * @ORM\Column(name="guides", type="string", length=500, nullable=true)
     */
    private $guides;

    /**
     * @var string
     *
     * @ORM\Column(name="languages", type="string", length=500, nullable=true)
     */
    private $languages;


    /**
     * @param int $numberOfReservations
     */
    public function setNumberOfReservations($numberOfReservations)
    {
        $this->numberOfReservations = $numberOfReservations;
    }

    /**
     * @return int
     */
    public function getNumberOfReservations()
    {
        return $this->numberOfReservations;
    }


    /**
     * Set address
     *
     * @param string $address
     * @return Restaurants
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set cuisine
     *
     * @param string $cuisine
     * @return Restaurants
     */
    public function setCuisine($cuisine)
    {
        $this->cuisine = $cuisine;

        return $this;
    }

    /**
     * Get cuisine
     *
     * @return string 
     */
    public function getCuisine()
    {
        return $this->cuisine;
    }



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     *  Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $guides
     */
    public function setGuides($guides)
    {
        $this->guides = $guides;
    }

    /**
     * @return string
     */
    public function getGuides()
    {
        return $this->guides;
    }

    /**
     * @param string $languages
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;
    }

    /**
     * @return string
     */
    public function getLanguages()
    {
        return $this->languages;
    }


    /**
     * @param string $special_1
     */
    public function setSpecial1($special_1)
    {
        $this->special_1 = $special_1;
    }

    /**
     * @return string
     */
    public function getSpecial1()
    {
        return $this->special_1;
    }

    /**
     * @param string $special_2
     */
    public function setSpecial2($special_2)
    {
        $this->special_2 = $special_2;
    }

    /**
     * @return string
     */
    public function getSpecial2()
    {
        return $this->special_2;
    }

    /**
     * @param string $special_3
     */
    public function setSpecial3($special_3)
    {
        $this->special_3 = $special_3;
    }

    /**
     * @return string
     */
    public function getSpecial3()
    {
        return $this->special_3;
    }







    /**
     * Set menu_price_max
     *
     * @param integer $menuPriceMax
     * @return Restaurants
     */
    public function setMenuPriceMax($menuPriceMax)
    {
        $this->menu_price_max = $menuPriceMax;

        return $this;
    }

    /**
     * Get menu_price_max
     *
     * @return integer 
     */
    public function getMenuPriceMax()
    {
        return $this->menu_price_max;
    }

    /**
     * Set menu_price_min
     *
     * @param integer $menuPriceMin
     * @return Restaurants
     */
    public function setMenuPriceMin($menuPriceMin)
    {
        $this->menu_price_min = $menuPriceMin;

        return $this;
    }

    /**
     * Get menu_price_min
     *
     * @return integer 
     */
    public function getMenuPriceMin()
    {
        return $this->menu_price_min;
    }

    /**
     * Set meal_price_max
     *
     * @param integer $mealPriceMax
     * @return Restaurants
     */
    public function setMealPriceMax($mealPriceMax)
    {
        $this->meal_price_max = $mealPriceMax;

        return $this;
    }

    /**
     * Get meal_price_max
     *
     * @return integer 
     */
    public function getMealPriceMax()
    {
        return $this->meal_price_max;
    }

    /**
     * Set meal_price_min
     *
     * @param integer $mealPriceMin
     * @return Restaurants
     */
    public function setMealPriceMin($mealPriceMin)
    {
        $this->meal_price_min = $mealPriceMin;

        return $this;
    }

    /**
     * Get meal_price_min
     *
     * @return integer 
     */
    public function getMealPriceMin()
    {
        return $this->meal_price_min;
    }

    /**
     * Set payment_visa
     *
     * @param  boolean $paymentVisa
     * @return Restaurants
     */
    public function setPaymentVisa($paymentVisa)
    {
        $this->payment_visa = $paymentVisa;

        return $this;
    }

    /**
     * Get payment_visa
     *
     * @return  boolean 
     */
    public function getPaymentVisa()
    {
        return $this->payment_visa;
    }

    /**
     * Set payment_master
     *
     * @param  boolean $paymentMaster
     * @return Restaurants
     */
    public function setPaymentMaster($paymentMaster)
    {
        $this->payment_master = $paymentMaster;

        return $this;
    }

    /**
     * Get payment_master
     *
     * @return  boolean 
     */
    public function getPaymentMaster()
    {
        return $this->payment_master;
    }

    /**
     * Set payment_ticket
     *
     * @param  boolean $paymentTicket
     * @return Restaurants
     */
    public function setPaymentTicket($paymentTicket)
    {
        $this->payment_ticket = $paymentTicket;

        return $this;
    }

    /**
     * Get payment_ticket
     *
     * @return  boolean 
     */
    public function getPaymentTicket()
    {
        return $this->payment_ticket;
    }

    /**
     * Set vacation_period_start
     *
     * @param \DateTime $vacationPeriodStart
     * @return Restaurants
     */
    public function setVacationPeriodStart($vacationPeriodStart)
    {
        $this->vacation_period_start = $vacationPeriodStart;

        return $this;
    }

    /**
     * Get vacation_period_start
     *
     * @return \DateTime 
     */
    public function getVacationPeriodStart()
    {
        return $this->vacation_period_start;
    }

    /**
     * Set vacation_period_end
     *
     * @param \DateTime $vacationPeriodEnd
     * @return Restaurants
     */
    public function setVacationPeriodEnd($vacationPeriodEnd)
    {
        $this->vacation_period_end = $vacationPeriodEnd;

        return $this;
    }

    /**
     * Get vacation_period_end
     *
     * @return \DateTime 
     */
    public function getVacationPeriodEnd()
    {
        return $this->vacation_period_end;
    }

    /**
     * Set servicing_hour_start
     *
     * @param \DateTime $servicingHourStart
     * @return Restaurants
     */
    public function setServicingHourStart($servicingHourStart)
    {
        $this->servicing_hour_start = $servicingHourStart;

        return $this;
    }

    /**
     * Get servicing_hour_start
     *
     * @return \DateTime 
     */
    public function getServicingHourStart()
    {
        return $this->servicing_hour_start;
    }

    /**
     * Set servicing_hour_end
     *
     * @param \DateTime $servicingHourEnd
     * @return Restaurants
     */
    public function setServicingHourEnd($servicingHourEnd)
    {
        $this->servicing_hour_end = $servicingHourEnd;

        return $this;
    }

    /**
     * Get servicing_hour_end
     *
     * @return \DateTime 
     */
    public function getServicingHourEnd()
    {
        return $this->servicing_hour_end;
    }

    /**
     * Set terrace
     *
     * @param  boolean $terrace
     * @return Restaurants
     */
    public function setTerrace($terrace)
    {
        $this->terrace = $terrace;

        return $this;
    }

    /**
     * Get terrace
     *
     * @return  boolean 
     */
    public function getTerrace()
    {
        return $this->terrace;
    }


    /**
     * @var boolean
     *
     * @ORM\Column(name="mon1", type="boolean", nullable=false)
     */
    private $mon1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mon2", type="boolean", nullable=false)
     */
    private $mon2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mon3", type="boolean", nullable=false)
     */
    private $mon3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tue1", type="boolean", nullable=false)
     */
    private $tue1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tue2", type="boolean", nullable=false)
     */
    private $tue2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tue3", type="boolean", nullable=false)
     */
    private $tue3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="wed1", type="boolean", nullable=false)
     */
    private $wed1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="wed2", type="boolean", nullable=false)
     */
    private $wed2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="wed3", type="boolean", nullable=false)
     */
    private $wed3;


    /**
     * @var boolean
     *
     * @ORM\Column(name="thur1", type="boolean", nullable=false)
     */
    private $thur1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="thur2", type="boolean", nullable=false)
     */
    private $thur2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="thur3", type="boolean", nullable=false)
     */
    private $thur3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fri1", type="boolean", nullable=false)
     */
    private $fri1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fri2", type="boolean", nullable=false)
     */
    private $fri2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fri3", type="boolean", nullable=false)
     */
    private $fri3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sat1", type="boolean", nullable=false)
     */
    private $sat1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sat2", type="boolean", nullable=false)
     */
    private $sat2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sat3", type="boolean", nullable=false)
     */
    private $sat3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sun1", type="boolean", nullable=false)
     */
    private $sun1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sun2", type="boolean", nullable=false)
     */
    private $sun2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sun3", type="boolean", nullable=false)
     */
    private $sun3;


    /**
     * Set mon1
     *
     * @param boolean $mon1
     * @return OpeningSchedule
     */
    public function setMon1($mon1)
    {
        $this->mon1 = $mon1;

        return $this;
    }

    /**
     * Get mon1
     *
     * @return boolean
     */
    public function getMon1()
    {
        return $this->mon1;
    }

    /**
     * Set mon2
     *
     * @param boolean $mon2
     * @return OpeningSchedule
     */
    public function setMon2($mon2)
    {
        $this->mon2 = $mon2;

        return $this;
    }

    /**
     * Get mon2
     *
     * @return boolean
     */
    public function getMon2()
    {
        return $this->mon2;
    }

    /**
     * Set mon3
     *
     * @param boolean $mon3
     * @return OpeningSchedule
     */
    public function setMon3($mon3)
    {
        $this->mon3 = $mon3;

        return $this;
    }

    /**
     * Get mon3
     *
     * @return boolean
     */
    public function getMon3()
    {
        return $this->mon3;
    }

    /**
     * Set tue1
     *
     * @param boolean $tue1
     * @return OpeningSchedule
     */
    public function setTue1($tue1)
    {
        $this->tue1 = $tue1;

        return $this;
    }

    /**
     * Get tue1
     *
     * @return boolean
     */
    public function getTue1()
    {
        return $this->tue1;
    }

    /**
     * Set tue2
     *
     * @param boolean $tue2
     * @return OpeningSchedule
     */
    public function setTue2($tue2)
    {
        $this->tue2 = $tue2;

        return $this;
    }

    /**
     * Get tue2
     *
     * @return boolean
     */
    public function getTue2()
    {
        return $this->tue2;
    }

    /**
     * Set tue3
     *
     * @param boolean $tue3
     * @return OpeningSchedule
     */
    public function setTue3($tue3)
    {
        $this->tue3 = $tue3;

        return $this;
    }

    /**
     * Get tue3
     *
     * @return boolean
     */
    public function getTue3()
    {
        return $this->tue3;
    }

    /**
     * Set wed1
     *
     * @param boolean $wed1
     * @return OpeningSchedule
     */
    public function setWed1($wed1)
    {
        $this->wed1 = $wed1;

        return $this;
    }

    /**
     * Get wed1
     *
     * @return boolean
     */
    public function getWed1()
    {
        return $this->wed1;
    }

    /**
     * Set wed2
     *
     * @param boolean $wed2
     * @return OpeningSchedule
     */
    public function setWed2($wed2)
    {
        $this->wed2 = $wed2;

        return $this;
    }

    /**
     * Get wed2
     *
     * @return boolean
     */
    public function getWed2()
    {
        return $this->wed2;
    }

    /**
     * Set wed3
     *
     * @param boolean $wed3
     * @return OpeningSchedule
     */
    public function setWed3($wed3)
    {
        $this->wed3 = $wed3;

        return $this;
    }

    /**
     * Get wed3
     *
     * @return boolean
     */
    public function getWed3()
    {
        return $this->wed3;
    }

    /**
     * Set thur1
     *
     * @param boolean $thur1
     * @return OpeningSchedule
     */
    public function setThur1($thur1)
    {
        $this->thur1 = $thur1;

        return $this;
    }

    /**
     * Get thur1
     *
     * @return boolean
     */
    public function getThur1()
    {
        return $this->thur1;
    }

    /**
     * Set thur2
     *
     * @param boolean $thur2
     * @return OpeningSchedule
     */
    public function setThur2($thur2)
    {
        $this->thur2 = $thur2;

        return $this;
    }

    /**
     * Get thur2
     *
     * @return boolean
     */
    public function getThur2()
    {
        return $this->thur2;
    }

    /**
     * Set thur3
     *
     * @param boolean $thur3
     * @return OpeningSchedule
     */
    public function setThur3($thur3)
    {
        $this->thur3 = $thur3;

        return $this;
    }

    /**
     * Get thur3
     *
     * @return boolean
     */
    public function getThur3()
    {
        return $this->thur3;
    }

    /**
     * Set fri1
     *
     * @param boolean $fri1
     * @return OpeningSchedule
     */
    public function setFri1($fri1)
    {
        $this->fri1 = $fri1;

        return $this;
    }

    /**
     * Get fri1
     *
     * @return boolean
     */
    public function getFri1()
    {
        return $this->fri1;
    }

    /**
     * Set fri2
     *
     * @param boolean $fri2
     * @return OpeningSchedule
     */
    public function setFri2($fri2)
    {
        $this->fri2 = $fri2;

        return $this;
    }

    /**
     * Get fri2
     *
     * @return boolean
     */
    public function getFri2()
    {
        return $this->fri2;
    }

    /**
     * Set fri3
     *
     * @param boolean $fri3
     * @return OpeningSchedule
     */
    public function setFri3($fri3)
    {
        $this->fri3 = $fri3;

        return $this;
    }

    /**
     * Get fri3
     *
     * @return boolean
     */
    public function getFri3()
    {
        return $this->fri3;
    }

    /**
     * Set sat1
     *
     * @param boolean $sat1
     * @return OpeningSchedule
     */
    public function setSat1($sat1)
    {
        $this->sat1 = $sat1;

        return $this;
    }

    /**
     * Get sat1
     *
     * @return boolean
     */
    public function getSat1()
    {
        return $this->sat1;
    }

    /**
     * Set sat2
     *
     * @param boolean $sat2
     * @return OpeningSchedule
     */
    public function setSat2($sat2)
    {
        $this->sat2 = $sat2;

        return $this;
    }

    /**
     * Get sat2
     *
     * @return boolean
     */
    public function getSat2()
    {
        return $this->sat2;
    }

    /**
     * Set sat3
     *
     * @param boolean $sat3
     * @return OpeningSchedule
     */
    public function setSat3($sat3)
    {
        $this->sat3 = $sat3;

        return $this;
    }

    /**
     * Get sat3
     *
     * @return boolean
     */
    public function getSat3()
    {
        return $this->sat3;
    }

    /**
     * Set sun1
     *
     * @param boolean $sun1
     * @return OpeningSchedule
     */
    public function setSun1($sun1)
    {
        $this->sun1 = $sun1;

        return $this;
    }

    /**
     * Get sun1
     *
     * @return boolean
     */
    public function getSun1()
    {
        return $this->sun1;
    }

    /**
     * Set sun2
     *
     * @param boolean $sun2
     * @return OpeningSchedule
     */
    public function setSun2($sun2)
    {
        $this->sun2 = $sun2;

        return $this;
    }

    /**
     * Get sun2
     *
     * @return boolean
     */
    public function getSun2()
    {
        return $this->sun2;
    }

    /**
     * Set sun3
     *
     * @param boolean $sun3
     * @return OpeningSchedule
     */
    public function setSun3($sun3)
    {
        $this->sun3 = $sun3;

        return $this;
    }

    /**
     * Get sun3
     *
     * @return boolean
     */
    public function getSun3()
    {
        return $this->sun3;
    }
}
