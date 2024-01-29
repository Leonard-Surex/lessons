<?php
  class Character {
    public $health=10;
    public $maxHealth=10;
    public $damage=2;
    public $dodge=10;
    public $aim=3;

    function attack($target){
      $hit = rand(1,20) + $this->aim;
      if ($target->dodge < $hit){
        $target->health = $target->health - $this->damage;
      }

    }
  }
  $sean = new Character ();
  $len = new Character ();
  $len->dodge = 13;
  $sean->damage = 3;
  while ($len->health > 0 && $sean->health > 0) {
    $sean->attack ($len);
    $len->attack ($sean);
    echo "Lens Health: {$len->health} <br> Sean's Health: {$sean->health} <br>";
  }