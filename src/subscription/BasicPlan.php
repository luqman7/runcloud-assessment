<?php

namespace App\subscription;

class BasicPlan extends Plan
{
    public function __construct()
    {
        $this->name = "Basic Plan";
        $this->maxServer = 1;
    }

    function welcome()
    {
        print "Subscribed to plan Basic Plan \n\n";
    }
}
