<?php

namespace Arena\Creature;

use Arena\Attack\Tackle;
use Arena\Attack\Vampirism;

class Vampire extends BaseCreature
{
    public function __construct($nickname)
    {
        parent::__construct($nickname);

        $this->attacks[] = new Tackle;
        $this->attacks[] = new Vampirism;
    }

    public function getName()
    {
        return 'Vampire';
    }
}
