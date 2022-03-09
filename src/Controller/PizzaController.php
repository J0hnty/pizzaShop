<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PizzaController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function randomPizza(): Response
    {
        $pizzas = [
            "PIZZA PEPPERONI DELUXE",
            "PIZZA PEPPERONI PARTY",
            "PIZZA VEGGI CHICKEN SUPREME",
            "PIZZA FRESH 'N TASTY",
            "PIZZA VEGERONI",
            "PIZZA MARGARITHA",
            "PIZZA HAM",
            "PIZZA FUNGHI"
        ];


//        return new Response(
//            '<html><body>Lucky pizza:' . $pizzas[array_rand($pizzas)] . '</body></html>'
//        );
        return $this->render('pizza/home.html.twig', [
            'pizzas' => $pizzas
        ]);
    }
    //categories page
    /**
     * @Route("/categories/{slug}")
     */
    public function categories($slug) {
        return new Response(sprintf(
            'Future page for categories "%s"',ucwords(str_replace('-', ' ',$slug))
        ));

    }
}