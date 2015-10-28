<?php

namespace Uni\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Uni\AdminBundle\Lib\Globals;

class UniAdminBundle extends Bundle
{
    public function boot()
    {
        Globals::setWebRootDir($this->container->getParameter('webroot'));
    }
 
}
