<?php
/**
 * Created by PhpStorm.
 * User: ACE1
 * Date: 6/11/14
 * Time: 8:47 PM
 */

namespace Les\DataBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Entity
 * @ORM\Table(name="news")
 *
 */

class News {

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
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=30,  nullable=false)
     */
    private $category;


    /**
     *
     * @ORM\Column(name="text", type="string",  nullable=false)
     */
    private $text;

    /**
     *
     * @ORM\Column(name="date_created", type="date",  nullable=false)
     */
    private $dateCreated;

    /**
     *
     * @ORM\Column(name="date_modified", type="date",  nullable=true)
     */
    private $dateModified;




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
     * @return News
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
     * Set text
     *
     * @param string $text
     * @return News
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return News
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return News
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime 
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return News
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
