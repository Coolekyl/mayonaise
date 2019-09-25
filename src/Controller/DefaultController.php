<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Repository\ProductRepository;


class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(ProductRepository $productRepository)
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'products' => $productRepository->findAll(),
        ]);
    }
}
