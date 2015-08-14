<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NoticePhoto
 */
class NoticePhoto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $path_photo;

    /**
     * @var string
     */
    private $file_photo;

    /**
     * @var \Uni\AdminBundle\Entity\Notice
     */
    private $notice;


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
     * Set path_photo
     *
     * @param string $pathPhoto
     * @return NoticePhoto
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
     * @return NoticePhoto
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
     * Set notice
     *
     * @param \Uni\AdminBundle\Entity\Notice $notice
     * @return NoticePhoto
     */
    public function setNotice(\Uni\AdminBundle\Entity\Notice $notice = null)
    {
        $this->notice = $notice;

        return $this;
    }

    /**
     * Get notice
     *
     * @return \Uni\AdminBundle\Entity\Notice 
     */
    public function getNotice()
    {
        return $this->notice;
    }
}
