<?php

namespace App\Entity;

use App\Repository\InflationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InflationRepository::class)
 */
class Inflation
{

    /**
     * @Id
     * @ORM\Column(type="int")
     */
    private $year;

    /**
     * @ORM\Column(type="float")
     */
    private $CPI_Index;

    public function getYear(): ?int
    {
        return $this->year;
    }


    public function getCPIIndex(): ?float
    {
        return $this->CPI_Index;
    }

}
