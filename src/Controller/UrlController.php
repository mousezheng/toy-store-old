<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UrlController extends AbstractController
{
    /**
     * @Route("/url", name="url")
     */
    public function index()
    {
        return $this->json([
            'a' => 1,
            'b' => 2
        ]);
    }
}
