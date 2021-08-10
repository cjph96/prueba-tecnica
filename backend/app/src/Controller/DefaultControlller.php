<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultControlller extends AbstractController
{
    /**
      * @Route("/")
    */
    public function default(Request $request): Response
    {
      $error = (object) array(
        "error" => true,
        "code" => 404,
        "message" => "Page not found"
      );
        return $this->json($error,404);
    }
}