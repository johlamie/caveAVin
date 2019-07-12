<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Bouteille;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Vin;
use AppBundle\Entity\Origine;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="home")
     */
    public function Menu(){
        $lesvins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();
        $lesOrigines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();
        $lesBouteilles = $this->getDoctrine()
            ->getRepository(Bouteille::class)
            ->findAll();


        return $this->render('base.html.twig', array(
            'vins' => $lesvins,
            'origines' => $lesOrigines,
            'bouteilles' => $lesBouteilles
        ));
    }


    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/admin", name="loginAdmin")
     */
    public function adminAction(){
        return new Response('Admin Page !');
    }

    /**
     * @Route("/equipe", name="equipe")
     */
    public function eQAction(){
        return $this->render('equipe.html.twig');
    }

}
