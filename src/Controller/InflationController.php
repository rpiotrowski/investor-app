<?php

namespace App\Controller;

use App\Entity\Inflation;
use Doctrine\ORM\EntityManagerInterface;
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
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function addInflation(EntityManagerInterface $entityManager): Response
    {

        $repository = $entityManager->getRepository(Inflation::class);

        //TODO remove hard-coded values
        $inflation = new Inflation();
        $inflation->setYear(2020)
            ->setCPIIndex(103.4);

        if ($repository->findOneBy(['year' => 2020])) {
            return new Response(sprintf('The CPI index for year %d is already added.', $inflation->getYear()));
        } else
            $entityManager->persist($inflation);
            $entityManager->flush();
            return new Response(sprintf('The CPI index for year %d was added.', $inflation->getYear()));


    }
}
