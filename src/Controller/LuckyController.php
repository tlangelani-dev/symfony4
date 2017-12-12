<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    public function number()
    {
        return $this->render('lucky/number.html.twig', [
            'number' => mt_rand(1, 100)
        ]);
    }
}
