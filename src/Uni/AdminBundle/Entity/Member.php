<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Util\SecureRandom;
use Uni\AdminBundle\Lib\Globals;

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
    private $path;

    /**
     * @var string
     */
    private $file;

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
     * @var \Uni\AdminBundle\Entity\MemberRole
     */
    private $role;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $courses;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $previous_roles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->courses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->previous_roles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set path
     *
     * @param string $path
     * @return Member
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return Member
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
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
     * @param \Uni\AdminBundle\Entity\MemberRole $role
     * @return Member
     */
    public function setRole(\Uni\AdminBundle\Entity\MemberRole $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Uni\AdminBundle\Entity\MemberRole 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Add courses
     *
     * @param \Uni\AdminBundle\Entity\MemberCourse $courses
     * @return Member
     */
    public function addCourse(\Uni\AdminBundle\Entity\MemberCourse $courses)
    {
        $this->courses[] = $courses;

        return $this;
    }

    /**
     * Remove courses
     *
     * @param \Uni\AdminBundle\Entity\MemberCourse $courses
     */
    public function removeCourse(\Uni\AdminBundle\Entity\MemberCourse $courses)
    {
        $this->courses->removeElement($courses);
    }

    /**
     * Get courses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCourses()
    {
        return $this->courses;
    }

    /**
     * Add previous_roles
     *
     * @param \Uni\AdminBundle\Entity\MemberRole $previousRoles
     * @return Member
     */
    public function addPreviousRole(\Uni\AdminBundle\Entity\MemberRole $previousRoles)
    {
        $this->previous_roles[] = $previousRoles;

        return $this;
    }

    /**
     * Remove previous_roles
     *
     * @param \Uni\AdminBundle\Entity\MemberRole $previousRoles
     */
    public function removePreviousRole(\Uni\AdminBundle\Entity\MemberRole $previousRoles)
    {
        $this->previous_roles->removeElement($previousRoles);
    }

    /**
     * Get previous_roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPreviousRoles()
    {
        return $this->previous_roles;
    }

    public function upload() { if (null === $this->getFile()) { return; } $generator = new SecureRandom(); $random = $generator->nextBytes(10); $path = md5($random).'_'.str_replace(' ','_',$this->getFile()->getClientOriginalName()); $this->getFile()->move($this->getUploadRootDir(), $path); $this->path = $path; $this->file = null; }
    public function getAbsolutePath() { return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path; }
    public function getWebPath() { return null === $this->path ? 'default' : $this->getUploadDir().'/'.$this->path; }
    protected function getUploadRootDir() { return $this->getWebRootDir().$this->getUploadDir(); }
    protected function getUploadDir() { return '/uploads/member'; }
    protected function getWebRootDir() { return Globals::getWebRootDir(); }
}
