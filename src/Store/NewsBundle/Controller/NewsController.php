<?php

namespace Store\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
        
    public function indexAction()
    {
        $newsRepo = $this->getDoctrine()->getManager()->getRepository('NewsBundle:News');
        $news = $newsRepo->findAll();
        return $this->render('NewsBundle:News:index.html.twig', array('news' => $news));
    }
    
    public function showAction($slug)
    {
        $newsRepo = $this->getDoctrine()->getManager()->getRepository('NewsBundle:News');
        $article = $newsRepo->findOneBy(['slug'=> $slug]);
        return $this->render('NewsBundle:News:show.html.twig', array('article' => $article));
    }
    
    
        
}
