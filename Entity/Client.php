<?php 


namespace App\Entity; 

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
final class Client extends Passenger {
/**
 * @ORM\Entity
 */
    private int $payment;
    private int $id_buyer;

public function buyTicket(int $buyTicket): void 
{
    $this->ticket = $buyTicket;
}

public function cancelTicket(bool $cancelTicket): void {

    $this-> cancelTicket = $cancelTicket;
    $cancelTicket === false ;
}

    /**
     * Get the value of payment
     *
     * @return int
     */
    public function getPayment(): int
    {
        return $this->payment;
    }

    /**
     * Set the value of payment
     *
     * @param int $payment
     *
     * @return self
     */
    public function setPayment(int $payment): self
    {
        $this->payment = $payment;

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

    /**
     * Set the value of id_buyer
     *
     * @param int $id_buyer
     *
     * @return self
     */
    public function setIdBuyer(int $id_buyer): self
    {
        $this->id_buyer = $id_buyer;

        return $this;
    }
}