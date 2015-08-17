<?php

namespace Uni\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('UniPageBundle:Page:index.html.twig');
    }

    public function memberAction()
    {
        return $this->render('UniPageBundle:Page:member.html.twig');
    }

    public function historyAction()
    {
        return $this->render('UniPageBundle:Page:history.html.twig');
    }

    public function noticeAction()
    {
        return $this->render('UniPageBundle:Page:notice.html.twig');
    }

    public function reportAction()
    {
        return $this->render('UniPageBundle:Page:report.html.twig');
    }

    public function roleAction()
    {
        return $this->render('UniPageBundle:Page:role.html.twig');
    }

}
