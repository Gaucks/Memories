<?php

namespace Memories\BoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BoxController extends Controller
{
    public function indexAction()
    {
        return $this->render('MemoriesBoxBundle:Box:index.html.twig');
    }
}
