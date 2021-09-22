<?php

namespace App\Controller;

use App\Repository\GerichtRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    /**
     * @Route("/menu", name="menu")
     */
    public function menu(GerichtRepository $gr)
    {
        $gerichte = $gr->findAll();

        return $this->render('menu/index.html.twig', [
            'gericht' => '$gerichte',
        ]);
    }
}
