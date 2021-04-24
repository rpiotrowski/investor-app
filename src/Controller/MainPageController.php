<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MainPageController extends AbstractController
{
    /**
     * @Route("/", name="main_page")
     */
    public function mainPage(): Response
    {
        return $this->render('base.html.twig');
    }
}