<?php 

namespace App\Entity; 

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Airplane {
 /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id_plane;
    /**
     
     * @ORM\Column(type="integer")
     
     */
    private int $capacity;


    /**
     * Get the value of id_plane
     *
     * @return int
     */
    public function getIdPlane(): int
    {
        return $this->id_plane;
    }

    /**
     * Get the value of capacity
     *
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @param int $capacity
     *
     * @return self
     */
    public function setCapacity(int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }
}