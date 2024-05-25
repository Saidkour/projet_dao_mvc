<?php
namespace app\models;

class Voiture extends Model
{

  private $marque;
  private $prix;

  public function __construct($marque, $prix)
  {
    $this->marque = $marque;
    $this->prix = $prix;
  }
  public function getPrix()
  {
    return $this->prix;
  }
  public function getMarque()
  {
    return $this->marque;
  }
  public function setPrix($prix)
  {
    return $this->prix = $prix;
  }
  public function setMarque($marque)
  {
    return $this->marque = $marque;
  }

  public static function listeVoiture()
  {
      return static::database()->query("select *from voiture order by id desc");
  }
}