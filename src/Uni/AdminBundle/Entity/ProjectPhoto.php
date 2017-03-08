<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Util\SecureRandom;
use Uni\AdminBundle\Lib\Globals;

/**
 * ProjectPhoto
 */
class ProjectPhoto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $file;

    /**
     * @var \Uni\AdminBundle\Entity\Project
     */
    private $project;


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
     * Set path
     *
     * @param string $path
     * @return ProjectPhoto
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
     * @return ProjectPhoto
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
     * Set project
     *
     * @param \Uni\AdminBundle\Entity\Project $project
     * @return ProjectPhoto
     */
    public function setProject(\Uni\AdminBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \Uni\AdminBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }
    public function upload() { if (null === $this->getFile()) { return; } $generator = new SecureRandom(); $random = $generator->nextBytes(10); $path = md5($random).'_'.str_replace(' ','_',$this->getFile()->getClientOriginalName()); $this->getFile()->move($this->getUploadRootDir(), $path); $this->path = $path; $this->file = null; }
    public function getAbsolutePath() { return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path; }
    public function getWebPath() { return null === $this->path ? $this->getUploadDir().'/default.png' : $this->getUploadDir().'/'.$this->path; }
    protected function getUploadRootDir() { return $this->getWebRootDir().$this->getUploadDir(); }
    protected function getUploadDir() { return '/uploads/project'; }
    protected function getWebRootDir() { return Globals::getWebRootDir(); }
}
