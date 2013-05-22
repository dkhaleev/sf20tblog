<?php

namespace sfTblog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name=false)
    {
        return $this->render('sfTblogBlogBundle:Partials:index.html.twig', array('name' => $name));
    }
}
