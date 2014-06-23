<?php

namespace Les\DataBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Entity
 * @ORM\Table(name="comments")
 *
 */
class Comments {


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
     * @ORM\Column(name="restoId", type="integer", nullable=false)
     */
    private $restoID;

    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer",  nullable=false)
     */
    private $userID;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string",  nullable=false)
     */
    private $text;

    /**
     *
     * @ORM\Column(name="date_created",  type="date", nullable=false)
     */
    private $dateCreated;

    /**
     *
     * @ORM\Column(name="date_modified",  type="date", nullable=true)
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
     * Set restoID
     *
     * @param integer $restoID
     * @return comments
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
     * Set userID
     *
     * @param integer $userID
     * @return comments
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;

        return $this;
    }

    /**
     * Get userID
     *
     * @return integer 
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return comments
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
     * @return comments
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
     * @return comments
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
}
