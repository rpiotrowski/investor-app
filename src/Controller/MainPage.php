<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class MainPage extends AbstractController
{
    /**
     * @Route("/", name="main_page")
     */
    public function mainPage(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('base.html.twig');
    }
}