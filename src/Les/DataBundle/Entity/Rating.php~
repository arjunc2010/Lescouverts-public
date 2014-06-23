<?php
/**
 * Created by PhpStorm.
 * User: ACE1
 * Date: 6/11/14
 * Time: 8:38 PM
 */

namespace Les\DataBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Entity
 * @ORM\Table(name="rating")
 *
 */
class Rating {

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
     * @ORM\Column(name="resto_id", type="integer",  nullable=false)
     */
    private $restoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="service", type="integer",  nullable=false)
     */
    private $service;

    /**
     * @var integer
     *
     * @ORM\Column(name="platter", type="integer",  nullable=false)
     */
    private $platter;

    /**
     * @var integer
     *
     * @ORM\Column(name="quality", type="integer",  nullable=false)
     */
    private $quality;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_created", type="date",  nullable=false)
     */
    private $date;

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
     * Set restoId
     *
     * @param integer $restoId
     * @return Rating
     */
    public function setRestoId($restoId)
    {
        $this->restoId = $restoId;

        return $this;
    }

    /**
     * Get restoId
     *
     * @return integer 
     */
    public function getRestoId()
    {
        return $this->restoId;
    }

    /**
     * Set service
     *
     * @param integer $service
     * @return Rating
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return integer 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set platter
     *
     * @param integer $platter
     * @return Rating
     */
    public function setPlatter($platter)
    {
        $this->platter = $platter;

        return $this;
    }

    /**
     * Get platter
     *
     * @return integer 
     */
    public function getPlatter()
    {
        return $this->platter;
    }

    /**
     * Set quality
     *
     * @param integer $quality
     * @return Rating
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     *
     * @return integer 
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Rating
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
}
