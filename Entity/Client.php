<?php 


namespace App\Entity; 

use Doctrine\ORM\Mapping as ORM;

final class Client extends Passenger {
/**
 * @ORM\Entity
 */
    private int $payment;
    private int $id_buyer;



}