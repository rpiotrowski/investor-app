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

        //todo add flash into template
        if ($repository->findOneBy(['year' => 2020])) {
            $this->addFlash('succes', sprintf('The CPI index for year %d is already added.', $inflation->getYear()));
        } else
            $entityManager->persist($inflation);
        $entityManager->flush();
        $this->addFlash('notice', sprintf('The CPI index for year %d was added.', $inflation->getYear()));

        return $this->redirectToRoute('main_page');
    }
}
