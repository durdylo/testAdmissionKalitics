<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/agenda", name="agenda")
     */
    public function agenda()
    {
        return $this->render('blog/agenda.html.twig');
    }

    /**
     * @Route("/parametre", name="parametre")
     */
    public function parametre()
    {
        return $this->render('blog/parametre.html.twig');
    }

    /**
     * @Route("/fiches_de_paie", name="fiches_de_paie")
     */
    public function fiches_de_paie()
    {
        return $this->render('blog/fiches_de_paie.html.twig');
    }

    /**
     * @Route("/gestion", name="gestion")
     */
    public function gestion()
    {
        return $this->render('blog/gestion.html.twig');
    }

    /**
     * @Route("/reunions", name="reunions")
     */
    public function reunions()
    {
        return $this->render('blog/reunions.html.twig');
    }


    /**
     * @Route("/consultations_chantier", name="consultations_chantier")
     */
    public function consultations_chantier()
    {
        return $this->render('blog/consultations_chantier.html.twig');
    }
}
