<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        $series =["a","b","c","d","e","f","g","h",];
        $title = "reussite";
        return $this->render('/default/home.html.twig' ,["series"=>$series,
            "title"=>$title]);
    }

    /**
     * @Route("/test/yo" , name="test")
     */
    public function test(){
$content= "<h1>blibli</h1>";
        return $this->render('default/test.html.twig',["content"=>$content]);
    }

}

