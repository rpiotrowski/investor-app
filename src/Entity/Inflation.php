<?php

namespace App\Entity;

use App\Repository\InflationRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;

/**
 * @ORM\Entity(repositoryClass=InflationRepository::class)
 */
class Inflation
{

    /**
     * @Id
     * @ORM\Column(type="integer")
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

    /**
     * @param int $year
     */
    public function setYear(int $year): self
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @param float $CPI_Index
     */
    public function setCPIIndex(float $CPI_Index): self
    {
        $this->CPI_Index = $CPI_Index;
        return $this;
    }

}
