<?php

namespace MyGreeter;

class Client
{
    public function getGreeting()
    {
        $hour = date('H');

        if($hour >= 0 and $hour < 12){
            return 'Good morning';

        }else if($hour >= 12 and $hour < 18){
            return 'Good afternoon';

        }else{
            return 'Good evening';
        }
    }
}