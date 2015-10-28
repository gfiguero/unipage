<?php

namespace Uni\AdminBundle\Lib;
 
class Globals
{
    protected static $webRootDir;
    
    public static function setWebRootDir($dir)
    {
        self::$webRootDir = $dir;
    }
 
    public static function getWebRootDir()
    {
        return self::$webRootDir;
    }
}