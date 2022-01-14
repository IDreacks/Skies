<?php 


namespace App\Entity; 

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Airport{
 /**
     
     * @ORM\Column(type="string")
  
     */
    private string $emplacement;
 /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id_airport;

    /**
     * Get the value of emplacement
     *
     * @return string
     */
    public function getEmplacement(): string
    {
        return $this->emplacement;
    }

    /**
     * Set the value of emplacement
     *
     * @param string $emplacement
     *
     * @return self
     */
    public function setEmplacement(string $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    /**
     * Get the value of id_airport
     *
     * @return int
     */
    public function getIdAirport(): int
    {
        return $this->id_airport;
    }

    /**
     * Set the value of id_airport
     *
     * @param int $id_airport
     *
     * @return self
     */
    public function setIdAirport(int $id_airport): self
    {
        $this->id_airport = $id_airport;

        return $this;
    }
}