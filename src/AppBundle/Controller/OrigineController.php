<?php

namespace AppBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Bouteille;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Origine;
use AppBundle\Entity\Vin;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;



class OrigineController extends DefaultController
{


    /**
     * @Route("/Origine", name ="acceuilOrigine")
     */
    public function origineAction(){
        $lesVins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();
        $lesOrigines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();
        $lesBouteilles = $this->getDoctrine()
            ->getRepository(Bouteille::class)
            ->findAll();

        return $this->render('lesOrigines.html.twig', array(
            'vins' => $lesVins,
            'origines' => $lesOrigines,
            'bouteilles' => $lesBouteilles
        ));
    }


    /**
     * @Route("/Origine/{id}", name ="origineID")
     */
    public function origineIdAction(int $id){
        $origine = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findBy(array('idAppellation'=>$id ));

        $lesOrigines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();
        $lesVins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();
        if (!$origine) {
            throw $this->createNotFoundException(
                'Aucune région correspondant à ces identifiants : '
            );
        }
        else { //TODO
            return $this->render('origineId.html.twig', array(
                'origine' => $origine,
                'origines' => $lesOrigines,
                'vins' => $lesVins
            ));
        }
    }


    /**
     * @Route("/origine/insert", name="insertOrigine")
     */
 
        public function originensertAction(Request $request) {
        $origine = new Origine();
        $origines = $this->getDoctrine()
             ->getRepository(Origine::class)
             ->findAll();
        $vins = $this->getDoctrine()
             ->getRepository(Vin::class)
             ->findAll();

        $form = $this->createFormBuilder($origine)
            ->add('nomAppellation',TextType::class, array('attr' => array('maxlength' => 30)))
            ->add('region', TextType::class, array('attr' => array('maxlength' => 30)))
            ->add('save', SubmitType::class, array('label' => 'ajouter une origine '))
              ->setMethod("POST")
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $origine = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($origine);
            $entityManager->flush();
            return $this->redirectToRoute('acceuilOrigine');
        }

        return $this->render('lesOriginesAdd.html.twig', array(
            'form' => $form->createView(),
            'origines' => $origines,
            'vins' => $vins));

    }


    /**
     * @Route("/Origine/update/{id}" , name ="updateOrigine")
     */



    public function origineUpdateAction($id, Request $request){
        $entityManager = $this->getDoctrine()->getManager();
        $origine = $entityManager->getRepository(Origine::class)->findOneBy(array('idAppellation'=>$id));
        $origines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();
        $vins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();

        if (!$origine) {
            throw $this->createNotFoundException(
                'Aucune Origine correspondant à cet identifiant : '
            );
        }
        else {
            $origine->getNomAppellation();
            $origine->getRegion();

            $form = $this->createFormBuilder($origine)
                ->add('nomAppellation',TextType::class, array('attr' => array('maxlength' => 30)))
                ->add('region', TextType::class, array('attr' => array('maxlength' => 30)))
                ->add('save', SubmitType::class, array('label' => 'modifier l origine '))
                ->setMethod("GET")
                ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $origine = $form->getData();
                $entityManager = $this->getDoctrine()->getManager();
          
                $entityManager->flush();
                return $this->redirectToRoute('acceuilOrigine');
            }


            return $this->render('lesOriginesAdd.html.twig', array(
                'form' => $form->createView(),
                'origines' => $origines,
                'vins' => $vins));
        }

    }

    /**
     * @Route("/Origine/delete/{id}", name ="deleteOrigine")
     */
    public function origineDeleteAction($id){
        $entityManager = $this->getDoctrine()->getManager();
        $origine = $entityManager->getRepository(Origine::class)->findOneBy(array('idAppellation'=>$id));

        if (!$origine) {
            throw $this->createNotFoundException(
                'Aucun vin correspondant à cet identifiant : '
            );
        }else {
            $entityManager->remove($origine);
            $entityManager->flush();
            return $this->redirectToRoute('acceuilOrigine');
        }


    }




}
