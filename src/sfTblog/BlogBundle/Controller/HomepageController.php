<?php

namespace sfTblog\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{

    #static page-actions. Routes from homepage tiles
    public function contextAction()
    {
        return $this
                ->render('sfTblogBlogBundle:Homepage:context.html.twig',
                        array('title' => "контекстная реклама"));
    }

    public function lineAction()
    {
        return $this
                ->render('sfTblogBlogBundle:Homepage:line-ad.html.twig',
                        array('title' => "строчная реклама"));
    }

    public function auditAction()
    {
        return $this
                ->render('sfTblogBlogBundle:Homepage:audit.html.twig',
                        array('title' => "аудит аналитика сайта"));
    }

    public function contentAction()
    {
        return $this
                ->render('sfTblogBlogBundle:Homepage:content.html.twig',
                        array('title' => "контент"));
    }

    public function actPromoAction()
    {
        return $this
                ->render('sfTblogBlogBundle:Homepage:promo.html.twig',
                        array('title' => "активное продвижение"));
    }

    public function vkPromoAction()
    {
        return $this
                ->render('sfTblogBlogBundle:Homepage:vk_promo.html.twig',
                        array('title' => "продвижение ВКонтакте"));
    }

    public function reputationAction()
    {
        return $this
                ->render('sfTblogBlogBundle:Homepage:reputation.html.twig',
                        array('title' => "Управление репутацией компании"));
    }

    public function bannersAction()
    {
        return $this
                ->render('sfTblogBlogBundle:Homepage:banners.html.twig',
                        array('title' => "Изготовление баннеров"));
    }

    public function consultationAction()
    {
        return $this
                ->render('sfTblogBlogBundle:Homepage:consultation.html.twig',
                        array('title' => "услуги консультации"));
    }
    
    public function requestAction()
    {
        return $this
        ->render('sfTblogBlogBundle:Homepage:request.html.twig',
                array('title' => "подать заявку"));
    }
}
