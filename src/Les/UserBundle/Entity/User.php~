<?php

namespace Les\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="githubId", type="string", nullable=true)
     */
    private $githubID;


    /**
     * @var string
     *
     * @ORM\Column(name="githubId", type="string", nullable=true)
     */
    private $fbID;



    public function __construct()
    {
        parent::__construct();
        // your own logic
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
     * @param string $githubID
     */
    public function setGithubID($githubID)
    {
        $this->githubID = $githubID;
    }

    /**
     * @return string
     */
    public function getGithubID()
    {
        return $this->githubID;
    }

    /**
     * @param string $fbID
     */
    public function setFbID($fbID)
    {
        $this->fbID = $fbID;
    }

    /**
     * @return string
     */
    public function getFbID()
    {
        return $this->fbID;
    }



}
