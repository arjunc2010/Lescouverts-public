<?php

namespace Les\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Party
 *
 * @ORM\Entity
 * @ORM\Table(name="party_calendar")
 *
 */
class Party
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
     * @ORM\Column(name="resto_id", type="integer",  nullable=true)
     */
    private $restoID;


    /**
     * @var string
     *
     * @ORM\Column(name="organiser", type="string", length=100, nullable=true)
     */
    private $organiser;


    /**
     * @var string
     *
     * @ORM\Column(name="event_name", type="string", length=150, nullable=true)
     */
    private $name;


    /**
     *
     * @ORM\Column(name="event_date", type="date", nullable=true)
     */
    private $date;


    /**
     *
     * @ORM\Column(name="event_start", type="time", nullable=true)
     */
    private $start;


    /**
     *
     * @ORM\Column(name="event_end", type="time",  nullable=true)
     */
    private $end;


    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="menu", type="string", length=300, nullable=true)
     */
    private $menu;

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
     * Set restoID
     *
     * @param integer $restoID
     * @return Party
     */
    public function setRestoID($restoID)
    {
        $this->restoID = $restoID;

        return $this;
    }

    /**
     * Get restoID
     *
     * @return integer 
     */
    public function getRestoID()
    {
        return $this->restoID;
    }

    /**
     * Set organiser
     *
     * @param string $organiser
     * @return Party
     */
    public function setOrganiser($organiser)
    {
        $this->organiser = $organiser;

        return $this;
    }

    /**
     * Get organiser
     *
     * @return string 
     */
    public function getOrganiser()
    {
        return $this->organiser;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Party
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Party
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     * @return Party
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime 
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     * @return Party
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime 
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Party
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $menu
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;
    }

    /**
     * @return string
     */
    public function getMenu()
    {
        return $this->menu;
    }


}
