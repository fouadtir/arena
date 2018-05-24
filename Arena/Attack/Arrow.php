<?php

namespace Arena\Attack;

use Arena\Creature\BaseCreature;

class Arrow implements Attack
{
    /**
     * Frappe l'adversaire
     */
    public function attack(BaseCreature $runner, BaseCreature $target)
    {
      if($runner->getPP()>10){
        $target->hit(20 + mt_rand(0, 10));
        $runner->hitPP(8 + mt_rand(0, 10));
      }else{
        echo "<script>alert(\"vous pouvez pas utiliser cette attaque\")</script>"; 
      }
    }

    /**
     * Nom de l'attaque
     */
    public function getName()
    {
        return 'Fleche';
    }
    public function getDescription()
    {
      return 'Lance une fleche';
    }
}
