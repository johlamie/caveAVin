<?php

namespace AppBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Origine;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Entity\Vin;
use Symfony\Component\Form\Extension\Core\Type\FormType;



class VinController extends DefaultController
{


    /**
     * @Route("/vin", name ="acceuilVin")
     */
    public function VinAction(){
        $lesvins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();
        $lesOrigines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();


        return $this->render('lesVins.html.twig', array(
            'vins' => $lesvins,
            'origines' => $lesOrigines
        ));
    }

    /**
     * @Route("/vin/v{id}")
     */
    public function vinIdAction(int $id){
        $vin = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findBy(array('idVin'=>$id ));
        $vins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();
        $origines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();


        if (!$vin) {
            throw $this->createNotFoundException(
                'Aucun vin correspondant à ces identifiants : '
            );
        }
        else { //TODO
            return $this->render('vinId.html.twig', array(
                'vin' => $vin,
                'vins' => $vins,
                'origines' => $origines
            ));
        }
    }

    /**
     * @Route("/vin/{id}", name ="OrigineVin")
     */
    public function vinIdAppellationAction(int $id){
        $vin = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findBy(array('idAppellation'=>$id ));
        $vins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();
        $origines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();


        if (!$vins) {
            return $this->render('404.html.twig');
        }
        else { //TODO
            return $this->render('vinIdAppellation.html.twig', array(
                'vin' => $vin,
                'vins' => $vins,
                'origines' => $origines
            ));
        }
    }

    /**
     * @Route("/vin/insert/", name ="insertVin")
     */
    public function vinInsertAction(Request $request) {
        $lesvins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();
        $lesOrigines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();
        $vin = new Vin();
        $form = $this->createFormBuilder($vin)
            ->add('NomVin',TextType::class, array('attr' => array('maxlength' => 22)))
            ->add('TypeVin', ChoiceType::class, [
                'choices'  => [
                    'rouge' => 'rouge' ,
                    'rose' => 'rose',
                    'blanc' => 'blanc',
                    'moelleux' => 'moelleux',
                    'petillant' => 'petillant',
                ],
            ])
            ->add('idAppellation', EntityType::class, array(
                'class' => 'AppBundle:Origine',
                'choice_label' => 'nomAppellation',
                'multiple' => false,
            ))
            ->add('save', SubmitType::class, array('label' => 'Ajouter'))
            ->setMethod("POST")
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $vin = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($vin);
            $entityManager->flush();
            return $this->redirectToRoute('acceuilVin');
        }
        return $this->render("default/formVin.html.twig", array(
            'form' => $form->createView(),
            'vins' => $lesvins,
            'origines' => $lesOrigines
        ));
    }



    /**
     * @Route("/vin/update/{id}", name ="modifierVin")
     */

    public function vinUpdateAction($id, Request $request){
        $lesvins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();
        $lesOrigines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();
        $vin = $this->getDoctrine()->getRepository(Vin::class)->find($id);
        if (!$vin) {
            throw $this->createNotFoundException('Pas de vin pour lid'.$id);
        }
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $vin);
        $formBuilder
            ->add('NomVin',TextType::class, array('attr' => array('maxlength' => 22)))
            ->add('TypeVin', ChoiceType::class, [
                'choices'  => [
                    'rouge' => 'rouge' ,
                    'rose' => 'rose',
                    'blanc' => 'blanc',
                    'moelleux' => 'moelleux',
                    'petillant' => 'petillant',
                ],
            ])
            ->add('idAppellation', EntityType::class, array(
                'class' => 'AppBundle:Origine',
                'choice_label' => 'nomAppellation',
                'multiple' => false,
            ))
            ->add('save', SubmitType::class, array('label' => 'Modifier'));
        $form = $formBuilder->getForm();
        $form->handleRequest($request);
        if ($form->isValid() && $form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('acceuilVin');
        }
        return $this->render("default/formVin.html.twig", array(
            'form' => $form->createView(),
            'vins' => $lesvins,
            'origines' => $lesOrigines
        ));

    }


    /**
     * @Route("/vin/delete/{id}", name ="deleteVin")
     */
    public function vinDeleteAction($id){
        $entityManager = $this->getDoctrine()->getManager();
        $vin = $entityManager->getRepository(Vin::class)->findOneBy(array('idVin'=>$id));

        if (!$vin) {
            throw $this->createNotFoundException(
                'Aucun vin correspondant à cet identifiant : '
            );
        }else {
            $entityManager->remove($vin);
            $entityManager->flush();
            return $this->redirectToRoute('acceuilVin');
        }


    }




}