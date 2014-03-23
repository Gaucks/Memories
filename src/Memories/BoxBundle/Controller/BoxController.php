<?php

namespace Memories\BoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BoxController extends Controller
{
    public function indexAction()
    {
    	$folder = array(
							array('folder' => 'Symfony2', 'memotitle' => array('titre' => array('rigolo', 'lol' ) )  ,  'date' => new \Datetime() ),
							array('folder' => 'Jquery'  , 'memotitle' => array('titre' => array('La programmation c\'est cool', 'un teste', 'un autre')), 'date' => new \Datetime())
    					);
    						
        return $this->render('MemoriesBoxBundle:Box:index.html.twig', array('folder' => $folder) );
    }
}
