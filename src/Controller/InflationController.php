<?php

namespace App\Controller;

use App\Entity\Inflation;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/inflation", name="inflation")
 */
class InflationController extends AbstractController
{

    /**
     * @Route("/add", name="add_inflation")
     * @param EntityManager $entityManager
     * @return Response
     * @throws ORMException
     */
    public function addInflation(EntityManagerInterface $entityManager): Response
    {

        $inflation = new Inflation();
        $inflation->setYear(2020)
            ->setCPIIndex(103.4);

        $entityManager->persist($inflation);
        $entityManager->flush();

        return new Response(sprintf('The CPI index for year %d was added.', $inflation->getYear()));
    }
}
