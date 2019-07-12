<?php
/**
 * Created by PhpStorm.
 * User: lamien
 * Date: 14/03/19
 * Time: 20:12
 */
namespace AppBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Origine;
use AppBundle\Entity\Vin;
//use http\Env\Request;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Forms;
use AppBundle\Entity\Bouteille;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;




class BouteilleController extends DefaultController
{


    /**
     * @Route("Bouteille", name ="acceuil")
     */
    public function bouteilleAction(){
        $lesvins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();
        $lesOrigines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();
        $lesBouteilles = $this->getDoctrine()
            ->getRepository(Bouteille::class)
            ->findAll();

        return $this->render('lesBouteilles.html.twig', array(
            'bouteilles' => $lesBouteilles,
            'vins' => $lesvins,
            'origines' => $lesOrigines
        ));
    }


    /**
     * @Route("Bouteille/{id}", name ="bouteilleID")
     */
    public function bouteilleIdAction(int $id){
        $bouteille = $this->getDoctrine()
            ->getRepository(Bouteille::class)
            ->findBy(array('idVin'=>$id ));
        $vins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();
        $origines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();

        if (!$bouteille) {
            return $this->render('error/noExistBouteille.html.twig');
        }
        else { //TODO
            return $this->render('bouteilleIdMillesime.html.twig', array(
                'bouteilles' => $bouteille,
                'vins' => $vins,
                'origines' => $origines
            ));
        }
    }


    /**
     * @Route("/Bouteille/{id}/{millesime}")
     */
    public function bouteilleIdMillAction(int $id,int $millesime){

        $bouteille = $this->getDoctrine()
            ->getRepository(Bouteille::class)
            ->findBy(array('idVin'=>$id,'millesime'=>$millesime ));

        $vins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();
        $origines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();

        if (!$bouteille) {
            return $this->render('error/noExistBouteille.html.twig');
        }
        else { //DO
            return $this->render('lesBouteilles.html.twig', array(
                'bouteilles' => $bouteille,
                'vins' => $vins,
                'origines' => $origines
            ));
        }
    }

    /**
     * @Route("/Bouteille/insert/", name="insertBouteille")
     */
    public function bouteilleInsertAction(Request $request){
        $lesvins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();
        $lesOrigines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();
        $bout = new Bouteille();
        $form = $this->createFormBuilder($bout)
            ->add('idVin',EntityType::class, array(
                'class'        => 'AppBundle:Vin',
                'choice_label' => 'nomVin',
                'multiple'     => false,
                ))
            ->add('millesime',IntegerType::class)
            ->add('prix',NumberType::class)
            ->add('quantite',IntegerType::class)
            ->add('note', ChoiceType::class, [
                'choices'  => [
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 2,
                    '4' => 4,
                    '5' => 5,
                ],
            ])
            ->add('dateNote',DateType::class)

            ->add('save', SubmitType::class, array('label' => 'Sauver'))
            ->getForm();

        $form->handleRequest($request);
        if($form -> isSubmitted() && $form->isValid()){
            $boutTest = $this->getDoctrine()
                ->getRepository(Bouteille::class)
                ->findBy(array(
                    'idVin' => $form['idVin']->getData(),
                    'millesime' => $form['millesime']->getData()));
            if ($boutTest != null)
                return $this->render('error/noExistBouteille.html.twig');
            else{
                $bout = $form->getData();
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($bout);
                $entityManager->flush();
                return $this->redirectToRoute('acceuil');
            }
        }

        return $this->render('new.html.twig', array(
            'form' => $form->createView(),
            'vins' => $lesvins,
            'origines' => $lesOrigines
        ));

    }


    /**
     * @Route("/Bouteille/update/{id}/{millesime}", name ="updateBouteille" )
     */
    public function bouteilleUpdateAction(Request $request, $id, $millesime){
        $entityManager = $this->getDoctrine()->getManager();
        $bout = $entityManager->getRepository(Bouteille::class)->findOneBy(array('idVin'=>$id,'millesime'=>$millesime ));
        $lesvins = $this->getDoctrine()
            ->getRepository(Vin::class)
            ->findAll();
        $lesOrigines = $this->getDoctrine()
            ->getRepository(Origine::class)
            ->findAll();

        $form = $this->createFormBuilder($bout)
            ->add('prix',NumberType::class)
            ->add('quantite',IntegerType::class)
            ->add('note', ChoiceType::class, [
                'choices'  => [
                    '0' => 0 ,
                    '1' => 1,
                    '2' => 2,
                    '3' => 2,
                    '4' => 4,
                    '5' => 5,
                ],
            ])
            //->add('dateNote',\Date::class)
            ->add('save', SubmitType::class, array('label' => 'Sauver'))
            ->getForm();

        $form->handleRequest($request);
        if($form -> isSubmitted() && $form->isValid()){
            $bout = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($bout);
            $entityManager->flush();
            return $this->redirectToRoute('acceuil');
        }
        return $this->render('new.html.twig', array(
            'form' => $form->createView(),
            'vins' => $lesvins,
            'origines' => $lesOrigines
        ));



    }

    /**
     * @Route("/Bouteille/delete/{id}/{millesime}", name ="deleteBouteille")
     */
    public function bouteilleDeleteAction($id, $millesime){
        $entityManager = $this->getDoctrine()->getManager();
        $bout = $entityManager->getRepository(Bouteille::class)->findOneBy(array('idVin'=>$id,'millesime'=>$millesime ));

        if (!$bout) {
            throw $this->createNotFoundException(
                'Aucune bouteilles correspondant à ces identifiants : '
            );
        }else {
            $entityManager->remove($bout);
            $entityManager->flush();
            return $this->redirectToRoute('acceuil');
        }


    }




}