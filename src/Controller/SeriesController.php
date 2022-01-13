<?php

namespace App\Controller;

use App\Entity\DbSeries;
use App\Form\SeriesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeriesController extends AbstractController
{
    #[Route('/series', name: 'series')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $series = new DbSeries();
        $form = $this->createForm(SeriesType::class, $series);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            
            $series = $em->getRepository('App:DbSeries')->findAll();
            
         
        }
        return $this->render('series/index.html.twig', [
            'controller_name' => 'Hola',
            'formulario' => $form->createView(),
            'series' => $series
            
        ]);
    }
}
