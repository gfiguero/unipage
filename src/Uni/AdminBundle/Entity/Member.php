<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Member
 */
class Member
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phonenumber;

    /**
     * @var \DateTime
     */
    private $birthdate;

    /**
     * @var \DateTime
     */
    private $admissiondate;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var string
     */
    private $path_photo;

    /**
     * @var string
     */
    private $file_photo;

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
     * @var \Uni\AdminBundle\Entity\Role
     */
    private $role;


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
     * Set firstname
     *
     * @param string $firstname
     * @return Member
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Member
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Member
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     * @return Member
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string 
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return Member
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set admissiondate
     *
     * @param \DateTime $admissiondate
     * @return Member
     */
    public function setAdmissiondate($admissiondate)
    {
        $this->admissiondate = $admissiondate;

        return $this;
    }

    /**
     * Get admissiondate
     *
     * @return \DateTime 
     */
    public function getAdmissiondate()
    {
        return $this->admissiondate;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Member
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set path_photo
     *
     * @param string $pathPhoto
     * @return Member
     */
    public function setPathPhoto($pathPhoto)
    {
        $this->path_photo = $pathPhoto;

        return $this;
    }

    /**
     * Get path_photo
     *
     * @return string 
     */
    public function getPathPhoto()
    {
        return $this->path_photo;
    }

    /**
     * Set file_photo
     *
     * @param string $filePhoto
     * @return Member
     */
    public function setFilePhoto($filePhoto)
    {
        $this->file_photo = $filePhoto;

        return $this;
    }

    /**
     * Get file_photo
     *
     * @return string 
     */
    public function getFilePhoto()
    {
        return $this->file_photo;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Member
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
     * @return Member
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
     * @return Member
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

    /**
     * Set role
     *
     * @param \Uni\AdminBundle\Entity\Role $role
     * @return Member
     */
    public function setRole(\Uni\AdminBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Uni\AdminBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }
}
