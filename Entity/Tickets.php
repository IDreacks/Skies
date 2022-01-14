<?php 

namespace App\Entity; 

use Doctrine\ORM\Mapping as ORM;

class Tickets {
    
 /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id_ticket;
/**
     
     * @ORM\Column(type="bool")
    
     */
    private bool $luggage_supplement;
/**
     
     * @ORM\Column(type="int")
    
     */
    private int $id_buyer;


    /**
     * Get the value of id_ticket
     *
     * @return int
     */
    public function getIdTicket(): int
    {
        return $this->id_ticket;
    }

    /**
     * Get the value of luggage_supplement
     *
     * @return bool
     */
    public function getLuggageSupplement(): bool
    {
        return $this->luggage_supplement;
    }

    /**
     * Set the value of luggage_supplement
     *
     * @param bool $luggage_supplement
     *
     * @return self
     */
    public function setLuggageSupplement(bool $luggage_supplement): self
    {
        $this->luggage_supplement = $luggage_supplement;

        return $this;
    }

    /**
     * Get the value of id_buyer
     *
     * @return int
     */
    public function getIdBuyer(): int
    {
        return $this->id_buyer;
    }
}