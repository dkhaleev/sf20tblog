<?php

namespace sfTblog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name=false)
    {
        return $this->render('sfTblogBlogBundle:Partials:index.html.twig', array('name' => $name));
    }
    
    public function underConstructionAction()
    {
        return $this->render('sfTblogBlogBundle:Partials:under_construction.html.twig', array('title'=>'under construction'));
    }
    
    
    #dummy action. copied to prevent error
    public function checkEmailUniquenessAction()
    {
        $id = $this->getRequest()->query->get( 'fieldId' );
        $email = $this->getRequest()->query->get( 'fieldValue' );
die('checkEmailUniquenessAction');
        $currentUser = $this->container->get('security.context')->getToken()->getUser();
    
        if( $currentUser ) {
            if( $currentUser->getEmail() == $email ) {
                $result = 1;
            } else {
                $em = $this->get( 'doctrine' )->getEntityManager();
                $exists = $em->getRepository( 'NotesmasterUserBundle:User' )->checkIfEmailIsUsed( $email );
                $result = $exists ? 0 : 1;
            }
            	
            $response = json_encode( array( $id, $result ) );
            	
            
            return $this->render( 'NotesmasterUserBundle:Ajax:raw_text.html.twig', array( 'text' => $response ) );
        } else $this->renderNotFoundForAjax( 'NotesmasterUserBundle:Ajax:raw_text.html.twig', array( 'text' => 'Page not found' ) );
    }
}
