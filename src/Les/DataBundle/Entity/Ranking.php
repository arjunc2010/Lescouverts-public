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
 * @ORM\Table(name="ranking")
 *
 */
class Ranking {

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
     * @ORM\Column(name="rank", type="integer",  nullable=false)
     */
    private $rank;


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
     * Set rank
     *
     * @param integer $rank
     * @return Ranking
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }
}
