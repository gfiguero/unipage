<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $user_firstname;

    /**
     * @var string
     */
    private $user_lastname;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \DateTime
     */
    private $deletedAt;


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
     * Set user_firstname
     *
     * @param string $userFirstname
     * @return User
     */
    public function setUserFirstname($userFirstname)
    {
        $this->user_firstname = $userFirstname;

        return $this;
    }

    /**
     * Get user_firstname
     *
     * @return string 
     */
    public function getUserFirstname()
    {
        return $this->user_firstname;
    }

    /**
     * Set user_lastname
     *
     * @param string $userLastname
     * @return User
     */
    public function setUserLastname($userLastname)
    {
        $this->user_lastname = $userLastname;

        return $this;
    }

    /**
     * Get user_lastname
     *
     * @return string 
     */
    public function getUserLastname()
    {
        return $this->user_lastname;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return User
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }
}
