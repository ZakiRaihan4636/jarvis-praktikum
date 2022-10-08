<?php

$hero1_name = "Alucard";
$hero1_hp = 4000;
$hero1_defanse = 120;
$hero1_damage = 300;
$hero1_mana = 0;

$hero2_name = "Akai";
$hero2_hp = 4100;
$hero2_defanse = 120;
$hero2_damage = 50;
$hero2_mana = 200;


// Paragdigma OOP
// class Hero9
// {
//   public $name = "Alucard";
//   public $hp = 4000;
//   public $mana = 0;
//   public $damage = 300;

//   //method
//   public function attack()
//   {
//     echo "Menyerang";
//   }
// }


//paradigma OOP
class Hero
{
  public $name;
  public $hp;
  public $defanse;
  public $damage;
  public $mana;

  //method
  //Konstruktor
  public function __construct($name, $hp, $defanse, $damage, $mana)
  {
    $this->name = $name;
    $this->hp = $hp;
    $this->defanse = $defanse;
    $this->damage = $damage;
    $this->mana = $mana;
  }

  public function attack($target)
  {
    $target->hp = $target->hp - ($this->damage - $target->defanse);
    echo "$this->name menyerang $target->name \n";
    echo "HP $target->name saat ini adalah: $target->hp \n";
  }
}

$hero1 = new Hero("Alucard", 4000, 120, 400, 0);
$hero2 = new Hero("Akai", 4100, 200, 50, 0);

//memanggil method
$hero1->attack($hero2);
