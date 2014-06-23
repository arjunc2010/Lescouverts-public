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
 * Recommend
 *
 * @ORM\Entity
 * @ORM\Table(name="recommend")
 *
 */
class Recommend {

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
     * @ORM\Column(name="yes", type="integer",  nullable=false)
     */
    private $yes;

    /**
     * @var integer
     *
     * @ORM\Column(name="no", type="integer",  nullable=false)
     */
    private $no;

    /**
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
     * @return Recommend
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
     * Set yes
     *
     * @param integer $yes
     * @return Recommend
     */
    public function setYes($yes)
    {
        $this->yes = $yes;

        return $this;
    }

    /**
     * Get yes
     *
     * @return integer 
     */
    public function getYes()
    {
        return $this->yes;
    }

    /**
     * Set no
     *
     * @param integer $no
     * @return Recommend
     */
    public function setNo($no)
    {
        $this->no = $no;

        return $this;
    }

    /**
     * Get no
     *
     * @return integer 
     */
    public function getNo()
    {
        return $this->no;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Recommend
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
