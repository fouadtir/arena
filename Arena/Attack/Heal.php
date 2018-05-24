<?php

namespace Arena\Attack;

use Arena\Creature\BaseCreature;

class Heal implements Attack
{
    /**
     * Frappe l'adversaire
     */
    public function attack(BaseCreature $runner, BaseCreature $target)
    {
      if($runner->getPP()>10){
        $runner->heal(25 + mt_rand(0, 10));
      }else{
        echo "<script>alert(\"vous pouvez pas utiliser cette attaque\")</script>"; 
      }
    }

    /**
     * Nom de l'attaque
     */
    public function getName()
    {
        return 'Soin';
    }
    public function getDescription()
    {
      return 'Gagne de la vie';
    }
}
