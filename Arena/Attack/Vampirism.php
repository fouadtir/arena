<?php

namespace Arena\Attack;

use Arena\Creature\BaseCreature;

class Vampirism implements Attack
{
    /**
     * Frappe l'adversaire
     */
    public function attack(BaseCreature $runner, BaseCreature $target)
    {
        $life = 15 + mt_rand(0, 10);
        if($runner->getPP()>10){
        $target->hit($life);
        $runner->hitPP($life);
        $runner->heal($life/2.0);
      }else{
        echo "<script>alert(\"vous pouvez pas utiliser cette attaque\")</script>"; 
      }
    }

    /**
     * Nom de l'attaque
     */
    public function getName()
    {
        return 'Vampirisme';
    }
    public function getDescription()
    {
      return 'bois le sang adversaire et regagne vie';
    }
}
