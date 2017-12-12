<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    public function number(LoggerInterface $logger)
    {
        $logger->info('You requested a new number.');
        return $this->render('lucky/number.html.twig', [
            'number' => mt_rand(1, 100)
        ]);
    }
}
