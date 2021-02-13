<?php

namespace App\subscription;

class ProPlan extends Plan
{

    public function __construct()
    {
        $this->name = "Pro Plan";
        $this->maxServer = 999999;
    }

    function welcome()
    {
        print "Subscribed to plan Pro Plan \n\n";
    }
}
