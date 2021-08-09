<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class LuckyController extends AbstractController
{
    /**
      * @Route("/lucky/number")
    */
    public function number(Request $request): Response
    {
        $number = random_int(0, 100);

        return $this->json($number);
    }
}