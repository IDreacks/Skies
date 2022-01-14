<?php 

namespace App\Entity; 

use Doctrine\ORM\Mapping as ORM;

class Passenger {
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
 private int $id_personne;
 /**
     * @ORM\Column(type="string")
     */
 private string $lastname;
 /**
     * @ORM\Column(type="string")
     */

 private string $firstname;
 /**
     * @ORM\Column(type="integer")
     */
 private int $passport;

 public function __construct( string $lastname, string $firstname, int $passport){


    $this->lastname = $lastname;
    $this->firstname = $firstname;
    $this->passport = $passport;
    

 }

 

 /**
  * Get the value of lastname
  *
  * @return string
  */
 public function getLastname(): string
 {
  return $this->lastname;
 }

 /**
  * Set the value of lastname
  *
  * @param string $lastname
  *
  * @return self
  */
 public function setLastname(string $lastname): self
 {
  $this->lastname = $lastname;

  return $this;
 }

 /**
  * Get the value of firstname
  *
  * @return string
  */
 public function getFirstname(): string
 {
  return $this->firstname;
 }

 /**
  * Set the value of firstname
  *
  * @param string $firstname
  *
  * @return self
  */
 public function setFirstname(string $firstname): self
 {
  $this->firstname = $firstname;

  return $this;
 }

 /**
  * Get the value of passport
  *
  * @return int
  */
 public function getPassport(): int
 {
  return $this->passport;
 }

 /**
  * Set the value of passport
  *
  * @param int $passport
  *
  * @return self
  */
 public function setPassport(int $passport): self
 {
  $this->passport = $passport;

  return $this;
 }
}