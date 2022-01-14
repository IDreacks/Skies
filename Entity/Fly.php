<?php 

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Fly {
 /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
private int $id_fly;
 /**
     
     * @ORM\Column(type="string")
     
     */
private string $escale;
/**
     
     * @ORM\Column(type="string")
     
     */
private string $start_location;
/**
     
     * @ORM\Column(type="string")
     
     */
private string $location_arrival;
/**
     
     * @ORM\Column(type="DateTime")
     
     */
private DateTime $start_location_date;
/**
     
     * @ORM\Column(type="DateTime")
     
     */
private DateTime $location_arrival_date;


/**
 * Get the value of id_fly
 *
 * @return int
 */
public function getIdFly(): int
{
return $this->id_fly;
}

/**
 * Get the value of escale
 *
 * @return string
 */
public function getEscale(): string
{
return $this->escale;
}

/**
 * Set the value of escale
 *
 * @param string $escale
 *
 * @return self
 */
public function setEscale(string $escale): self
{
$this->escale = $escale;

return $this;
}

/**
 * Get the value of start_location
 *
 * @return string
 */
public function getStartLocation(): string
{
return $this->start_location;
}

/**
 * Set the value of start_location
 *
 * @param string $start_location
 *
 * @return self
 */
public function setStartLocation(string $start_location): self
{
$this->start_location = $start_location;

return $this;
}

/**
 * Get the value of location_arrival
 *
 * @return string
 */
public function getLocationArrival(): string
{
return $this->location_arrival;
}

/**
 * Set the value of location_arrival
 *
 * @param string $location_arrival
 *
 * @return self
 */
public function setLocationArrival(string $location_arrival): self
{
$this->location_arrival = $location_arrival;

return $this;
}

/**
 * Get the value of start_location_date
 *
 * @return DateTime
 */
public function getStartLocationDate(): DateTime
{
return $this->start_location_date;
}

/**
 * Set the value of start_location_date
 *
 * @param DateTime $start_location_date
 *
 * @return self
 */
public function setStartLocationDate(DateTime $start_location_date): self
{
$this->start_location_date = $start_location_date;

return $this;
}

/**
 * Get the value of location_arrival_date
 *
 * @return DateTime
 */
public function getLocationArrivalDate(): DateTime
{
return $this->location_arrival_date;
}

/**
 * Set the value of location_arrival_date
 *
 * @param DateTime $location_arrival_date
 *
 * @return self
 */
public function setLocationArrivalDate(DateTime $location_arrival_date): self
{
$this->location_arrival_date = $location_arrival_date;

return $this;
}
}