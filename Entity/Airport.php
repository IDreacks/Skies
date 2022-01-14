<?php 


namespace App\Entity; 

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Airpot{

    private string $emplacement;

    private int $id_airport;
}