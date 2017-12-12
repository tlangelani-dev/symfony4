<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number()
    {
        $number = mt_rand(1, 100);
        return new Response('Your lucky number is: ' . $number);
    }
}
