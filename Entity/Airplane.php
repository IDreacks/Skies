<?php 

namespace App\Entity; 

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Airplane {

    private int $id_plane;
    
    private int $capacity;

}