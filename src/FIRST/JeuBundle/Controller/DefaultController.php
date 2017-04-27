<?php

namespace FIRST\JeuBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use FIRST\JeuBundle\Entity\Position_Salon;
use FIRST\JeuBundle\Entity\Defausse;
use FIRST\JeuBundle\Entity\Salon_joueur;
use FIRST\JeuBundle\Form\Salon_joueurType;

class DefaultController extends Controller{
    /**
     * @Route("/")
     */
    public function indexAction(){
        $utilisateur = $this->getUser();
        return $this->render('FIRSTJeuBundle:Default:index.html.twig', array(
            'utilisateur' => $utilisateur
        ));
    }

    /**
     * @Route("/jouer")
     */
    public function jouerAction(){
    	$utilisateur = $this->getUser();
    	$em = $this->getDoctrine()->getEntityManager();
    	$salons = $em->getRepository("FIRSTJeuBundle:Salon_joueur")->findBy(array('joueur1' => ''.$utilisateur));
    	$salons2 = $em->getRepository("FIRSTJeuBundle:Salon_joueur")->findBy(array('joueur2' => ''.$utilisateur));

		return $this->render('FIRSTJeuBundle:Default:jeu.html.twig', array(
			'salons' => $salons,            'salons2' => $salons2,            'utilisateur' => $utilisateur
		));
    }

    /**
     * @Route("/nv_salon")
     */
    public function nv_salonAction(Request $request){
    	$utilisateur= $this->getUser();
        $repository = $this->getDoctrine()->getEntityManager();
        $position = $repository->getRepository("FIRSTJeuBundle:Position_Salon");
        $repository2 = $this->getDoctrine()->getRepository('FIRSTJeuBundle:Salon_joueur');
        $query2 = $repository2->createQueryBuilder('p')->select('MAX(p.salonId)')->getQuery();
        $products2 = $query2->setMaxResults(1)->getOneOrNullResult();
        $ech2 = $products2[1];
        $nv = intval($ech2)+1;

    	$a = new Salon_joueur();
        $a->setNumeroTour(0);
        $a->setJoueur1($utilisateur);
        $a->setSalonId($nv);
    	$form = $this->createForm(Salon_joueurType::class, $a);
    	$form->add('submit', SubmitType::class, array(
            'label' => 'Create',
            'attr'  => array('class' => 'btn btn-default pull-right')
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($a);
            $em->flush();
        }


        $nombre1 = rand(1,60);
        $nombre2 = rand(1,60);
        if ($nombre2 = $nombre1) {
            while ( $nombre2 == $nombre1) {
                $nombre2 = rand(1,60);
            }
        }
        $nombre3 = rand(1,60);
        if (($nombre3 = $nombre2) OR ($nombre3 = $nombre1)) {
            while (($nombre3 == $nombre1) OR ($nombre3 == $nombre2)) {
                $nombre3 = rand(1,60);
            }
        }
        $nombre4 = rand(1,60);
        if (($nombre4 = $nombre1) OR ($nombre4 = $nombre2) OR ($nombre4 = $nombre3)) {
            while (($nombre4 == $nombre1) OR ($nombre4 == $nombre2) OR ($nombre4 == $nombre3)) {
                $nombre4 = rand(1,60);
            }
        }
        $nombre5 = rand(1,60);
        if (($nombre5 = $nombre1) OR ($nombre5 = $nombre2) OR ($nombre5 = $nombre3) OR ($nombre5 = $nombre4)) {
            while (($nombre5 == $nombre1) OR ($nombre5 == $nombre2) OR ($nombre5 == $nombre3) OR ($nombre5 == $nombre4)) {
                $nombre5 = rand(1,60);
            }
        }
        $nombre6 = rand(1,60);
        if (($nombre6 = $nombre1) OR ($nombre6 = $nombre2) OR ($nombre6 = $nombre3) OR ($nombre6 = $nombre4) OR ($nombre6 = $nombre5)) {
            while (($nombre6 == $nombre1) OR ($nombre6 == $nombre2) OR ($nombre6 == $nombre3) OR ($nombre6 == $nombre4) OR ($nombre6 == $nombre5)) {
                $nombre6 = rand(1,60);
            }
        }
        $nombre7 = rand(1,60);
        if (($nombre7 = $nombre1) OR ($nombre7 = $nombre2) OR ($nombre7 = $nombre3) OR ($nombre7 = $nombre4) OR ($nombre7 = $nombre5) OR ($nombre7 = $nombre6)) {
            while (($nombre7 == $nombre1) OR ($nombre7 == $nombre2) OR ($nombre7 == $nombre3) OR ($nombre7 == $nombre4) OR ($nombre7 == $nombre5) OR ($nombre7 == $nombre6)) {
                $nombre7 = rand(1,60);
            }
        }
        $nombre8 = rand(1,60);
        if (($nombre8 = $nombre1) OR ($nombre8 = $nombre2) OR ($nombre8 = $nombre3) OR ($nombre8 = $nombre4) OR ($nombre8 = $nombre5) OR ($nombre8 = $nombre6) OR ($nombre8 = $nombre7)) {
            while (($nombre8 == $nombre1) OR ($nombre8 == $nombre2) OR ($nombre8 == $nombre3) OR ($nombre8 == $nombre4) OR ($nombre8 == $nombre5) OR ($nombre8 == $nombre6) OR ($nombre8 == $nombre7)) {
                $nombre8 = rand(1,60);
            }
        }
        $nombre9 = rand(1,60);
        if (($nombre9 = $nombre1) OR ($nombre9 = $nombre2) OR ($nombre9 = $nombre3) OR ($nombre9 = $nombre4) OR ($nombre9 = $nombre5) OR ($nombre9 = $nombre6) OR ($nombre9 = $nombre7) OR ($nombre9 = $nombre8)) {
            while (($nombre9 == $nombre1) OR ($nombre9 == $nombre2) OR ($nombre9 == $nombre3) OR ($nombre9 == $nombre4) OR ($nombre9 == $nombre5) OR ($nombre9 == $nombre6) OR ($nombre9 == $nombre7) OR ($nombre9 == $nombre8)) {
                $nombre9 = rand(1,60);
            }
        }
        $nombre10 = rand(1,60);
        if (($nombre10 = $nombre1) OR ($nombre10 = $nombre2) OR ($nombre10 = $nombre3) OR ($nombre10 = $nombre4) OR ($nombre10 = $nombre5) OR ($nombre10 = $nombre6) OR ($nombre10 = $nombre7) OR ($nombre10 = $nombre8) OR ($nombre10 = $nombre9)) {
            while (($nombre10 == $nombre1) OR ($nombre10 == $nombre2) OR ($nombre10 == $nombre3) OR ($nombre10 == $nombre4) OR ($nombre10 == $nombre5) OR ($nombre10 == $nombre6) OR ($nombre10 == $nombre7) OR ($nombre10 == $nombre8) OR ($nombre10 == $nombre9)) {
                $nombre10 = rand(1,60);
            }
        }
        $nombre11 = rand(1,60);
        if (($nombre11 = $nombre1) OR ($nombre11 = $nombre2) OR ($nombre11 = $nombre3) OR ($nombre11 = $nombre4) OR ($nombre11 = $nombre5) OR ($nombre11 = $nombre6) OR ($nombre11 = $nombre7) OR ($nombre11 = $nombre8) OR ($nombre11 = $nombre9) OR ($nombre11 = $nombre10)) {
            while (($nombre11 == $nombre1) OR ($nombre11 == $nombre2) OR ($nombre11 == $nombre3) OR ($nombre11 == $nombre4) OR ($nombre11 == $nombre5) OR ($nombre11 == $nombre6) OR ($nombre11 == $nombre7) OR ($nombre11 == $nombre8) OR ($nombre11 == $nombre9) OR ($nombre11 == $nombre10)) {
                $nombre11 = rand(1,60);
            }
        }
        $nombre12 = rand(1,60);
        if (($nombre12 = $nombre1) OR ($nombre12 = $nombre2) OR ($nombre12 = $nombre3) OR ($nombre12 = $nombre4) OR ($nombre12 = $nombre5) OR ($nombre12 = $nombre6) OR ($nombre12 = $nombre7) OR ($nombre12 = $nombre8) OR ($nombre12 = $nombre9) OR ($nombre12 = $nombre10) OR ($nombre12 = $nombre11)) {
            while (($nombre12 == $nombre1) OR ($nombre12 == $nombre2) OR ($nombre12 == $nombre3) OR ($nombre12 == $nombre4) OR ($nombre12 == $nombre5) OR ($nombre12 == $nombre6) OR ($nombre12 == $nombre7) OR ($nombre12 == $nombre8) OR ($nombre12 == $nombre9) OR ($nombre12 == $nombre10) OR ($nombre12 == $nombre11)) {
                $nombre12 = rand(1,60);
            }
        }
        $nombre13 = rand(1,60);
        if (($nombre13 = $nombre1) OR ($nombre13 = $nombre2) OR ($nombre13 = $nombre3) OR ($nombre13 = $nombre4) OR ($nombre13 = $nombre5) OR ($nombre13 = $nombre6) OR ($nombre13 = $nombre7) OR ($nombre13 = $nombre8) OR ($nombre13 = $nombre9) OR ($nombre13 = $nombre10) OR ($nombre13 = $nombre11) OR ($nombre13 = $nombre12)) {
            while (($nombre13 == $nombre1) OR ($nombre13 == $nombre2) OR ($nombre13 == $nombre3) OR ($nombre13 == $nombre4) OR ($nombre13 == $nombre5) OR ($nombre13 == $nombre6) OR ($nombre13 == $nombre7) OR ($nombre13 == $nombre8) OR ($nombre13 == $nombre9) OR ($nombre13 == $nombre10) OR ($nombre13 == $nombre11) OR ($nombre13 == $nombre12)) {
                $nombre13 = rand(1,60);
            }
        }
        $nombre14 = rand(1,60);
        if (($nombre14 = $nombre1) OR ($nombre14 = $nombre2) OR ($nombre14 = $nombre3) OR ($nombre14 = $nombre4) OR ($nombre14 = $nombre5) OR ($nombre14 = $nombre6) OR ($nombre14 = $nombre7) OR ($nombre14 = $nombre8) OR ($nombre14 = $nombre9) OR ($nombre14 = $nombre10) OR ($nombre14 = $nombre11) OR ($nombre14 = $nombre12) OR ($nombre14 = $nombre13)) {
            while (($nombre14 == $nombre1) OR ($nombre14 == $nombre2) OR ($nombre14 == $nombre3) OR ($nombre14 == $nombre4) OR ($nombre14 == $nombre5) OR ($nombre14 == $nombre6) OR ($nombre14 == $nombre7) OR ($nombre14 == $nombre8) OR ($nombre14 == $nombre9) OR ($nombre14 == $nombre10) OR ($nombre14 == $nombre11) OR ($nombre14 == $nombre12) OR ($nombre14 == $nombre13)) {
                $nombre14 = rand(1,60);
            }
        }
        $nombre15 = rand(1,60);
        if (($nombre15 = $nombre1) OR ($nombre15 = $nombre2) OR ($nombre15 = $nombre3) OR ($nombre15 = $nombre4) OR ($nombre15 = $nombre5) OR ($nombre15 = $nombre6) OR ($nombre15 = $nombre7) OR ($nombre15 = $nombre8) OR ($nombre15 = $nombre9) OR ($nombre15 = $nombre10) OR ($nombre15 = $nombre11) OR ($nombre15 = $nombre12) OR ($nombre15 = $nombre13) OR ($nombre15 = $nombre14)) {
            while (($nombre15 == $nombre1) OR ($nombre15 == $nombre2) OR ($nombre15 == $nombre3) OR ($nombre15 == $nombre4) OR ($nombre15 == $nombre5) OR ($nombre15 == $nombre6) OR ($nombre15 == $nombre7) OR ($nombre15 == $nombre8) OR ($nombre15 == $nombre9) OR ($nombre15 == $nombre10) OR ($nombre15 == $nombre11) OR ($nombre15 == $nombre12) OR ($nombre15 == $nombre13) OR ($nombre15 == $nombre14)) {
                $nombre15 = rand(1,60);
            }
        }
        $nombre16 = rand(1,60);
        if (($nombre16 = $nombre1) OR ($nombre16 = $nombre2) OR ($nombre16 = $nombre3) OR ($nombre16 = $nombre4) OR ($nombre16 = $nombre5) OR ($nombre16 = $nombre6) OR ($nombre16 = $nombre7) OR ($nombre16 = $nombre8) OR ($nombre16 = $nombre9) OR ($nombre16 = $nombre10) OR ($nombre16 = $nombre11) OR ($nombre16 = $nombre12) OR ($nombre16 = $nombre13) OR ($nombre16 = $nombre14) OR ($nombre16 = $nombre15)) {
            while (($nombre16 == $nombre1) OR ($nombre16 == $nombre2) OR ($nombre16 == $nombre3) OR ($nombre16 == $nombre4) OR ($nombre16 == $nombre5) OR ($nombre16 == $nombre6) OR ($nombre16 == $nombre7) OR ($nombre16 == $nombre8) OR ($nombre16 == $nombre9) OR ($nombre16 == $nombre10) OR ($nombre16 == $nombre11) OR ($nombre16 == $nombre12) OR ($nombre16 == $nombre13) OR ($nombre16 == $nombre14) OR ($nombre16 == $nombre15)) {
                $nombre16 = rand(1,60);
            }
        }

        $repository = $this->getDoctrine()->getRepository('FIRSTJeuBundle:Salon_joueur');
        $query = $repository->createQueryBuilder('p')->select('MAX(p.salonId)')->getQuery();

        $products = $query->setMaxResults(1)->getOneOrNullResult();
        $ech = $products[1];

        $b = new Position_Salon();
        $b->setIdSalon($ech);
        $t1 = "setCarte".''.$nombre1;   $b->$t1("carte_pioche_2_1");        $t2 = "setCarte".''.$nombre2;   $b->$t2("carte_pioche_2_2");
        $t3 = "setCarte".''.$nombre3;   $b->$t3("carte_pioche_2_3");        $t4 = "setCarte".''.$nombre4;   $b->$t4("carte_pioche_2_4");
        $t5 = "setCarte".''.$nombre5;   $b->$t5("carte_pioche_2_5");        $t6 = "setCarte".''.$nombre6;   $b->$t6("carte_pioche_2_6");
        $t7 = "setCarte".''.$nombre7;   $b->$t7("carte_pioche_2_7");        $t8 = "setCarte".''.$nombre8;   $b->$t8("carte_pioche_2_8");
        $t9 = "setCarte".''.$nombre9;   $b->$t9("carte_pioche_1_1");        $t10 = "setCarte".''.$nombre10;   $b->$t10("carte_pioche_1_2");
        $t11 = "setCarte".''.$nombre11;   $b->$t11("carte_pioche_1_3");        $t12 = "setCarte".''.$nombre12;   $b->$t12("carte_pioche_1_4");
        $t13 = "setCarte".''.$nombre13;   $b->$t13("carte_pioche_1_5");        $t14 = "setCarte".''.$nombre14;   $b->$t14("carte_pioche_1_6");
        $t15 = "setCarte".''.$nombre15;   $b->$t15("carte_pioche_1_7");        $t16 = "setCarte".''.$nombre16;   $b->$t16("carte_pioche_1_8");

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($b);
            $em->flush();
        }

        $c = new Defausse();
        $c->setSalid($ech);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($c);
            $em->flush();
            return $this->redirect("http://89.234.182.92/jeu/jouer");
        }
        
        return $this->render('FIRSTJeuBundle:Default:nv_salon.html.twig', array(
        	'form' => $form->createView(),
            'utilisateur' => $utilisateur
        ));
    }

    /**
     * @Route("/salon/{id}")
     */
    public function salonAction($id){
        $utilisateur= $this->getUser();
        $repository = $this->getDoctrine()->getEntityManager();
        $salons = $repository->getRepository("FIRSTJeuBundle:Salon_joueur")->findOneBy(array('salonId' => $id));
        $carte = $repository->getRepository("FIRSTJeuBundle:Carte");
        $position = $repository->getRepository("FIRSTJeuBundle:Position_Salon")->findOneBy(array('idSalon' => $id));

        $joueur1 = $salons->getJoueur1();
        $joueur2 = $salons->getJoueur2();
        $tour = $salons->getNumeroTour();

        $pre = $this->getDoctrine()->getRepository('FIRSTJeuBundle:Position_Salon')->createQueryBuilder('e')->select('e')->where('e.idSalon = '.$id)->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $carte_pioche_1_1 = array_search('carte_pioche_1_1', $pre[0]);        $carte_pioche_1_2 = array_search('carte_pioche_1_2', $pre[0]);
        $carte_pioche_1_3 = array_search('carte_pioche_1_3', $pre[0]);        $carte_pioche_1_4 = array_search('carte_pioche_1_4', $pre[0]);
        $carte_pioche_1_5 = array_search('carte_pioche_1_5', $pre[0]);        $carte_pioche_1_6 = array_search('carte_pioche_1_6', $pre[0]);
        $carte_pioche_1_7 = array_search('carte_pioche_1_7', $pre[0]);        $carte_pioche_1_8 = array_search('carte_pioche_1_8', $pre[0]);

        $carte_pioche_2_1 = array_search('carte_pioche_2_1', $pre[0]);        $carte_pioche_2_2 = array_search('carte_pioche_2_2', $pre[0]);
        $carte_pioche_2_3 = array_search('carte_pioche_2_3', $pre[0]);        $carte_pioche_2_4 = array_search('carte_pioche_2_4', $pre[0]);
        $carte_pioche_2_5 = array_search('carte_pioche_2_5', $pre[0]);        $carte_pioche_2_6 = array_search('carte_pioche_2_6', $pre[0]);
        $carte_pioche_2_7 = array_search('carte_pioche_2_7', $pre[0]);        $carte_pioche_2_8 = array_search('carte_pioche_2_8', $pre[0]);

        $carte_cote_2_1 = array_search('carte_cote_2_1', $pre[0]);        $carte_cote_2_2 = array_search('carte_cote_2_2', $pre[0]);
        $carte_cote_2_3 = array_search('carte_cote_2_3', $pre[0]);        $carte_cote_2_4 = array_search('carte_cote_2_4', $pre[0]);
        $carte_cote_2_5 = array_search('carte_cote_2_5', $pre[0]);        $carte_cote_2_6 = array_search('carte_cote_2_6', $pre[0]);
        $carte_cote_2_7 = array_search('carte_cote_2_7', $pre[0]);        $carte_cote_2_8 = array_search('carte_cote_2_8', $pre[0]);
        $carte_cote_2_9 = array_search('carte_cote_2_9', $pre[0]);        $carte_cote_2_10 = array_search('carte_cote_2_10', $pre[0]);
        $carte_cote_2_11 = array_search('carte_cote_2_11', $pre[0]);        $carte_cote_2_12 = array_search('carte_cote_2_12', $pre[0]);
        $carte_cote_2_13 = array_search('carte_cote_2_13', $pre[0]);        $carte_cote_2_14 = array_search('carte_cote_2_14', $pre[0]);
        $carte_cote_2_15 = array_search('carte_cote_2_15', $pre[0]);        $carte_cote_2_16 = array_search('carte_cote_2_16', $pre[0]);
        $carte_cote_2_17 = array_search('carte_cote_2_17', $pre[0]);        $carte_cote_2_18 = array_search('carte_cote_2_18', $pre[0]);
        $carte_cote_2_19 = array_search('carte_cote_2_19', $pre[0]);        $carte_cote_2_20 = array_search('carte_cote_2_20', $pre[0]);
        $carte_cote_2_21 = array_search('carte_cote_2_21', $pre[0]);        $carte_cote_2_22 = array_search('carte_cote_2_22', $pre[0]);
        $carte_cote_2_23 = array_search('carte_cote_2_23', $pre[0]);        $carte_cote_2_24 = array_search('carte_cote_2_24', $pre[0]);
        $carte_cote_2_25 = array_search('carte_cote_2_25', $pre[0]);        $carte_cote_2_26 = array_search('carte_cote_2_26', $pre[0]);
        $carte_cote_2_27 = array_search('carte_cote_2_27', $pre[0]);        $carte_cote_2_28 = array_search('carte_cote_2_28', $pre[0]);
        $carte_cote_2_29 = array_search('carte_cote_2_29', $pre[0]);        $carte_cote_2_30 = array_search('carte_cote_2_30', $pre[0]);
        $carte_cote_2_31 = array_search('carte_cote_2_31', $pre[0]);        $carte_cote_2_32 = array_search('carte_cote_2_32', $pre[0]);
        $carte_cote_2_33 = array_search('carte_cote_2_33', $pre[0]);        $carte_cote_2_34 = array_search('carte_cote_2_34', $pre[0]);
        $carte_cote_2_35 = array_search('carte_cote_2_35', $pre[0]);        $carte_cote_2_36 = array_search('carte_cote_2_36', $pre[0]);
        $carte_cote_2_37 = array_search('carte_cote_2_37', $pre[0]);        $carte_cote_2_38 = array_search('carte_cote_2_38', $pre[0]);
        $carte_cote_2_39 = array_search('carte_cote_2_39', $pre[0]);        $carte_cote_2_40 = array_search('carte_cote_2_40', $pre[0]);
        $carte_cote_2_41 = array_search('carte_cote_2_41', $pre[0]);        $carte_cote_2_42 = array_search('carte_cote_2_42', $pre[0]);
        $carte_cote_2_43 = array_search('carte_cote_2_43', $pre[0]);        $carte_cote_2_44 = array_search('carte_cote_2_44', $pre[0]);
        $carte_cote_2_45 = array_search('carte_cote_2_45', $pre[0]);        $carte_cote_2_46 = array_search('carte_cote_2_46', $pre[0]);
        $carte_cote_2_47 = array_search('carte_cote_2_47', $pre[0]);        $carte_cote_2_48 = array_search('carte_cote_2_48', $pre[0]);
        $carte_cote_2_49 = array_search('carte_cote_2_49', $pre[0]);        $carte_cote_2_50 = array_search('carte_cote_2_50', $pre[0]);
        $carte_cote_2_51 = array_search('carte_cote_2_51', $pre[0]);        $carte_cote_2_52 = array_search('carte_cote_2_52', $pre[0]);
        $carte_cote_2_53 = array_search('carte_cote_2_53', $pre[0]);        $carte_cote_2_54 = array_search('carte_cote_2_54', $pre[0]);
        $carte_cote_2_55 = array_search('carte_cote_2_55', $pre[0]);        $carte_cote_2_56 = array_search('carte_cote_2_56', $pre[0]);
        $carte_cote_2_57 = array_search('carte_cote_2_57', $pre[0]);        $carte_cote_2_58 = array_search('carte_cote_2_58', $pre[0]);
        $carte_cote_2_59 = array_search('carte_cote_2_59', $pre[0]);        $carte_cote_2_60 = array_search('carte_cote_2_60', $pre[0]);

        $carte_def_1 = array_search('carte_def_1', $pre[0]);        $carte_def_2 = array_search('carte_def_2', $pre[0]);
        $carte_def_3 = array_search('carte_def_3', $pre[0]);        $carte_def_4 = array_search('carte_def_4', $pre[0]);
        $carte_def_5 = array_search('carte_def_5', $pre[0]);        $carte_def_6 = array_search('carte_def_6', $pre[0]);
        $carte_def_7 = array_search('carte_def_7', $pre[0]);        $carte_def_8 = array_search('carte_def_8', $pre[0]);
        $carte_def_9 = array_search('carte_def_9', $pre[0]);        $carte_def_10 = array_search('carte_def_10', $pre[0]);
        $carte_def_11 = array_search('carte_def_11', $pre[0]);        $carte_def_12 = array_search('carte_def_12', $pre[0]);
        $carte_def_13 = array_search('carte_def_13', $pre[0]);        $carte_def_14 = array_search('carte_def_14', $pre[0]);
        $carte_def_15 = array_search('carte_def_15', $pre[0]);        $carte_def_16 = array_search('carte_def_16', $pre[0]);
        $carte_def_17 = array_search('carte_def_17', $pre[0]);        $carte_def_18 = array_search('carte_def_18', $pre[0]);
        $carte_def_19 = array_search('carte_def_19', $pre[0]);        $carte_def_20 = array_search('carte_def_20', $pre[0]);
        $carte_def_21 = array_search('carte_def_21', $pre[0]);        $carte_def_22 = array_search('carte_def_22', $pre[0]);
        $carte_def_23 = array_search('carte_def_23', $pre[0]);        $carte_def_24 = array_search('carte_def_24', $pre[0]);
        $carte_def_25 = array_search('carte_def_25', $pre[0]);        $carte_def_26 = array_search('carte_def_26', $pre[0]);
        $carte_def_27 = array_search('carte_def_27', $pre[0]);        $carte_def_28 = array_search('carte_def_28', $pre[0]);
        $carte_def_29 = array_search('carte_def_29', $pre[0]);        $carte_def_30 = array_search('carte_def_30', $pre[0]);
        $carte_def_31 = array_search('carte_def_31', $pre[0]);        $carte_def_32 = array_search('carte_def_32', $pre[0]);
        $carte_def_33 = array_search('carte_def_33', $pre[0]);        $carte_def_34 = array_search('carte_def_34', $pre[0]);
        $carte_def_35 = array_search('carte_def_35', $pre[0]);        $carte_def_36 = array_search('carte_def_36', $pre[0]);
        $carte_def_37 = array_search('carte_def_37', $pre[0]);        $carte_def_38 = array_search('carte_def_38', $pre[0]);
        $carte_def_39 = array_search('carte_def_39', $pre[0]);        $carte_def_40 = array_search('carte_def_40', $pre[0]);
        $carte_def_41 = array_search('carte_def_41', $pre[0]);        $carte_def_42 = array_search('carte_def_42', $pre[0]);
        $carte_def_43 = array_search('carte_def_43', $pre[0]);        $carte_def_44 = array_search('carte_def_44', $pre[0]);
        $carte_def_45 = array_search('carte_def_45', $pre[0]);        $carte_def_46 = array_search('carte_def_46', $pre[0]);
        $carte_def_47 = array_search('carte_def_47', $pre[0]);        $carte_def_48 = array_search('carte_def_48', $pre[0]);
        $carte_def_49 = array_search('carte_def_49', $pre[0]);        $carte_def_50 = array_search('carte_def_50', $pre[0]);
        $carte_def_51 = array_search('carte_def_51', $pre[0]);        $carte_def_52 = array_search('carte_def_52', $pre[0]);
        $carte_def_53 = array_search('carte_def_53', $pre[0]);        $carte_def_54 = array_search('carte_def_54', $pre[0]);
        $carte_def_55 = array_search('carte_def_55', $pre[0]);        $carte_def_56 = array_search('carte_def_56', $pre[0]);
        $carte_def_57 = array_search('carte_def_57', $pre[0]);        $carte_def_58 = array_search('carte_def_58', $pre[0]);
        $carte_def_59 = array_search('carte_def_59', $pre[0]);        $carte_def_60 = array_search('carte_def_60', $pre[0]);

        $carte_cote_1_1 = array_search('carte_cote_1_1', $pre[0]);        $carte_cote_1_2 = array_search('carte_cote_1_2', $pre[0]);
        $carte_cote_1_3 = array_search('carte_cote_1_3', $pre[0]);        $carte_cote_1_4 = array_search('carte_cote_1_4', $pre[0]);
        $carte_cote_1_5 = array_search('carte_cote_1_5', $pre[0]);        $carte_cote_1_6 = array_search('carte_cote_1_6', $pre[0]);
        $carte_cote_1_7 = array_search('carte_cote_1_7', $pre[0]);        $carte_cote_1_8 = array_search('carte_cote_1_8', $pre[0]);
        $carte_cote_1_9 = array_search('carte_cote_1_9', $pre[0]);        $carte_cote_1_10 = array_search('carte_cote_1_10', $pre[0]);
        $carte_cote_1_11 = array_search('carte_cote_1_11', $pre[0]);        $carte_cote_1_12 = array_search('carte_cote_1_12', $pre[0]);
        $carte_cote_1_13 = array_search('carte_cote_1_13', $pre[0]);        $carte_cote_1_14 = array_search('carte_cote_1_14', $pre[0]);
        $carte_cote_1_15 = array_search('carte_cote_1_15', $pre[0]);        $carte_cote_1_16 = array_search('carte_cote_1_16', $pre[0]);
        $carte_cote_1_17 = array_search('carte_cote_1_17', $pre[0]);        $carte_cote_1_18 = array_search('carte_cote_1_18', $pre[0]);
        $carte_cote_1_19 = array_search('carte_cote_1_19', $pre[0]);        $carte_cote_1_20 = array_search('carte_cote_1_20', $pre[0]);
        $carte_cote_1_21 = array_search('carte_cote_1_21', $pre[0]);        $carte_cote_1_22 = array_search('carte_cote_1_22', $pre[0]);
        $carte_cote_1_23 = array_search('carte_cote_1_23', $pre[0]);        $carte_cote_1_24 = array_search('carte_cote_1_24', $pre[0]);
        $carte_cote_1_25 = array_search('carte_cote_1_25', $pre[0]);        $carte_cote_1_26 = array_search('carte_cote_1_26', $pre[0]);
        $carte_cote_1_27 = array_search('carte_cote_1_27', $pre[0]);        $carte_cote_1_28 = array_search('carte_cote_1_28', $pre[0]);
        $carte_cote_1_29 = array_search('carte_cote_1_29', $pre[0]);        $carte_cote_1_30 = array_search('carte_cote_1_30', $pre[0]);
        $carte_cote_1_31 = array_search('carte_cote_1_31', $pre[0]);        $carte_cote_1_32 = array_search('carte_cote_1_32', $pre[0]);
        $carte_cote_1_33 = array_search('carte_cote_1_33', $pre[0]);        $carte_cote_1_34 = array_search('carte_cote_1_34', $pre[0]);
        $carte_cote_1_35 = array_search('carte_cote_1_35', $pre[0]);        $carte_cote_1_36 = array_search('carte_cote_1_36', $pre[0]);
        $carte_cote_1_37 = array_search('carte_cote_1_37', $pre[0]);        $carte_cote_1_38 = array_search('carte_cote_1_38', $pre[0]);
        $carte_cote_1_39 = array_search('carte_cote_1_39', $pre[0]);        $carte_cote_1_40 = array_search('carte_cote_1_40', $pre[0]);
        $carte_cote_1_41 = array_search('carte_cote_1_41', $pre[0]);        $carte_cote_1_42 = array_search('carte_cote_1_42', $pre[0]);
        $carte_cote_1_43 = array_search('carte_cote_1_43', $pre[0]);        $carte_cote_1_44 = array_search('carte_cote_1_44', $pre[0]);
        $carte_cote_1_45 = array_search('carte_cote_1_45', $pre[0]);        $carte_cote_1_46 = array_search('carte_cote_1_46', $pre[0]);
        $carte_cote_1_47 = array_search('carte_cote_1_47', $pre[0]);        $carte_cote_1_48 = array_search('carte_cote_1_48', $pre[0]);
        $carte_cote_1_49 = array_search('carte_cote_1_49', $pre[0]);        $carte_cote_1_50 = array_search('carte_cote_1_50', $pre[0]);
        $carte_cote_1_51 = array_search('carte_cote_1_51', $pre[0]);        $carte_cote_1_52 = array_search('carte_cote_1_52', $pre[0]);
        $carte_cote_1_53 = array_search('carte_cote_1_53', $pre[0]);        $carte_cote_1_54 = array_search('carte_cote_1_54', $pre[0]);
        $carte_cote_1_55 = array_search('carte_cote_1_55', $pre[0]);        $carte_cote_1_56 = array_search('carte_cote_1_56', $pre[0]);
        $carte_cote_1_57 = array_search('carte_cote_1_57', $pre[0]);        $carte_cote_1_58 = array_search('carte_cote_1_58', $pre[0]);
        $carte_cote_1_59 = array_search('carte_cote_1_59', $pre[0]);        $carte_cote_1_60 = array_search('carte_cote_1_60', $pre[0]);


        if ($tour %2 == 1){ $a_qui_le_tour = $salons->getJoueur1();} 
        if ($tour %2 == 0){ $a_qui_le_tour = $salons->getJoueur2();}

        if ($a_qui_le_tour != $utilisateur) {
            $bon = 'mauvais';
        } if ($a_qui_le_tour == $utilisateur) {
            $bon = 'bon';
        }

        if (($carte_cote_1_1 == 'carte1') AND ($carte_cote_1_2 == 'carte2') AND ($carte_cote_1_3 == 'carte3')){$carteextra1_1 = 4;}
        elseif (($carte_cote_1_1 == 'carte1') AND ($carte_cote_1_2 == 'carte2') OR ($carte_cote_1_1 == 'carte1') AND ($carte_cote_1_3 == 'carte3') OR ($carte_cote_1_2 == 'carte2') AND ($carte_cote_1_3 == 'carte2')){$carteextra1_1 = 3;}
        elseif (($carte_cote_1_1 == 'carte1') OR ($carte_cote_1_2 == 'carte2') OR ($carte_cote_1_3 == 'carte3')){$carteextra1_1 = 2;}else$carteextra1_1 = 1;

        if (($carte_cote_1_13 == 'carte13') AND ($carte_cote_1_14 == 'carte14') AND ($carte_cote_1_15 == 'carte15')){$carteextra2_1 = 4;}
        elseif (($carte_cote_1_13 == 'carte13') AND ($carte_cote_1_14 == 'carte14') OR ($carte_cote_1_13 == 'carte13') AND ($carte_cote_1_15 == 'carte15') OR ($carte_cote_1_14 == 'carte14') AND ($carte_cote_1_15 == 'carte15')){$carteextra2_1 = 3;}
        elseif (($carte_cote_1_13 == 'carte13') OR ($carte_cote_1_14 == 'carte14') OR ($carte_cote_1_15 == 'carte15')){$carteextra2_1 = 2;}else$carteextra2_1 = 1;

        if (($carte_cote_1_25 == 'carte25') AND ($carte_cote_1_26 == 'carte26') AND ($carte_cote_1_27 == 'carte27')) {$carteextra3_1 = 4;}
        elseif (($carte_cote_1_25 == 'carte25') AND ($carte_cote_1_26 == 'carte26') OR ($carte_cote_1_25 == 'carte25') AND ($carte_cote_1_27 == 'carte27') OR ($carte_cote_1_26 == 'carte26') AND ($carte_cote_1_27 == 'carte27')){$carteextra3_1 = 3;}
        elseif (($carte_cote_1_25 == 'carte25') OR ($carte_cote_1_26 == 'carte26') OR ($carte_cote_1_27 == 'carte27')){$carteextra3_1 = 2;}else$carteextra3_1 = 1;

        if (($carte_cote_1_37 == 'carte37') AND ($carte_cote_1_38 == 'carte38') AND ($carte_cote_1_39 == 'carte39')) {$carteextra4_1 = 4;}
        elseif (($carte_cote_1_37 == 'carte37') AND ($carte_cote_1_38 == 'carte38') OR ($carte_cote_1_37 == 'carte37') AND ($carte_cote_1_39 == 'carte39') OR ($carte_cote_1_38 == 'carte38') AND ($carte_cote_1_39 == 'carte39')){$carteextra4_1 = 3;}
        elseif (($carte_cote_1_37 == 'carte37') OR ($carte_cote_1_38 == 'carte38') OR ($carte_cote_1_39 == 'carte39')){$carteextra4_1 = 2;}else$carteextra4_1 = 1;

        if (($carte_cote_1_49 == 'carte49') AND ($carte_cote_1_50 == 'carte50') AND ($carte_cote_1_51 == 'carte51')){$carteextra5_1 = 4;}
        elseif (($carte_cote_1_49 == 'carte49') AND ($carte_cote_1_50 == 'carte50') OR ($carte_cote_1_49 == 'carte49') AND ($carte_cote_1_51 == 'carte51') OR ($carte_cote_1_50 == 'carte50') AND ($carte_cote_1_51 == 'carte51')){$carteextra5_1 = 3;}
        elseif (($carte_cote_1_49 == 'carte49') OR ($carte_cote_1_50 == 'carte50') OR ($carte_cote_1_51 == 'carte51')){$carteextra5_1 = 2;}else$carteextra5_1 = 1;


        if (($carte_cote_2_1 == 'carte1') AND ($carte_cote_2_2 == 'carte2') AND ($carte_cote_2_3 == 'carte3')){$carteextra1_2 = 4;}
        elseif (($carte_cote_2_1 == 'carte1') AND ($carte_cote_2_2 == 'carte2') OR ($carte_cote_2_1 == 'carte1') AND ($carte_cote_2_3 == 'carte3') OR ($carte_cote_2_2 == 'carte2') AND ($carte_cote_2_3 == 'carte2')){$carteextra1_2 = 3;}
        elseif (($carte_cote_2_1 == 'carte1') OR ($carte_cote_2_2 == 'carte2') OR ($carte_cote_2_3 == 'carte3')){$carteextra1_2 = 2;}else$carteextra1_2 = 1;

        if (($carte_cote_2_13 == 'carte13') AND ($carte_cote_2_14 == 'carte14') AND ($carte_cote_2_15 == 'carte15')){$carteextra2_2 = 4;}
        elseif (($carte_cote_2_13 == 'carte13') AND ($carte_cote_2_14 == 'carte14') OR ($carte_cote_2_13 == 'carte13') AND ($carte_cote_2_15 == 'carte15') OR ($carte_cote_2_14 == 'carte14') AND ($carte_cote_2_15 == 'carte15')){$carteextra2_2 = 3;}
        elseif (($carte_cote_2_13 == 'carte13') OR ($carte_cote_2_14 == 'carte14') OR ($carte_cote_2_15 == 'carte15')){$carteextra2_2 = 2;}else$carteextra2_2 = 1;

        if (($carte_cote_2_25 == 'carte25') AND ($carte_cote_2_26 == 'carte26') AND ($carte_cote_2_27 == 'carte27')) {$carteextra3_2 = 4;}
        elseif (($carte_cote_2_25 == 'carte25') AND ($carte_cote_2_26 == 'carte26') OR ($carte_cote_2_25 == 'carte25') AND ($carte_cote_2_27 == 'carte27') OR ($carte_cote_2_26 == 'carte26') AND ($carte_cote_2_27 == 'carte27')){$carteextra3_2 = 3;}
        elseif (($carte_cote_2_25 == 'carte25') OR ($carte_cote_2_26 == 'carte26') OR ($carte_cote_2_27 == 'carte27')){$carteextra3_2 = 2;}else$carteextra3_2 = 1;

        if (($carte_cote_2_37 == 'carte37') AND ($carte_cote_2_38 == 'carte38') AND ($carte_cote_2_39 == 'carte39')) {$carteextra4_2 = 4;}
        elseif (($carte_cote_2_37 == 'carte37') AND ($carte_cote_2_38 == 'carte38') OR ($carte_cote_2_37 == 'carte37') AND ($carte_cote_2_39 == 'carte39') OR ($carte_cote_2_38 == 'carte38') AND ($carte_cote_2_39 == 'carte39')){$carteextra4_2 = 3;}
        elseif (($carte_cote_2_37 == 'carte37') OR ($carte_cote_2_38 == 'carte38') OR ($carte_cote_2_39 == 'carte39')){$carteextra4_2 = 2;}else$carteextra4_2 = 1;

        if (($carte_cote_2_49 == 'carte49') AND ($carte_cote_2_50 == 'carte50') AND ($carte_cote_2_51 == 'carte51')){$carteextra5_2 = 4;}
        elseif (($carte_cote_2_49 == 'carte49') AND ($carte_cote_2_50 == 'carte50') OR ($carte_cote_2_49 == 'carte49') AND ($carte_cote_2_51 == 'carte51') OR ($carte_cote_2_50 == 'carte50') AND ($carte_cote_2_51 == 'carte51')){$carteextra5_2 = 3;}
        elseif (($carte_cote_2_49 == 'carte49') OR ($carte_cote_2_50 == 'carte50') OR ($carte_cote_2_51 == 'carte51')){$carteextra5_2 = 2;}else$carteextra5_2 = 1;

        if ($carte_cote_1_4 == 'carte4'){$carte_valeur_1_4 = 2;}else$carte_valeur_1_4 = 0;        if ($carte_cote_1_5 == 'carte5'){$carte_valeur_1_5 = 3;}else$carte_valeur_1_5 = 0;
        if ($carte_cote_1_6 == 'carte6'){$carte_valeur_1_6 = 4;}else$carte_valeur_1_6 = 0;        if ($carte_cote_1_7 == 'carte7'){$carte_valeur_1_7 = 5;}else$carte_valeur_1_7 = 0;
        if ($carte_cote_1_8 == 'carte8'){$carte_valeur_1_8 = 6;}else$carte_valeur_1_8 = 0;        if ($carte_cote_1_9 == 'carte9'){$carte_valeur_1_9 = 7;}else$carte_valeur_1_9 = 0;
        if ($carte_cote_1_10 == 'carte10'){$carte_valeur_1_10 = 8;}else$carte_valeur_1_10 = 0;        if ($carte_cote_1_11 == 'carte11'){$carte_valeur_1_11 = 9;}else$carte_valeur_1_11 = 0;
        if ($carte_cote_1_12 == 'carte12'){$carte_valeur_1_12 = 10;}else$carte_valeur_1_12 = 0;

        if ($carte_cote_1_16 == 'carte16'){$carte_valeur_1_16 = 2;}else$carte_valeur_1_16 = 0;        if ($carte_cote_1_17 == 'carte17'){$carte_valeur_1_17 = 3;}else$carte_valeur_1_17 = 0;
        if ($carte_cote_1_18 == 'carte18'){$carte_valeur_1_18 = 4;}else$carte_valeur_1_18 = 0;        if ($carte_cote_1_19 == 'carte19'){$carte_valeur_1_19 = 5;}else$carte_valeur_1_19 = 0;
        if ($carte_cote_1_20 == 'carte20'){$carte_valeur_1_20 = 6;}else$carte_valeur_1_20 = 0;        if ($carte_cote_1_21 == 'carte21'){$carte_valeur_1_21 = 7;}else$carte_valeur_1_21 = 0;
        if ($carte_cote_1_22 == 'carte10'){$carte_valeur_1_22 = 8;}else$carte_valeur_1_22 = 0;        if ($carte_cote_1_23 == 'carte23'){$carte_valeur_1_23 = 9;}else$carte_valeur_1_23 = 0;
        if ($carte_cote_1_24 == 'carte24'){$carte_valeur_1_24 = 10;}else$carte_valeur_1_24 = 0;

        if ($carte_cote_1_28 == 'carte28'){$carte_valeur_1_28 = 2;}else$carte_valeur_1_28 = 0;        if ($carte_cote_1_29 == 'carte29'){$carte_valeur_1_29 = 3;}else$carte_valeur_1_29 = 0;
        if ($carte_cote_1_30 == 'carte30'){$carte_valeur_1_30 = 4;}else$carte_valeur_1_30 = 0;        if ($carte_cote_1_31 == 'carte31'){$carte_valeur_1_31 = 5;}else$carte_valeur_1_31 = 0;
        if ($carte_cote_1_32 == 'carte32'){$carte_valeur_1_32 = 6;}else$carte_valeur_1_32 = 0;        if ($carte_cote_1_33 == 'carte33'){$carte_valeur_1_33 = 7;}else$carte_valeur_1_33 = 0;
        if ($carte_cote_1_34 == 'carte34'){$carte_valeur_1_34 = 8;}else$carte_valeur_1_34 = 0;        if ($carte_cote_1_35 == 'carte35'){$carte_valeur_1_35 = 9;}else$carte_valeur_1_35 = 0;
        if ($carte_cote_1_36 == 'carte36'){$carte_valeur_1_36 = 10;}else$carte_valeur_1_36 = 0;

        if ($carte_cote_1_40 == 'carte40'){$carte_valeur_1_40 = 2;}else$carte_valeur_1_40 = 0;        if ($carte_cote_1_41 == 'carte41'){$carte_valeur_1_41 = 3;}else$carte_valeur_1_41 = 0;
        if ($carte_cote_1_42 == 'carte42'){$carte_valeur_1_42 = 4;}else$carte_valeur_1_42 = 0;        if ($carte_cote_1_43 == 'carte43'){$carte_valeur_1_43 = 5;}else$carte_valeur_1_43 = 0;
        if ($carte_cote_1_44 == 'carte44'){$carte_valeur_1_44 = 6;}else$carte_valeur_1_44 = 0;        if ($carte_cote_1_45 == 'carte45'){$carte_valeur_1_45 = 7;}else$carte_valeur_1_45 = 0;
        if ($carte_cote_1_46 == 'carte46'){$carte_valeur_1_46 = 8;}else$carte_valeur_1_46 = 0;        if ($carte_cote_1_47 == 'carte47'){$carte_valeur_1_47 = 9;}else$carte_valeur_1_47 = 0;
        if ($carte_cote_1_48 == 'carte48'){$carte_valeur_1_48 = 10;}else$carte_valeur_1_48 = 0;

        if ($carte_cote_1_52 == 'carte52'){$carte_valeur_1_52 = 2;}else$carte_valeur_1_52 = 0;        if ($carte_cote_1_53 == 'carte53'){$carte_valeur_1_53 = 3;}else$carte_valeur_1_53 = 0;
        if ($carte_cote_1_54 == 'carte54'){$carte_valeur_1_54 = 4;}else$carte_valeur_1_54 = 0;        if ($carte_cote_1_55 == 'carte55'){$carte_valeur_1_55 = 5;}else$carte_valeur_1_55 = 0;
        if ($carte_cote_1_56 == 'carte56'){$carte_valeur_1_56 = 6;}else$carte_valeur_1_56 = 0;        if ($carte_cote_1_57 == 'carte57'){$carte_valeur_1_57 = 7;}else$carte_valeur_1_57 = 0;
        if ($carte_cote_1_58 == 'carte58'){$carte_valeur_1_58 = 8;}else$carte_valeur_1_58 = 0;        if ($carte_cote_1_59 == 'carte59'){$carte_valeur_1_59 = 9;}else$carte_valeur_1_59 = 0;
        if ($carte_cote_1_60 == 'carte60'){$carte_valeur_1_60 = 10;}else$carte_valeur_1_60 = 0;


        if ($carte_cote_2_4 == 'carte4'){$carte_valeur_2_4 = 2;}else$carte_valeur_2_4 = 0;        if ($carte_cote_2_5 == 'carte5'){$carte_valeur_2_5 = 3;}else$carte_valeur_2_5 = 0;
        if ($carte_cote_2_6 == 'carte6'){$carte_valeur_2_6 = 4;}else$carte_valeur_2_6 = 0;        if ($carte_cote_2_7 == 'carte7'){$carte_valeur_2_7 = 5;}else$carte_valeur_2_7 = 0;
        if ($carte_cote_2_8 == 'carte8'){$carte_valeur_2_8 = 6;}else$carte_valeur_2_8 = 0;        if ($carte_cote_2_9 == 'carte9'){$carte_valeur_2_9 = 7;}else$carte_valeur_2_9 = 0;
        if ($carte_cote_2_10 == 'carte10'){$carte_valeur_2_10 = 8;}else$carte_valeur_2_10 = 0;        if ($carte_cote_2_11 == 'carte11'){$carte_valeur_2_11 = 9;}else$carte_valeur_2_11 = 0;
        if ($carte_cote_2_12 == 'carte12'){$carte_valeur_2_12 = 10;}else$carte_valeur_2_12 = 0;

        if ($carte_cote_2_16 == 'carte16'){$carte_valeur_2_16 = 2;}else$carte_valeur_2_16 = 0;        if ($carte_cote_2_17 == 'carte17'){$carte_valeur_2_17 = 3;}else$carte_valeur_2_17 = 0;
        if ($carte_cote_2_18 == 'carte18'){$carte_valeur_2_18 = 4;}else$carte_valeur_2_18 = 0;        if ($carte_cote_2_19 == 'carte19'){$carte_valeur_2_19 = 5;}else$carte_valeur_2_19 = 0;
        if ($carte_cote_2_20 == 'carte20'){$carte_valeur_2_20 = 6;}else$carte_valeur_2_20 = 0;        if ($carte_cote_2_21 == 'carte21'){$carte_valeur_2_21 = 7;}else$carte_valeur_2_21 = 0;
        if ($carte_cote_2_22 == 'carte10'){$carte_valeur_2_22 = 8;}else$carte_valeur_2_22 = 0;        if ($carte_cote_2_23 == 'carte23'){$carte_valeur_2_23 = 9;}else$carte_valeur_2_23 = 0;
        if ($carte_cote_2_24 == 'carte24'){$carte_valeur_2_24 = 10;}else$carte_valeur_2_24 = 0;

        if ($carte_cote_2_28 == 'carte28'){$carte_valeur_2_28 = 2;}else$carte_valeur_2_28 = 0;        if ($carte_cote_2_29 == 'carte29'){$carte_valeur_2_29 = 3;}else$carte_valeur_2_29 = 0;
        if ($carte_cote_2_30 == 'carte30'){$carte_valeur_2_30 = 4;}else$carte_valeur_2_30 = 0;        if ($carte_cote_2_31 == 'carte31'){$carte_valeur_2_31 = 5;}else$carte_valeur_2_31 = 0;
        if ($carte_cote_2_32 == 'carte32'){$carte_valeur_2_32 = 6;}else$carte_valeur_2_32 = 0;        if ($carte_cote_2_33 == 'carte33'){$carte_valeur_2_33 = 7;}else$carte_valeur_2_33 = 0;
        if ($carte_cote_2_34 == 'carte34'){$carte_valeur_2_34 = 8;}else$carte_valeur_2_34 = 0;        if ($carte_cote_2_35 == 'carte35'){$carte_valeur_2_35 = 9;}else$carte_valeur_2_35 = 0;
        if ($carte_cote_2_36 == 'carte36'){$carte_valeur_2_36 = 10;}else$carte_valeur_2_36 = 0;

        if ($carte_cote_2_40 == 'carte40'){$carte_valeur_2_40 = 2;}else$carte_valeur_2_40 = 0;        if ($carte_cote_2_41 == 'carte41'){$carte_valeur_2_41 = 3;}else$carte_valeur_2_41 = 0;
        if ($carte_cote_2_42 == 'carte42'){$carte_valeur_2_42 = 4;}else$carte_valeur_2_42 = 0;        if ($carte_cote_2_43 == 'carte43'){$carte_valeur_2_43 = 5;}else$carte_valeur_2_43 = 0;
        if ($carte_cote_2_44 == 'carte44'){$carte_valeur_2_44 = 6;}else$carte_valeur_2_44 = 0;        if ($carte_cote_2_45 == 'carte45'){$carte_valeur_2_45 = 7;}else$carte_valeur_2_45 = 0;
        if ($carte_cote_2_46 == 'carte46'){$carte_valeur_2_46 = 8;}else$carte_valeur_2_46 = 0;        if ($carte_cote_2_47 == 'carte47'){$carte_valeur_2_47 = 9;}else$carte_valeur_2_47 = 0;
        if ($carte_cote_2_48 == 'carte48'){$carte_valeur_2_48 = 10;}else$carte_valeur_2_48 = 0;

        if ($carte_cote_2_52 == 'carte52'){$carte_valeur_2_52 = 2;}else$carte_valeur_2_52 = 0;        if ($carte_cote_2_53 == 'carte53'){$carte_valeur_2_53 = 3;}else$carte_valeur_2_53 = 0;
        if ($carte_cote_2_54 == 'carte54'){$carte_valeur_2_54 = 4;}else$carte_valeur_2_54 = 0;        if ($carte_cote_2_55 == 'carte55'){$carte_valeur_2_55 = 5;}else$carte_valeur_2_55 = 0;
        if ($carte_cote_2_56 == 'carte56'){$carte_valeur_2_56 = 6;}else$carte_valeur_2_56 = 0;        if ($carte_cote_2_57 == 'carte57'){$carte_valeur_2_57 = 7;}else$carte_valeur_2_57 = 0;
        if ($carte_cote_2_58 == 'carte58'){$carte_valeur_2_58 = 8;}else$carte_valeur_2_58 = 0;        if ($carte_cote_2_59 == 'carte59'){$carte_valeur_2_59 = 9;}else$carte_valeur_2_59 = 0;
        if ($carte_cote_2_60 == 'carte60'){$carte_valeur_2_60 = 10;}else$carte_valeur_2_60 = 0;


        $scorejoueur1colonne1 = ($carte_valeur_1_4+$carte_valeur_1_5+$carte_valeur_1_6+$carte_valeur_1_7+$carte_valeur_1_8+$carte_valeur_1_9+$carte_valeur_1_10+$carte_valeur_1_11+$carte_valeur_1_12)*$carteextra1_1;
        $scorejoueur2colonne1 = ($carte_valeur_2_4+$carte_valeur_2_5+$carte_valeur_2_6+$carte_valeur_2_7+$carte_valeur_2_8+$carte_valeur_2_9+$carte_valeur_2_10+$carte_valeur_2_11+$carte_valeur_2_12)*$carteextra1_2;

        $scorejoueur1colonne2 = ($carte_valeur_1_16+$carte_valeur_1_17+$carte_valeur_1_18+$carte_valeur_1_19+$carte_valeur_1_20+$carte_valeur_1_21+$carte_valeur_1_22+$carte_valeur_1_23+$carte_valeur_1_24)*$carteextra2_1;
        $scorejoueur2colonne2 = ($carte_valeur_2_16+$carte_valeur_2_17+$carte_valeur_2_18+$carte_valeur_2_19+$carte_valeur_2_20+$carte_valeur_2_21+$carte_valeur_2_22+$carte_valeur_2_23+$carte_valeur_2_24)*$carteextra2_2;

        $scorejoueur1colonne3 = ($carte_valeur_1_28+$carte_valeur_1_29+$carte_valeur_1_30+$carte_valeur_1_31+$carte_valeur_1_32+$carte_valeur_1_33+$carte_valeur_1_34+$carte_valeur_1_35+$carte_valeur_1_36)*$carteextra3_1;
        $scorejoueur2colonne3 = ($carte_valeur_2_28+$carte_valeur_2_29+$carte_valeur_2_30+$carte_valeur_2_31+$carte_valeur_2_32+$carte_valeur_2_33+$carte_valeur_2_34+$carte_valeur_2_35+$carte_valeur_2_36)*$carteextra3_2;

        $scorejoueur1colonne4 = ($carte_valeur_1_40+$carte_valeur_1_41+$carte_valeur_1_42+$carte_valeur_1_43+$carte_valeur_1_44+$carte_valeur_1_45+$carte_valeur_1_46+$carte_valeur_1_47+$carte_valeur_1_48)*$carteextra4_1;
        $scorejoueur2colonne4 = ($carte_valeur_2_40+$carte_valeur_2_41+$carte_valeur_2_42+$carte_valeur_2_43+$carte_valeur_2_44+$carte_valeur_2_45+$carte_valeur_2_46+$carte_valeur_2_47+$carte_valeur_2_48)*$carteextra4_2;

        $scorejoueur1colonne5 = ($carte_valeur_1_52+$carte_valeur_1_53+$carte_valeur_1_54+$carte_valeur_1_55+$carte_valeur_1_56+$carte_valeur_1_57+$carte_valeur_1_58+$carte_valeur_1_59+$carte_valeur_1_60)*$carteextra5_1;
        $scorejoueur2colonne5 = ($carte_valeur_2_52+$carte_valeur_2_53+$carte_valeur_2_54+$carte_valeur_2_55+$carte_valeur_2_56+$carte_valeur_2_57+$carte_valeur_2_58+$carte_valeur_2_59+$carte_valeur_2_60)*$carteextra5_2;

        $scorejoueur1 = $scorejoueur1colonne1+$scorejoueur1colonne2+$scorejoueur1colonne3+$scorejoueur1colonne4+$scorejoueur1colonne5-20;
        $scorejoueur2 = $scorejoueur2colonne1+$scorejoueur2colonne2+$scorejoueur2colonne3+$scorejoueur2colonne4+$scorejoueur2colonne5-20;

        if ($scorejoueur1 > $scorejoueur2) {
            $gagnant = $salons->getJoueur1();
            $perdant = $salons->getJoueur2();
        } elseif ($scorejoueur2 > $scorejoueur1) {
            $gagnant = $salons->getJoueur2();
            $perdant = $salons->getJoueur1();
        } elseif ($scorejoueur1 == $scorejoueur2) {
            $gagnant = "égalité";
            $perdant = "égalité";
        }

        if (($position->getCarte1() != false) AND ($position->getCarte2() != false) AND ($position->getCarte3() != false) AND ($position->getCarte4() != false) AND ($position->getCarte5() != false) AND ($position->getCarte6() != false) AND ($position->getCarte7() != false) AND ($position->getCarte8() != false) AND ($position->getCarte9() != false) AND ($position->getCarte10() != false) AND ($position->getCarte11() != false) AND ($position->getCarte12() != false) AND ($position->getCarte13() != false) AND ($position->getCarte14() != false) AND ($position->getCarte15() != false) AND ($position->getCarte16() != false) AND ($position->getCarte17() != false) AND ($position->getCarte18() != false) AND ($position->getCarte19() != false) AND ($position->getCarte20() != false) AND ($position->getCarte21() != false) AND ($position->getCarte22() != false) AND ($position->getCarte23() != false) AND ($position->getCarte24() != false) AND ($position->getCarte25() != false) AND ($position->getCarte26() != false) AND ($position->getCarte27() != false) AND ($position->getCarte28() != false) AND ($position->getCarte29() != false) AND ($position->getCarte30() != false) AND ($position->getCarte31() != false) AND ($position->getCarte32() != false) AND ($position->getCarte33() != false) AND ($position->getCarte34() != false) AND ($position->getCarte35() != false) AND ($position->getCarte36() != false) AND ($position->getCarte37() != false) AND ($position->getCarte38() != false) AND ($position->getCarte39() != false) AND ($position->getCarte40() != false) AND ($position->getCarte41() != false) AND ($position->getCarte42() != false) AND ($position->getCarte43() != false) AND ($position->getCarte44() != false) AND ($position->getCarte45() != false) AND ($position->getCarte46() != false) AND ($position->getCarte47() != false) AND ($position->getCarte48() != false) AND ($position->getCarte49() != false) AND ($position->getCarte50() != false) AND ($position->getCarte51() != false) AND ($position->getCarte52() != false) AND ($position->getCarte53() != false) AND ($position->getCarte54() != false) AND ($position->getCarte55() != false) AND ($position->getCarte56() != false) AND ($position->getCarte57() != false) AND ($position->getCarte58() != false) AND ($position->getCarte59() != false) AND ($position->getCarte60() != false)){
            
            $salons->setGagnant($gagnant);
            $salons->setPerdant($perdant);

            return $this->render('FIRSTJeuBundle:Default:fini.html.twig', array(
                'id' => $id, 'scorejoueur2' => $scorejoueur2, 'scorejoueur1' => $scorejoueur1
                ));
        }

        if (($joueur1 == $utilisateur) OR ($joueur2 == $utilisateur)) {
            return $this->render('FIRSTJeuBundle:Default:salon.html.twig', array(
            'id' => $id,
            'utilisateur' => $utilisateur,            'tour' => $tour,            'a_qui_le_tour' => $a_qui_le_tour,            'joueur1' => $joueur1,
            'joueur2' => $joueur2,            'bon' => $bon,           'carte_pioche_1_1' => $carte_pioche_1_1,
            'carte_pioche_1_2' => $carte_pioche_1_2,            'carte_pioche_1_3' => $carte_pioche_1_3,            'carte_pioche_1_4' => $carte_pioche_1_4,
            'carte_pioche_1_5' => $carte_pioche_1_5,            'carte_pioche_1_6' => $carte_pioche_1_6,            'carte_pioche_1_7' => $carte_pioche_1_7,
            'carte_pioche_1_8' => $carte_pioche_1_8,            'carte_pioche_2_1' => $carte_pioche_2_1,            'carte_pioche_2_2' => $carte_pioche_2_2,
            'carte_pioche_2_3' => $carte_pioche_2_3,            'carte_pioche_2_4' => $carte_pioche_2_4,            'carte_pioche_2_5' => $carte_pioche_2_5,
            'carte_pioche_2_6' => $carte_pioche_2_6,            'carte_pioche_2_7' => $carte_pioche_2_7,            'carte_pioche_2_8' => $carte_pioche_2_8,
            'carte_cote_2_1' => $carte_cote_2_1,            'carte_cote_2_2' => $carte_cote_2_2,            'carte_cote_2_3' => $carte_cote_2_3,
            'carte_cote_2_4' => $carte_cote_2_4,            'carte_cote_2_5' => $carte_cote_2_5,            'carte_cote_2_6' => $carte_cote_2_6,
            'carte_cote_2_7' => $carte_cote_2_7,            'carte_cote_2_8' => $carte_cote_2_8,            'carte_cote_2_9' => $carte_cote_2_9,
            'carte_cote_2_10' => $carte_cote_2_10,            'carte_cote_2_11' => $carte_cote_2_11,            'carte_cote_2_12' => $carte_cote_2_12,
            'carte_cote_2_13' => $carte_cote_2_13,            'carte_cote_2_14' => $carte_cote_2_14,            'carte_cote_2_15' => $carte_cote_2_15,
            'carte_cote_2_16' => $carte_cote_2_16,            'carte_cote_2_17' => $carte_cote_2_17,            'carte_cote_2_18' => $carte_cote_2_18,
            'carte_cote_2_19' => $carte_cote_2_19,            'carte_cote_2_20' => $carte_cote_2_20,            'carte_cote_2_21' => $carte_cote_2_21,
            'carte_cote_2_22' => $carte_cote_2_22,            'carte_cote_2_23' => $carte_cote_2_23,            'carte_cote_2_24' => $carte_cote_2_24,
            'carte_cote_2_25' => $carte_cote_2_25,            'carte_cote_2_26' => $carte_cote_2_26,            'carte_cote_2_27' => $carte_cote_2_27,
            'carte_cote_2_28' => $carte_cote_2_28,            'carte_cote_2_29' => $carte_cote_2_29,            'carte_cote_2_30' => $carte_cote_2_30,
            'carte_cote_2_31' => $carte_cote_2_31,            'carte_cote_2_32' => $carte_cote_2_32,            'carte_cote_2_33' => $carte_cote_2_33,
            'carte_cote_2_34' => $carte_cote_2_34,            'carte_cote_2_35' => $carte_cote_2_35,            'carte_cote_2_36' => $carte_cote_2_36,
            'carte_cote_2_37' => $carte_cote_2_37,            'carte_cote_2_38' => $carte_cote_2_38,            'carte_cote_2_39' => $carte_cote_2_39,
            'carte_cote_2_40' => $carte_cote_2_40,            'carte_cote_2_41' => $carte_cote_2_41,            'carte_cote_2_42' => $carte_cote_2_42,
            'carte_cote_2_43' => $carte_cote_2_43,            'carte_cote_2_44' => $carte_cote_2_44,            'carte_cote_2_45' => $carte_cote_2_45,
            'carte_cote_2_46' => $carte_cote_2_46,            'carte_cote_2_47' => $carte_cote_2_47,            'carte_cote_2_48' => $carte_cote_2_48,
            'carte_cote_2_49' => $carte_cote_2_49,            'carte_cote_2_50' => $carte_cote_2_50,            'carte_cote_2_51' => $carte_cote_2_51,
            'carte_cote_2_52' => $carte_cote_2_52,            'carte_cote_2_53' => $carte_cote_2_53,            'carte_cote_2_54' => $carte_cote_2_54,
            'carte_cote_2_55' => $carte_cote_2_55,            'carte_cote_2_56' => $carte_cote_2_56,            'carte_cote_2_57' => $carte_cote_2_57,
            'carte_cote_2_58' => $carte_cote_2_58,            'carte_cote_2_59' => $carte_cote_2_59,            'carte_cote_2_60' => $carte_cote_2_60,
            'carte_cote_1_1' => $carte_cote_1_1,            'carte_cote_1_2' => $carte_cote_1_2,            'carte_cote_1_3' => $carte_cote_1_3,
            'carte_cote_1_4' => $carte_cote_1_4,            'carte_cote_1_5' => $carte_cote_1_5,            'carte_cote_1_6' => $carte_cote_1_6,
            'carte_cote_1_7' => $carte_cote_1_7,            'carte_cote_1_8' => $carte_cote_1_8,            'carte_cote_1_9' => $carte_cote_1_9,
            'carte_cote_1_10' => $carte_cote_1_10,            'carte_cote_1_11' => $carte_cote_1_11,            'carte_cote_1_12' => $carte_cote_1_12,
            'carte_cote_1_13' => $carte_cote_1_13,            'carte_cote_1_14' => $carte_cote_1_14,            'carte_cote_1_15' => $carte_cote_1_15,
            'carte_cote_1_16' => $carte_cote_1_16,            'carte_cote_1_17' => $carte_cote_1_17,            'carte_cote_1_18' => $carte_cote_1_18,
            'carte_cote_1_19' => $carte_cote_1_19,            'carte_cote_1_20' => $carte_cote_1_20,            'carte_cote_1_21' => $carte_cote_1_21,
            'carte_cote_1_22' => $carte_cote_1_22,            'carte_cote_1_23' => $carte_cote_1_23,            'carte_cote_1_24' => $carte_cote_1_24,
            'carte_cote_1_25' => $carte_cote_1_25,            'carte_cote_1_26' => $carte_cote_1_26,            'carte_cote_1_27' => $carte_cote_1_27,
            'carte_cote_1_28' => $carte_cote_1_28,            'carte_cote_1_29' => $carte_cote_1_29,            'carte_cote_1_30' => $carte_cote_1_30,
            'carte_cote_1_31' => $carte_cote_1_31,            'carte_cote_1_32' => $carte_cote_1_32,            'carte_cote_1_33' => $carte_cote_1_33,
            'carte_cote_1_34' => $carte_cote_1_34,            'carte_cote_1_35' => $carte_cote_1_35,            'carte_cote_1_36' => $carte_cote_1_36,
            'carte_cote_1_37' => $carte_cote_1_37,            'carte_cote_1_38' => $carte_cote_1_38,            'carte_cote_1_39' => $carte_cote_1_39,
            'carte_cote_1_40' => $carte_cote_1_40,            'carte_cote_1_41' => $carte_cote_1_41,            'carte_cote_1_42' => $carte_cote_1_42,
            'carte_cote_1_43' => $carte_cote_1_43,            'carte_cote_1_44' => $carte_cote_1_44,            'carte_cote_1_45' => $carte_cote_1_45,
            'carte_cote_1_46' => $carte_cote_1_46,            'carte_cote_1_47' => $carte_cote_1_47,            'carte_cote_1_48' => $carte_cote_1_48,
            'carte_cote_1_49' => $carte_cote_1_49,            'carte_cote_1_50' => $carte_cote_1_50,            'carte_cote_1_51' => $carte_cote_1_51,
            'carte_cote_1_52' => $carte_cote_1_52,            'carte_cote_1_53' => $carte_cote_1_53,            'carte_cote_1_54' => $carte_cote_1_54,
            'carte_cote_1_55' => $carte_cote_1_55,            'carte_cote_1_56' => $carte_cote_1_56,            'carte_cote_1_57' => $carte_cote_1_57,
            'carte_cote_1_58' => $carte_cote_1_58,            'carte_cote_1_59' => $carte_cote_1_59,            'carte_cote_1_60' => $carte_cote_1_60,
            'carte_def_1' => $carte_def_1,            'carte_def_2' => $carte_def_2,            'carte_def_3' => $carte_def_3,
            'carte_def_4' => $carte_def_4,            'carte_def_5' => $carte_def_5,            'carte_def_6' => $carte_def_6,
            'carte_def_7' => $carte_def_7,            'carte_def_8' => $carte_def_8,            'carte_def_9' => $carte_def_9,
            'carte_def_10' => $carte_def_10,            'carte_def_11' => $carte_def_11,            'carte_def_12' => $carte_def_12,
            'carte_def_13' => $carte_def_13,            'carte_def_14' => $carte_def_14,            'carte_def_15' => $carte_def_15,
            'carte_def_16' => $carte_def_16,            'carte_def_17' => $carte_def_17,            'carte_def_18' => $carte_def_18,
            'carte_def_19' => $carte_def_19,            'carte_def_20' => $carte_def_20,            'carte_def_21' => $carte_def_21,
            'carte_def_22' => $carte_def_22,            'carte_def_23' => $carte_def_23,            'carte_def_24' => $carte_def_24,
            'carte_def_25' => $carte_def_25,            'carte_def_26' => $carte_def_26,            'carte_def_27' => $carte_def_27,
            'carte_def_28' => $carte_def_28,            'carte_def_29' => $carte_def_29,            'carte_def_30' => $carte_def_30,
            'carte_def_31' => $carte_def_31,            'carte_def_32' => $carte_def_32,            'carte_def_33' => $carte_def_33,
            'carte_def_34' => $carte_def_34,            'carte_def_35' => $carte_def_35,            'carte_def_36' => $carte_def_36,
            'carte_def_37' => $carte_def_37,            'carte_def_38' => $carte_def_38,            'carte_def_39' => $carte_def_39,
            'carte_def_40' => $carte_def_40,            'carte_def_41' => $carte_def_41,            'carte_def_42' => $carte_def_42,
            'carte_def_43' => $carte_def_43,            'carte_def_44' => $carte_def_44,            'carte_def_45' => $carte_def_45,
            'carte_def_46' => $carte_def_46,            'carte_def_47' => $carte_def_47,            'carte_def_48' => $carte_def_48,
            'carte_def_49' => $carte_def_49,            'carte_def_50' => $carte_def_50,            'carte_def_51' => $carte_def_51,
            'carte_def_52' => $carte_def_52,            'carte_def_53' => $carte_def_53,            'carte_def_54' => $carte_def_54,
            'carte_def_55' => $carte_def_55,            'carte_def_56' => $carte_def_56,            'carte_def_57' => $carte_def_57,
            'carte_def_58' => $carte_def_58,            'carte_def_59' => $carte_def_59,            'carte_def_60' => $carte_def_60,
            'scorejoueur1' => $scorejoueur1,            'scorejoueur2' => $scorejoueur2
            ));
        } else return $this->redirect("http://89.234.182.92/jeu/jouer");
    }

    /**
     * @Route("/passer_le_tour/{id}/{cote}/{carte}")
     */
    public function passer_le_tourAction($id, $cote, $carte){


        $pre = $this->getDoctrine()->getRepository('FIRSTJeuBundle:Position_Salon')->createQueryBuilder('e')->select('e')->where('e.idSalon = '.$id)->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $carte_pioche_1_1 = array_search('carte_pioche_1_1', $pre[0]);        $carte_pioche_1_2 = array_search('carte_pioche_1_2', $pre[0]);
        $carte_pioche_1_3 = array_search('carte_pioche_1_3', $pre[0]);        $carte_pioche_1_4 = array_search('carte_pioche_1_4', $pre[0]);
        $carte_pioche_1_5 = array_search('carte_pioche_1_5', $pre[0]);        $carte_pioche_1_6 = array_search('carte_pioche_1_6', $pre[0]);
        $carte_pioche_1_7 = array_search('carte_pioche_1_7', $pre[0]);        $carte_pioche_1_8 = array_search('carte_pioche_1_8', $pre[0]);

        $carte_pioche_2_1 = array_search('carte_pioche_2_1', $pre[0]);        $carte_pioche_2_2 = array_search('carte_pioche_2_2', $pre[0]);
        $carte_pioche_2_3 = array_search('carte_pioche_2_3', $pre[0]);        $carte_pioche_2_4 = array_search('carte_pioche_2_4', $pre[0]);
        $carte_pioche_2_5 = array_search('carte_pioche_2_5', $pre[0]);        $carte_pioche_2_6 = array_search('carte_pioche_2_6', $pre[0]);
        $carte_pioche_2_7 = array_search('carte_pioche_2_7', $pre[0]);        $carte_pioche_2_8 = array_search('carte_pioche_2_8', $pre[0]);

        $carte_cote_2_1 = array_search('carte_cote_2_1', $pre[0]);        $carte_cote_2_2 = array_search('carte_cote_2_2', $pre[0]);
        $carte_cote_2_3 = array_search('carte_cote_2_3', $pre[0]);        $carte_cote_2_4 = array_search('carte_cote_2_4', $pre[0]);
        $carte_cote_2_5 = array_search('carte_cote_2_5', $pre[0]);        $carte_cote_2_6 = array_search('carte_cote_2_6', $pre[0]);
        $carte_cote_2_7 = array_search('carte_cote_2_7', $pre[0]);        $carte_cote_2_8 = array_search('carte_cote_2_8', $pre[0]);
        $carte_cote_2_9 = array_search('carte_cote_2_9', $pre[0]);        $carte_cote_2_10 = array_search('carte_cote_2_10', $pre[0]);
        $carte_cote_2_11 = array_search('carte_cote_2_11', $pre[0]);        $carte_cote_2_12 = array_search('carte_cote_2_12', $pre[0]);
        $carte_cote_2_13 = array_search('carte_cote_2_13', $pre[0]);        $carte_cote_2_14 = array_search('carte_cote_2_14', $pre[0]);
        $carte_cote_2_15 = array_search('carte_cote_2_15', $pre[0]);        $carte_cote_2_16 = array_search('carte_cote_2_16', $pre[0]);
        $carte_cote_2_17 = array_search('carte_cote_2_17', $pre[0]);        $carte_cote_2_18 = array_search('carte_cote_2_18', $pre[0]);
        $carte_cote_2_19 = array_search('carte_cote_2_19', $pre[0]);        $carte_cote_2_20 = array_search('carte_cote_2_20', $pre[0]);
        $carte_cote_2_21 = array_search('carte_cote_2_21', $pre[0]);        $carte_cote_2_22 = array_search('carte_cote_2_22', $pre[0]);
        $carte_cote_2_23 = array_search('carte_cote_2_23', $pre[0]);        $carte_cote_2_24 = array_search('carte_cote_2_24', $pre[0]);
        $carte_cote_2_25 = array_search('carte_cote_2_25', $pre[0]);        $carte_cote_2_26 = array_search('carte_cote_2_26', $pre[0]);
        $carte_cote_2_27 = array_search('carte_cote_2_27', $pre[0]);        $carte_cote_2_28 = array_search('carte_cote_2_28', $pre[0]);
        $carte_cote_2_29 = array_search('carte_cote_2_29', $pre[0]);        $carte_cote_2_30 = array_search('carte_cote_2_30', $pre[0]);
        $carte_cote_2_31 = array_search('carte_cote_2_31', $pre[0]);        $carte_cote_2_32 = array_search('carte_cote_2_32', $pre[0]);
        $carte_cote_2_33 = array_search('carte_cote_2_33', $pre[0]);        $carte_cote_2_34 = array_search('carte_cote_2_34', $pre[0]);
        $carte_cote_2_35 = array_search('carte_cote_2_35', $pre[0]);        $carte_cote_2_36 = array_search('carte_cote_2_36', $pre[0]);
        $carte_cote_2_37 = array_search('carte_cote_2_37', $pre[0]);        $carte_cote_2_38 = array_search('carte_cote_2_38', $pre[0]);
        $carte_cote_2_39 = array_search('carte_cote_2_39', $pre[0]);        $carte_cote_2_40 = array_search('carte_cote_2_40', $pre[0]);
        $carte_cote_2_41 = array_search('carte_cote_2_41', $pre[0]);        $carte_cote_2_42 = array_search('carte_cote_2_42', $pre[0]);
        $carte_cote_2_43 = array_search('carte_cote_2_43', $pre[0]);        $carte_cote_2_44 = array_search('carte_cote_2_44', $pre[0]);
        $carte_cote_2_45 = array_search('carte_cote_2_45', $pre[0]);        $carte_cote_2_46 = array_search('carte_cote_2_46', $pre[0]);
        $carte_cote_2_47 = array_search('carte_cote_2_47', $pre[0]);        $carte_cote_2_48 = array_search('carte_cote_2_48', $pre[0]);
        $carte_cote_2_49 = array_search('carte_cote_2_49', $pre[0]);        $carte_cote_2_50 = array_search('carte_cote_2_50', $pre[0]);
        $carte_cote_2_51 = array_search('carte_cote_2_51', $pre[0]);        $carte_cote_2_52 = array_search('carte_cote_2_52', $pre[0]);
        $carte_cote_2_53 = array_search('carte_cote_2_53', $pre[0]);        $carte_cote_2_54 = array_search('carte_cote_2_54', $pre[0]);
        $carte_cote_2_55 = array_search('carte_cote_2_55', $pre[0]);        $carte_cote_2_56 = array_search('carte_cote_2_56', $pre[0]);
        $carte_cote_2_57 = array_search('carte_cote_2_57', $pre[0]);        $carte_cote_2_58 = array_search('carte_cote_2_58', $pre[0]);
        $carte_cote_2_59 = array_search('carte_cote_2_59', $pre[0]);        $carte_cote_2_60 = array_search('carte_cote_2_60', $pre[0]);

        $carte_def_1 = array_search('carte_def_1', $pre[0]);        $carte_def_2 = array_search('carte_def_2', $pre[0]);
        $carte_def_3 = array_search('carte_def_3', $pre[0]);        $carte_def_4 = array_search('carte_def_4', $pre[0]);
        $carte_def_5 = array_search('carte_def_5', $pre[0]);        $carte_def_6 = array_search('carte_def_6', $pre[0]);
        $carte_def_7 = array_search('carte_def_7', $pre[0]);        $carte_def_8 = array_search('carte_def_8', $pre[0]);
        $carte_def_9 = array_search('carte_def_9', $pre[0]);        $carte_def_10 = array_search('carte_def_10', $pre[0]);
        $carte_def_11 = array_search('carte_def_11', $pre[0]);        $carte_def_12 = array_search('carte_def_12', $pre[0]);
        $carte_def_13 = array_search('carte_def_13', $pre[0]);        $carte_def_14 = array_search('carte_def_14', $pre[0]);
        $carte_def_15 = array_search('carte_def_15', $pre[0]);        $carte_def_16 = array_search('carte_def_16', $pre[0]);
        $carte_def_17 = array_search('carte_def_17', $pre[0]);        $carte_def_18 = array_search('carte_def_18', $pre[0]);
        $carte_def_19 = array_search('carte_def_19', $pre[0]);        $carte_def_20 = array_search('carte_def_20', $pre[0]);
        $carte_def_21 = array_search('carte_def_21', $pre[0]);        $carte_def_22 = array_search('carte_def_22', $pre[0]);
        $carte_def_23 = array_search('carte_def_23', $pre[0]);        $carte_def_24 = array_search('carte_def_24', $pre[0]);
        $carte_def_25 = array_search('carte_def_25', $pre[0]);        $carte_def_26 = array_search('carte_def_26', $pre[0]);
        $carte_def_27 = array_search('carte_def_27', $pre[0]);        $carte_def_28 = array_search('carte_def_28', $pre[0]);
        $carte_def_29 = array_search('carte_def_29', $pre[0]);        $carte_def_30 = array_search('carte_def_30', $pre[0]);
        $carte_def_31 = array_search('carte_def_31', $pre[0]);        $carte_def_32 = array_search('carte_def_32', $pre[0]);
        $carte_def_33 = array_search('carte_def_33', $pre[0]);        $carte_def_34 = array_search('carte_def_34', $pre[0]);
        $carte_def_35 = array_search('carte_def_35', $pre[0]);        $carte_def_36 = array_search('carte_def_36', $pre[0]);
        $carte_def_37 = array_search('carte_def_37', $pre[0]);        $carte_def_38 = array_search('carte_def_38', $pre[0]);
        $carte_def_39 = array_search('carte_def_39', $pre[0]);        $carte_def_40 = array_search('carte_def_40', $pre[0]);
        $carte_def_41 = array_search('carte_def_41', $pre[0]);        $carte_def_42 = array_search('carte_def_42', $pre[0]);
        $carte_def_43 = array_search('carte_def_43', $pre[0]);        $carte_def_44 = array_search('carte_def_44', $pre[0]);
        $carte_def_45 = array_search('carte_def_45', $pre[0]);        $carte_def_46 = array_search('carte_def_46', $pre[0]);
        $carte_def_47 = array_search('carte_def_47', $pre[0]);        $carte_def_48 = array_search('carte_def_48', $pre[0]);
        $carte_def_49 = array_search('carte_def_49', $pre[0]);        $carte_def_50 = array_search('carte_def_50', $pre[0]);
        $carte_def_51 = array_search('carte_def_51', $pre[0]);        $carte_def_52 = array_search('carte_def_52', $pre[0]);
        $carte_def_53 = array_search('carte_def_53', $pre[0]);        $carte_def_54 = array_search('carte_def_54', $pre[0]);
        $carte_def_55 = array_search('carte_def_55', $pre[0]);        $carte_def_56 = array_search('carte_def_56', $pre[0]);
        $carte_def_57 = array_search('carte_def_57', $pre[0]);        $carte_def_58 = array_search('carte_def_58', $pre[0]);
        $carte_def_59 = array_search('carte_def_59', $pre[0]);        $carte_def_60 = array_search('carte_def_60', $pre[0]);

        $carte_cote_1_1 = array_search('carte_cote_1_1', $pre[0]);        $carte_cote_1_2 = array_search('carte_cote_1_2', $pre[0]);
        $carte_cote_1_3 = array_search('carte_cote_1_3', $pre[0]);        $carte_cote_1_4 = array_search('carte_cote_1_4', $pre[0]);
        $carte_cote_1_5 = array_search('carte_cote_1_5', $pre[0]);        $carte_cote_1_6 = array_search('carte_cote_1_6', $pre[0]);
        $carte_cote_1_7 = array_search('carte_cote_1_7', $pre[0]);        $carte_cote_1_8 = array_search('carte_cote_1_8', $pre[0]);
        $carte_cote_1_9 = array_search('carte_cote_1_9', $pre[0]);        $carte_cote_1_10 = array_search('carte_cote_1_10', $pre[0]);
        $carte_cote_1_11 = array_search('carte_cote_1_11', $pre[0]);        $carte_cote_1_12 = array_search('carte_cote_1_12', $pre[0]);
        $carte_cote_1_13 = array_search('carte_cote_1_13', $pre[0]);        $carte_cote_1_14 = array_search('carte_cote_1_14', $pre[0]);
        $carte_cote_1_15 = array_search('carte_cote_1_15', $pre[0]);        $carte_cote_1_16 = array_search('carte_cote_1_16', $pre[0]);
        $carte_cote_1_17 = array_search('carte_cote_1_17', $pre[0]);        $carte_cote_1_18 = array_search('carte_cote_1_18', $pre[0]);
        $carte_cote_1_19 = array_search('carte_cote_1_19', $pre[0]);        $carte_cote_1_20 = array_search('carte_cote_1_20', $pre[0]);
        $carte_cote_1_21 = array_search('carte_cote_1_21', $pre[0]);        $carte_cote_1_22 = array_search('carte_cote_1_22', $pre[0]);
        $carte_cote_1_23 = array_search('carte_cote_1_23', $pre[0]);        $carte_cote_1_24 = array_search('carte_cote_1_24', $pre[0]);
        $carte_cote_1_25 = array_search('carte_cote_1_25', $pre[0]);        $carte_cote_1_26 = array_search('carte_cote_1_26', $pre[0]);
        $carte_cote_1_27 = array_search('carte_cote_1_27', $pre[0]);        $carte_cote_1_28 = array_search('carte_cote_1_28', $pre[0]);
        $carte_cote_1_29 = array_search('carte_cote_1_29', $pre[0]);        $carte_cote_1_30 = array_search('carte_cote_1_30', $pre[0]);
        $carte_cote_1_31 = array_search('carte_cote_1_31', $pre[0]);        $carte_cote_1_32 = array_search('carte_cote_1_32', $pre[0]);
        $carte_cote_1_33 = array_search('carte_cote_1_33', $pre[0]);        $carte_cote_1_34 = array_search('carte_cote_1_34', $pre[0]);
        $carte_cote_1_35 = array_search('carte_cote_1_35', $pre[0]);        $carte_cote_1_36 = array_search('carte_cote_1_36', $pre[0]);
        $carte_cote_1_37 = array_search('carte_cote_1_37', $pre[0]);        $carte_cote_1_38 = array_search('carte_cote_1_38', $pre[0]);
        $carte_cote_1_39 = array_search('carte_cote_1_39', $pre[0]);        $carte_cote_1_40 = array_search('carte_cote_1_40', $pre[0]);
        $carte_cote_1_41 = array_search('carte_cote_1_41', $pre[0]);        $carte_cote_1_42 = array_search('carte_cote_1_42', $pre[0]);
        $carte_cote_1_43 = array_search('carte_cote_1_43', $pre[0]);        $carte_cote_1_44 = array_search('carte_cote_1_44', $pre[0]);
        $carte_cote_1_45 = array_search('carte_cote_1_45', $pre[0]);        $carte_cote_1_46 = array_search('carte_cote_1_46', $pre[0]);
        $carte_cote_1_47 = array_search('carte_cote_1_47', $pre[0]);        $carte_cote_1_48 = array_search('carte_cote_1_48', $pre[0]);
        $carte_cote_1_49 = array_search('carte_cote_1_49', $pre[0]);        $carte_cote_1_50 = array_search('carte_cote_1_50', $pre[0]);
        $carte_cote_1_51 = array_search('carte_cote_1_51', $pre[0]);        $carte_cote_1_52 = array_search('carte_cote_1_52', $pre[0]);
        $carte_cote_1_53 = array_search('carte_cote_1_53', $pre[0]);        $carte_cote_1_54 = array_search('carte_cote_1_54', $pre[0]);
        $carte_cote_1_55 = array_search('carte_cote_1_55', $pre[0]);        $carte_cote_1_56 = array_search('carte_cote_1_56', $pre[0]);
        $carte_cote_1_57 = array_search('carte_cote_1_57', $pre[0]);        $carte_cote_1_58 = array_search('carte_cote_1_58', $pre[0]);
        $carte_cote_1_59 = array_search('carte_cote_1_59', $pre[0]);        $carte_cote_1_60 = array_search('carte_cote_1_60', $pre[0]);


        $utilisateur= $this->getUser();
        $repository = $this->getDoctrine()->getEntityManager();
        $salons = $repository->getRepository("FIRSTJeuBundle:Salon_joueur")->findOneBy(array('salonId' => $id));
        $position = $repository->getRepository("FIRSTJeuBundle:Position_Salon")->findOneBy(array('idSalon' => $id));
        $def = $repository->getRepository("FIRSTJeuBundle:Defausse")->findOneBy(array('salid' => $id));

        $joueur1 = $salons->getJoueur1();
        $joueur2 = $salons->getJoueur2();
        $tour = $salons->getNumeroTour();
        $nv_tour = $tour+1;

        if ($tour %2 == 1){ $a_qui_le_tour = $salons->getJoueur1();} 
        if ($tour %2 == 0){ $a_qui_le_tour = $salons->getJoueur2();}


        if (($cote == 1) AND ($carte == "carte1") AND ($carte_cote_1_4 == false) AND ($carte_cote_1_5 == false) AND ($carte_cote_1_6 == false) AND ($carte_cote_1_7 == false) AND ($carte_cote_1_8 == false) AND ($carte_cote_1_9 == false) AND ($carte_cote_1_10 == false) AND ($carte_cote_1_11 == false) AND ($carte_cote_1_12 == false)){$sql1 = $position->setCarte1('carte_cote_1_1');}
        if (($cote == 1) AND ($carte == "carte2") AND ($carte_cote_1_4 == false) AND ($carte_cote_1_5 == false) AND ($carte_cote_1_6 == false) AND ($carte_cote_1_7 == false) AND ($carte_cote_1_8 == false) AND ($carte_cote_1_9 == false) AND ($carte_cote_1_10 == false) AND ($carte_cote_1_11 == false) AND ($carte_cote_1_12 == false)){$sql1 = $position->setCarte2('carte_cote_1_2');}
        if (($cote == 1) AND ($carte == "carte3") AND ($carte_cote_1_4 == false) AND ($carte_cote_1_5 == false) AND ($carte_cote_1_6 == false) AND ($carte_cote_1_7 == false) AND ($carte_cote_1_8 == false) AND ($carte_cote_1_9 == false) AND ($carte_cote_1_10 == false) AND ($carte_cote_1_11 == false) AND ($carte_cote_1_12 == false)){$sql1 = $position->setCarte3('carte_cote_1_3');}
        if (($cote == 1) AND ($carte == "carte4") AND ($carte_cote_1_5 == false) AND ($carte_cote_1_6 == false) AND ($carte_cote_1_7 == false) AND ($carte_cote_1_8 == false) AND ($carte_cote_1_9 == false) AND ($carte_cote_1_10 == false) AND ($carte_cote_1_11 == false) AND ($carte_cote_1_12 == false)){$sql1 = $position->setCarte4('carte_cote_1_4');}
        if (($cote == 1) AND ($carte == "carte5") AND ($carte_cote_1_6 == false) AND ($carte_cote_1_7 == false) AND ($carte_cote_1_8 == false) AND ($carte_cote_1_9 == false) AND ($carte_cote_1_10 == false) AND ($carte_cote_1_11 == false) AND ($carte_cote_1_12 == false)){$sql1 = $position->setCarte5('carte_cote_1_5');}
        if (($cote == 1) AND ($carte == "carte6") AND ($carte_cote_1_7 == false) AND ($carte_cote_1_8 == false) AND ($carte_cote_1_9 == false) AND ($carte_cote_1_10 == false) AND ($carte_cote_1_11 == false) AND ($carte_cote_1_12 == false)){$sql1 = $position->setCarte6('carte_cote_1_6');}
        if (($cote == 1) AND ($carte == "carte7") AND ($carte_cote_1_8 == false) AND ($carte_cote_1_9 == false) AND ($carte_cote_1_10 == false) AND ($carte_cote_1_11 == false) AND ($carte_cote_1_12 == false)){$sql1 = $position->setCarte7('carte_cote_1_7');} 
        if (($cote == 1) AND ($carte == "carte8") AND ($carte_cote_1_9 == false) AND ($carte_cote_1_10 == false) AND ($carte_cote_1_11 == false) AND ($carte_cote_1_12 == false)){$sql1 = $position->setCarte8('carte_cote_1_8');}        
        if (($cote == 1) AND ($carte == "carte9") AND ($carte_cote_1_10 == false) AND ($carte_cote_1_11 == false) AND ($carte_cote_1_12 == false)){$sql1 = $position->setCarte9('carte_cote_1_9');}
        if (($cote == 1) AND ($carte == "carte10") AND ($carte_cote_1_11 == false) AND ($carte_cote_1_12 == false)){$sql1 = $position->setCarte10('carte_cote_1_10');}        
        if (($cote == 1) AND ($carte == "carte11") AND ($carte_cote_1_12 == false)){$sql1 = $position->setCarte11('carte_cote_1_11');}        
        if (($cote == 1) AND ($carte == "carte12")){$sql1 = $position->setCarte12('carte_cote_1_12');}


        if (($cote == 1) AND ($carte == "carte13") AND ($carte_cote_1_16 == false) AND ($carte_cote_1_17 == false) AND ($carte_cote_1_18 == false) AND ($carte_cote_1_19 == false) AND ($carte_cote_1_20 == false) AND ($carte_cote_1_21 == false) AND ($carte_cote_1_22 == false) AND ($carte_cote_1_23 == false) AND ($carte_cote_1_24 == false)){$sql1 = $position->setCarte13('carte_cote_1_13');}
        if (($cote == 1) AND ($carte == "carte14") AND ($carte_cote_1_16 == false) AND ($carte_cote_1_17 == false) AND ($carte_cote_1_18 == false) AND ($carte_cote_1_19 == false) AND ($carte_cote_1_20 == false) AND ($carte_cote_1_21 == false) AND ($carte_cote_1_22 == false) AND ($carte_cote_1_23 == false) AND ($carte_cote_1_24 == false)){$sql1 = $position->setCarte14('carte_cote_1_14');}
        if (($cote == 1) AND ($carte == "carte15") AND ($carte_cote_1_16 == false) AND ($carte_cote_1_17 == false) AND ($carte_cote_1_18 == false) AND ($carte_cote_1_19 == false) AND ($carte_cote_1_20 == false) AND ($carte_cote_1_21 == false) AND ($carte_cote_1_22 == false) AND ($carte_cote_1_23 == false) AND ($carte_cote_1_24 == false)){$sql1 = $position->setCarte15('carte_cote_1_15');}
        if (($cote == 1) AND ($carte == "carte16") AND ($carte_cote_1_17 == false) AND ($carte_cote_1_18 == false) AND ($carte_cote_1_19 == false) AND ($carte_cote_1_20 == false) AND ($carte_cote_1_21 == false) AND ($carte_cote_1_22 == false) AND ($carte_cote_1_23 == false) AND ($carte_cote_1_24 == false)){$sql1 = $position->setCarte16('carte_cote_1_16');}
        if (($cote == 1) AND ($carte == "carte17") AND ($carte_cote_1_18 == false) AND ($carte_cote_1_19 == false) AND ($carte_cote_1_20 == false) AND ($carte_cote_1_21 == false) AND ($carte_cote_1_22 == false) AND ($carte_cote_1_23 == false) AND ($carte_cote_1_24 == false)){$sql1 = $position->setCarte17('carte_cote_1_17');}
        if (($cote == 1) AND ($carte == "carte18") AND ($carte_cote_1_19 == false) AND ($carte_cote_1_20 == false) AND ($carte_cote_1_21 == false) AND ($carte_cote_1_22 == false) AND ($carte_cote_1_23 == false) AND ($carte_cote_1_24 == false)){$sql1 = $position->setCarte18('carte_cote_1_18');}
        if (($cote == 1) AND ($carte == "carte19") AND ($carte_cote_1_20 == false) AND ($carte_cote_1_21 == false) AND ($carte_cote_1_22 == false) AND ($carte_cote_1_23 == false) AND ($carte_cote_1_24 == false)){$sql1 = $position->setCarte19('carte_cote_1_19');}
        if (($cote == 1) AND ($carte == "carte20") AND ($carte_cote_1_21 == false) AND ($carte_cote_1_22 == false) AND ($carte_cote_1_23 == false) AND ($carte_cote_1_24 == false)){$sql1 = $position->setCarte20('carte_cote_1_20');}
        if (($cote == 1) AND ($carte == "carte21") AND ($carte_cote_1_21 == false) AND ($carte_cote_1_22 == false) AND ($carte_cote_1_23 == false) AND ($carte_cote_1_24 == false)){$sql1 = $position->setCarte21('carte_cote_1_21');}
        if (($cote == 1) AND ($carte == "carte22") AND ($carte_cote_1_23 == false) AND ($carte_cote_1_24 == false)){$sql1 = $position->setCarte22('carte_cote_1_22');}
        if (($cote == 1) AND ($carte == "carte23") AND ($carte_cote_1_24 == false)){$sql1 = $position->setCarte23('carte_cote_1_23');}
        if (($cote == 1) AND ($carte == "carte24")){$sql1 = $position->setCarte24('carte_cote_1_24');}


        if (($cote == 1) AND ($carte == "carte25") AND ($carte_cote_1_28 == false) AND ($carte_cote_1_29 == false) AND ($carte_cote_1_30 == false) AND ($carte_cote_1_31 == false) AND ($carte_cote_1_32 == false) AND ($carte_cote_1_33 == false) AND ($carte_cote_1_34 == false) AND ($carte_cote_1_35 == false) AND ($carte_cote_1_36 == false)){$sql1 = $position->setCarte25('carte_cote_1_25');}
        if (($cote == 1) AND ($carte == "carte26") AND ($carte_cote_1_28 == false) AND ($carte_cote_1_29 == false) AND ($carte_cote_1_30 == false) AND ($carte_cote_1_31 == false) AND ($carte_cote_1_32 == false) AND ($carte_cote_1_33 == false) AND ($carte_cote_1_34 == false) AND ($carte_cote_1_35 == false) AND ($carte_cote_1_36 == false)){$sql1 = $position->setCarte26('carte_cote_1_26');}
        if (($cote == 1) AND ($carte == "carte27") AND ($carte_cote_1_28 == false) AND ($carte_cote_1_29 == false) AND ($carte_cote_1_30 == false) AND ($carte_cote_1_31 == false) AND ($carte_cote_1_32 == false) AND ($carte_cote_1_33 == false) AND ($carte_cote_1_34 == false) AND ($carte_cote_1_35 == false) AND ($carte_cote_1_36 == false)){$sql1 = $position->setCarte27('carte_cote_1_27');}
        if (($cote == 1) AND ($carte == "carte28") AND ($carte_cote_1_29 == false) AND ($carte_cote_1_30 == false) AND ($carte_cote_1_31 == false) AND ($carte_cote_1_32 == false) AND ($carte_cote_1_33 == false) AND ($carte_cote_1_34 == false) AND ($carte_cote_1_35 == false) AND ($carte_cote_1_36 == false)){$sql1 = $position->setCarte28('carte_cote_1_28');}
        if (($cote == 1) AND ($carte == "carte29") AND ($carte_cote_1_30 == false) AND ($carte_cote_1_31 == false) AND ($carte_cote_1_32 == false) AND ($carte_cote_1_33 == false) AND ($carte_cote_1_34 == false) AND ($carte_cote_1_35 == false) AND ($carte_cote_1_36 == false)){$sql1 = $position->setCarte29('carte_cote_1_29');}
        if (($cote == 1) AND ($carte == "carte30") AND ($carte_cote_1_31 == false) AND ($carte_cote_1_32 == false) AND ($carte_cote_1_33 == false) AND ($carte_cote_1_34 == false) AND ($carte_cote_1_35 == false) AND ($carte_cote_1_36 == false)){$sql1 = $position->setCarte30('carte_cote_1_30');}
        if (($cote == 1) AND ($carte == "carte31") AND ($carte_cote_1_32 == false) AND ($carte_cote_1_33 == false) AND ($carte_cote_1_34 == false) AND ($carte_cote_1_35 == false) AND ($carte_cote_1_36 == false)){$sql1 = $position->setCarte31('carte_cote_1_31');}
        if (($cote == 1) AND ($carte == "carte32") AND ($carte_cote_1_33 == false) AND ($carte_cote_1_34 == false) AND ($carte_cote_1_35 == false) AND ($carte_cote_1_36 == false)){$sql1 = $position->setCarte32('carte_cote_1_32');}
        if (($cote == 1) AND ($carte == "carte33") AND ($carte_cote_1_34 == false) AND ($carte_cote_1_35 == false) AND ($carte_cote_1_36 == false)){$sql1 = $position->setCarte33('carte_cote_1_33');}
        if (($cote == 1) AND ($carte == "carte34") AND ($carte_cote_1_35 == false) AND ($carte_cote_1_36 == false)){$sql1 = $position->setCarte34('carte_cote_1_34');}
        if (($cote == 1) AND ($carte == "carte35") AND ($carte_cote_1_36 == false)){$sql1 = $position->setCarte35('carte_cote_1_35');}
        if (($cote == 1) AND ($carte == "carte36")){$sql1 = $position->setCarte36('carte_cote_1_36');}


        if (($cote == 1) AND ($carte == "carte37") AND ($carte_cote_1_40 == false) AND ($carte_cote_1_41 == false) AND ($carte_cote_1_42 == false) AND ($carte_cote_1_43 == false) AND ($carte_cote_1_44 == false) AND ($carte_cote_1_45 == false) AND ($carte_cote_1_46 == false) AND ($carte_cote_1_47 == false) AND ($carte_cote_1_48 == false)){$sql1 = $position->setCarte37('carte_cote_1_37');}
        if (($cote == 1) AND ($carte == "carte38") AND ($carte_cote_1_40 == false) AND ($carte_cote_1_41 == false) AND ($carte_cote_1_42 == false) AND ($carte_cote_1_43 == false) AND ($carte_cote_1_44 == false) AND ($carte_cote_1_45 == false) AND ($carte_cote_1_46 == false) AND ($carte_cote_1_47 == false) AND ($carte_cote_1_48 == false)){$sql1 = $position->setCarte38('carte_cote_1_38');}
        if (($cote == 1) AND ($carte == "carte39") AND ($carte_cote_1_40 == false) AND ($carte_cote_1_41 == false) AND ($carte_cote_1_42 == false) AND ($carte_cote_1_43 == false) AND ($carte_cote_1_44 == false) AND ($carte_cote_1_45 == false) AND ($carte_cote_1_46 == false) AND ($carte_cote_1_47 == false) AND ($carte_cote_1_48 == false)){$sql1 = $position->setCarte39('carte_cote_1_39');}
        if (($cote == 1) AND ($carte == "carte40") AND ($carte_cote_1_41 == false) AND ($carte_cote_1_42 == false) AND ($carte_cote_1_43 == false) AND ($carte_cote_1_44 == false) AND ($carte_cote_1_45 == false) AND ($carte_cote_1_46 == false) AND ($carte_cote_1_47 == false) AND ($carte_cote_1_48 == false)){$sql1 = $position->setCarte40('carte_cote_1_40');}
        if (($cote == 1) AND ($carte == "carte41") AND ($carte_cote_1_42 == false) AND ($carte_cote_1_43 == false) AND ($carte_cote_1_44 == false) AND ($carte_cote_1_45 == false) AND ($carte_cote_1_46 == false) AND ($carte_cote_1_47 == false) AND ($carte_cote_1_48 == false)){$sql1 = $position->setCarte41('carte_cote_1_41');}
        if (($cote == 1) AND ($carte == "carte42") AND ($carte_cote_1_43 == false) AND ($carte_cote_1_44 == false) AND ($carte_cote_1_45 == false) AND ($carte_cote_1_46 == false) AND ($carte_cote_1_47 == false) AND ($carte_cote_1_48 == false)){$sql1 = $position->setCarte42('carte_cote_1_42');}
        if (($cote == 1) AND ($carte == "carte43") AND ($carte_cote_1_44 == false) AND ($carte_cote_1_45 == false) AND ($carte_cote_1_46 == false) AND ($carte_cote_1_47 == false) AND ($carte_cote_1_48 == false)){$sql1 = $position->setCarte43('carte_cote_1_43');}
        if (($cote == 1) AND ($carte == "carte44") AND ($carte_cote_1_45 == false) AND ($carte_cote_1_46 == false) AND ($carte_cote_1_47 == false) AND ($carte_cote_1_48 == false)){$sql1 = $position->setCarte44('carte_cote_1_44');}
        if (($cote == 1) AND ($carte == "carte45") AND ($carte_cote_1_46 == false) AND ($carte_cote_1_47 == false) AND ($carte_cote_1_48 == false)){$sql1 = $position->setCarte45('carte_cote_1_45');}
        if (($cote == 1) AND ($carte == "carte46") AND ($carte_cote_1_47 == false) AND ($carte_cote_1_48 == false)){$sql1 = $position->setCarte46('carte_cote_1_46');}
        if (($cote == 1) AND ($carte == "carte47") AND ($carte_cote_1_48 == false)){$sql1 = $position->setCarte47('carte_cote_1_47');}
        if (($cote == 1) AND ($carte == "carte48")){$sql1 = $position->setCarte48('carte_cote_1_48');}


        if (($cote == 1) AND ($carte == "carte49") AND ($carte_cote_1_52 == false) AND ($carte_cote_1_53 == false) AND ($carte_cote_1_54 == false) AND ($carte_cote_1_55 == false) AND ($carte_cote_1_56 == false) AND ($carte_cote_1_57 == false) AND ($carte_cote_1_58 == false) AND ($carte_cote_1_59 == false) AND ($carte_cote_1_60 == false)){$sql1 = $position->setCarte49('carte_cote_1_49');}
        if (($cote == 1) AND ($carte == "carte50") AND ($carte_cote_1_52 == false) AND ($carte_cote_1_53 == false) AND ($carte_cote_1_54 == false) AND ($carte_cote_1_55 == false) AND ($carte_cote_1_56 == false) AND ($carte_cote_1_57 == false) AND ($carte_cote_1_58 == false) AND ($carte_cote_1_59 == false) AND ($carte_cote_1_60 == false)){$sql1 = $position->setCarte50('carte_cote_1_50');}
        if (($cote == 1) AND ($carte == "carte51") AND ($carte_cote_1_52 == false) AND ($carte_cote_1_53 == false) AND ($carte_cote_1_54 == false) AND ($carte_cote_1_55 == false) AND ($carte_cote_1_56 == false) AND ($carte_cote_1_57 == false) AND ($carte_cote_1_58 == false) AND ($carte_cote_1_59 == false) AND ($carte_cote_1_60 == false)){$sql1 = $position->setCarte51('carte_cote_1_51');}
        if (($cote == 1) AND ($carte == "carte52") AND ($carte_cote_1_53 == false) AND ($carte_cote_1_54 == false) AND ($carte_cote_1_55 == false) AND ($carte_cote_1_56 == false) AND ($carte_cote_1_57 == false) AND ($carte_cote_1_58 == false) AND ($carte_cote_1_59 == false) AND ($carte_cote_1_60 == false)){$sql1 = $position->setCarte52('carte_cote_1_52');}
        if (($cote == 1) AND ($carte == "carte53") AND ($carte_cote_1_54 == false) AND ($carte_cote_1_55 == false) AND ($carte_cote_1_56 == false) AND ($carte_cote_1_57 == false) AND ($carte_cote_1_58 == false) AND ($carte_cote_1_59 == false) AND ($carte_cote_1_60 == false)){$sql1 = $position->setCarte53('carte_cote_1_53');}
        if (($cote == 1) AND ($carte == "carte54") AND ($carte_cote_1_55 == false) AND ($carte_cote_1_56 == false) AND ($carte_cote_1_57 == false) AND ($carte_cote_1_58 == false) AND ($carte_cote_1_59 == false) AND ($carte_cote_1_60 == false)){$sql1 = $position->setCarte54('carte_cote_1_54');}
        if (($cote == 1) AND ($carte == "carte55") AND ($carte_cote_1_56 == false) AND ($carte_cote_1_57 == false) AND ($carte_cote_1_58 == false) AND ($carte_cote_1_59 == false) AND ($carte_cote_1_60 == false)){$sql1 = $position->setCarte55('carte_cote_1_55');}
        if (($cote == 1) AND ($carte == "carte56") AND ($carte_cote_1_57 == false) AND ($carte_cote_1_58 == false) AND ($carte_cote_1_59 == false) AND ($carte_cote_1_60 == false)){$sql1 = $position->setCarte56('carte_cote_1_56');}
        if (($cote == 1) AND ($carte == "carte57") AND ($carte_cote_1_58 == false) AND ($carte_cote_1_59 == false) AND ($carte_cote_1_60 == false)){$sql1 = $position->setCarte57('carte_cote_1_57');}
        if (($cote == 1) AND ($carte == "carte58") AND ($carte_cote_1_59 == false) AND ($carte_cote_1_60 == false)){$sql1 = $position->setCarte58('carte_cote_1_58');}
        if (($cote == 1) AND ($carte == "carte59") AND ($carte_cote_1_60 == false)){$sql1 = $position->setCarte59('carte_cote_1_59');}
        if (($cote == 1) AND ($carte == "carte60")){$sql1 = $position->setCarte60('carte_cote_1_60');}







        if (($cote == 2) AND ($carte == "carte1") AND ($carte_cote_2_4 == false) AND ($carte_cote_2_5 == false) AND ($carte_cote_2_6 == false) AND ($carte_cote_2_7 == false) AND ($carte_cote_2_8 == false) AND ($carte_cote_2_9 == false) AND ($carte_cote_2_10 == false) AND ($carte_cote_2_11 == false) AND ($carte_cote_2_12 == false)){$sql1 = $position->setCarte1('carte_cote_2_1');}
        if (($cote == 2) AND ($carte == "carte2") AND ($carte_cote_2_4 == false) AND ($carte_cote_2_5 == false) AND ($carte_cote_2_6 == false) AND ($carte_cote_2_7 == false) AND ($carte_cote_2_8 == false) AND ($carte_cote_2_9 == false) AND ($carte_cote_2_10 == false) AND ($carte_cote_2_11 == false) AND ($carte_cote_2_12 == false)){$sql1 = $position->setCarte2('carte_cote_2_2');}
        if (($cote == 2) AND ($carte == "carte3") AND ($carte_cote_2_4 == false) AND ($carte_cote_2_5 == false) AND ($carte_cote_2_6 == false) AND ($carte_cote_2_7 == false) AND ($carte_cote_2_8 == false) AND ($carte_cote_2_9 == false) AND ($carte_cote_2_10 == false) AND ($carte_cote_2_11 == false) AND ($carte_cote_2_12 == false)){$sql1 = $position->setCarte3('carte_cote_2_3');}
        if (($cote == 2) AND ($carte == "carte4") AND ($carte_cote_2_5 == false) AND ($carte_cote_2_6 == false) AND ($carte_cote_2_7 == false) AND ($carte_cote_2_8 == false) AND ($carte_cote_2_9 == false) AND ($carte_cote_2_10 == false) AND ($carte_cote_2_11 == false) AND ($carte_cote_2_12 == false)){$sql1 = $position->setCarte4('carte_cote_2_4');}
        if (($cote == 2) AND ($carte == "carte5") AND ($carte_cote_2_6 == false) AND ($carte_cote_2_7 == false) AND ($carte_cote_2_8 == false) AND ($carte_cote_2_9 == false) AND ($carte_cote_2_10 == false) AND ($carte_cote_2_11 == false) AND ($carte_cote_2_12 == false)){$sql1 = $position->setCarte5('carte_cote_2_5');}
        if (($cote == 2) AND ($carte == "carte6") AND ($carte_cote_2_7 == false) AND ($carte_cote_2_8 == false) AND ($carte_cote_2_9 == false) AND ($carte_cote_2_10 == false) AND ($carte_cote_2_11 == false) AND ($carte_cote_2_12 == false)){$sql1 = $position->setCarte6('carte_cote_2_6');}
        if (($cote == 2) AND ($carte == "carte7") AND ($carte_cote_2_8 == false) AND ($carte_cote_2_9 == false) AND ($carte_cote_2_10 == false) AND ($carte_cote_2_11 == false) AND ($carte_cote_2_12 == false)){$sql1 = $position->setCarte7('carte_cote_2_7');} 
        if (($cote == 2) AND ($carte == "carte8") AND ($carte_cote_2_9 == false) AND ($carte_cote_2_10 == false) AND ($carte_cote_2_11 == false) AND ($carte_cote_2_12 == false)){$sql1 = $position->setCarte8('carte_cote_2_8');}        
        if (($cote == 2) AND ($carte == "carte9") AND ($carte_cote_2_10 == false) AND ($carte_cote_2_11 == false) AND ($carte_cote_2_12 == false)){$sql1 = $position->setCarte9('carte_cote_2_9');}
        if (($cote == 2) AND ($carte == "carte10") AND ($carte_cote_2_11 == false) AND ($carte_cote_2_12 == false)){$sql1 = $position->setCarte10('carte_cote_2_10');}        
        if (($cote == 2) AND ($carte == "carte11") AND ($carte_cote_2_12 == false)){$sql1 = $position->setCarte11('carte_cote_2_11');}        
        if (($cote == 2) AND ($carte == "carte12")){$sql1 = $position->setCarte12('carte_cote_2_12');}


        if (($cote == 2) AND ($carte == "carte13") AND ($carte_cote_2_16 == false) AND ($carte_cote_2_17 == false) AND ($carte_cote_2_18 == false) AND ($carte_cote_2_19 == false) AND ($carte_cote_2_20 == false) AND ($carte_cote_2_21 == false) AND ($carte_cote_2_22 == false) AND ($carte_cote_2_23 == false) AND ($carte_cote_2_24 == false)){$sql1 = $position->setCarte13('carte_cote_2_13');}
        if (($cote == 2) AND ($carte == "carte14") AND ($carte_cote_2_16 == false) AND ($carte_cote_2_17 == false) AND ($carte_cote_2_18 == false) AND ($carte_cote_2_19 == false) AND ($carte_cote_2_20 == false) AND ($carte_cote_2_21 == false) AND ($carte_cote_2_22 == false) AND ($carte_cote_2_23 == false) AND ($carte_cote_2_24 == false)){$sql1 = $position->setCarte14('carte_cote_2_14');}
        if (($cote == 2) AND ($carte == "carte15") AND ($carte_cote_2_16 == false) AND ($carte_cote_2_17 == false) AND ($carte_cote_2_18 == false) AND ($carte_cote_2_19 == false) AND ($carte_cote_2_20 == false) AND ($carte_cote_2_21 == false) AND ($carte_cote_2_22 == false) AND ($carte_cote_2_23 == false) AND ($carte_cote_2_24 == false)){$sql1 = $position->setCarte15('carte_cote_2_15');}
        if (($cote == 2) AND ($carte == "carte16") AND ($carte_cote_2_17 == false) AND ($carte_cote_2_18 == false) AND ($carte_cote_2_19 == false) AND ($carte_cote_2_20 == false) AND ($carte_cote_2_21 == false) AND ($carte_cote_2_22 == false) AND ($carte_cote_2_23 == false) AND ($carte_cote_2_24 == false)){$sql1 = $position->setCarte16('carte_cote_2_16');}
        if (($cote == 2) AND ($carte == "carte17") AND ($carte_cote_2_18 == false) AND ($carte_cote_2_19 == false) AND ($carte_cote_2_20 == false) AND ($carte_cote_2_21 == false) AND ($carte_cote_2_22 == false) AND ($carte_cote_2_23 == false) AND ($carte_cote_2_24 == false)){$sql1 = $position->setCarte17('carte_cote_2_17');}
        if (($cote == 2) AND ($carte == "carte18") AND ($carte_cote_2_19 == false) AND ($carte_cote_2_20 == false) AND ($carte_cote_2_21 == false) AND ($carte_cote_2_22 == false) AND ($carte_cote_2_23 == false) AND ($carte_cote_2_24 == false)){$sql1 = $position->setCarte18('carte_cote_2_18');}
        if (($cote == 2) AND ($carte == "carte19") AND ($carte_cote_2_20 == false) AND ($carte_cote_2_21 == false) AND ($carte_cote_2_22 == false) AND ($carte_cote_2_23 == false) AND ($carte_cote_2_24 == false)){$sql1 = $position->setCarte19('carte_cote_2_19');}
        if (($cote == 2) AND ($carte == "carte20") AND ($carte_cote_2_21 == false) AND ($carte_cote_2_22 == false) AND ($carte_cote_2_23 == false) AND ($carte_cote_2_24 == false)){$sql1 = $position->setCarte20('carte_cote_2_20');}
        if (($cote == 2) AND ($carte == "carte21") AND ($carte_cote_2_21 == false) AND ($carte_cote_2_22 == false) AND ($carte_cote_2_23 == false) AND ($carte_cote_2_24 == false)){$sql1 = $position->setCarte21('carte_cote_2_21');}
        if (($cote == 2) AND ($carte == "carte22") AND ($carte_cote_2_23 == false) AND ($carte_cote_2_24 == false)){$sql1 = $position->setCarte22('carte_cote_2_22');}
        if (($cote == 2) AND ($carte == "carte23") AND ($carte_cote_2_24 == false)){$sql1 = $position->setCarte23('carte_cote_2_23');}
        if (($cote == 2) AND ($carte == "carte24")){$sql1 = $position->setCarte24('carte_cote_2_24');}


        if (($cote == 2) AND ($carte == "carte25") AND ($carte_cote_2_28 == false) AND ($carte_cote_2_29 == false) AND ($carte_cote_2_30 == false) AND ($carte_cote_2_31 == false) AND ($carte_cote_2_32 == false) AND ($carte_cote_2_33 == false) AND ($carte_cote_2_34 == false) AND ($carte_cote_2_35 == false) AND ($carte_cote_2_36 == false)){$sql1 = $position->setCarte25('carte_cote_2_25');}
        if (($cote == 2) AND ($carte == "carte26") AND ($carte_cote_2_28 == false) AND ($carte_cote_2_29 == false) AND ($carte_cote_2_30 == false) AND ($carte_cote_2_31 == false) AND ($carte_cote_2_32 == false) AND ($carte_cote_2_33 == false) AND ($carte_cote_2_34 == false) AND ($carte_cote_2_35 == false) AND ($carte_cote_2_36 == false)){$sql1 = $position->setCarte26('carte_cote_2_26');}
        if (($cote == 2) AND ($carte == "carte27") AND ($carte_cote_2_28 == false) AND ($carte_cote_2_29 == false) AND ($carte_cote_2_30 == false) AND ($carte_cote_2_31 == false) AND ($carte_cote_2_32 == false) AND ($carte_cote_2_33 == false) AND ($carte_cote_2_34 == false) AND ($carte_cote_2_35 == false) AND ($carte_cote_2_36 == false)){$sql1 = $position->setCarte27('carte_cote_2_27');}
        if (($cote == 2) AND ($carte == "carte28") AND ($carte_cote_2_29 == false) AND ($carte_cote_2_30 == false) AND ($carte_cote_2_31 == false) AND ($carte_cote_2_32 == false) AND ($carte_cote_2_33 == false) AND ($carte_cote_2_34 == false) AND ($carte_cote_2_35 == false) AND ($carte_cote_2_36 == false)){$sql1 = $position->setCarte28('carte_cote_2_28');}
        if (($cote == 2) AND ($carte == "carte29") AND ($carte_cote_2_30 == false) AND ($carte_cote_2_31 == false) AND ($carte_cote_2_32 == false) AND ($carte_cote_2_33 == false) AND ($carte_cote_2_34 == false) AND ($carte_cote_2_35 == false) AND ($carte_cote_2_36 == false)){$sql1 = $position->setCarte29('carte_cote_2_29');}
        if (($cote == 2) AND ($carte == "carte30") AND ($carte_cote_2_31 == false) AND ($carte_cote_2_32 == false) AND ($carte_cote_2_33 == false) AND ($carte_cote_2_34 == false) AND ($carte_cote_2_35 == false) AND ($carte_cote_2_36 == false)){$sql1 = $position->setCarte30('carte_cote_2_30');}
        if (($cote == 2) AND ($carte == "carte31") AND ($carte_cote_2_32 == false) AND ($carte_cote_2_33 == false) AND ($carte_cote_2_34 == false) AND ($carte_cote_2_35 == false) AND ($carte_cote_2_36 == false)){$sql1 = $position->setCarte31('carte_cote_2_31');}
        if (($cote == 2) AND ($carte == "carte32") AND ($carte_cote_2_33 == false) AND ($carte_cote_2_34 == false) AND ($carte_cote_2_35 == false) AND ($carte_cote_2_36 == false)){$sql1 = $position->setCarte32('carte_cote_2_32');}
        if (($cote == 2) AND ($carte == "carte33") AND ($carte_cote_2_34 == false) AND ($carte_cote_2_35 == false) AND ($carte_cote_2_36 == false)){$sql1 = $position->setCarte33('carte_cote_2_33');}
        if (($cote == 2) AND ($carte == "carte34") AND ($carte_cote_2_35 == false) AND ($carte_cote_2_36 == false)){$sql1 = $position->setCarte34('carte_cote_2_34');}
        if (($cote == 2) AND ($carte == "carte35") AND ($carte_cote_2_36 == false)){$sql1 = $position->setCarte35('carte_cote_2_35');}
        if (($cote == 2) AND ($carte == "carte36")){$sql1 = $position->setCarte36('carte_cote_2_36');}


        if (($cote == 2) AND ($carte == "carte37") AND ($carte_cote_2_40 == false) AND ($carte_cote_2_41 == false) AND ($carte_cote_2_42 == false) AND ($carte_cote_2_43 == false) AND ($carte_cote_2_44 == false) AND ($carte_cote_2_45 == false) AND ($carte_cote_2_46 == false) AND ($carte_cote_2_47 == false) AND ($carte_cote_2_48 == false)){$sql1 = $position->setCarte37('carte_cote_2_37');}
        if (($cote == 2) AND ($carte == "carte38") AND ($carte_cote_2_40 == false) AND ($carte_cote_2_41 == false) AND ($carte_cote_2_42 == false) AND ($carte_cote_2_43 == false) AND ($carte_cote_2_44 == false) AND ($carte_cote_2_45 == false) AND ($carte_cote_2_46 == false) AND ($carte_cote_2_47 == false) AND ($carte_cote_2_48 == false)){$sql1 = $position->setCarte38('carte_cote_2_38');}
        if (($cote == 2) AND ($carte == "carte39") AND ($carte_cote_2_40 == false) AND ($carte_cote_2_41 == false) AND ($carte_cote_2_42 == false) AND ($carte_cote_2_43 == false) AND ($carte_cote_2_44 == false) AND ($carte_cote_2_45 == false) AND ($carte_cote_2_46 == false) AND ($carte_cote_2_47 == false) AND ($carte_cote_2_48 == false)){$sql1 = $position->setCarte39('carte_cote_2_39');}
        if (($cote == 2) AND ($carte == "carte40") AND ($carte_cote_2_41 == false) AND ($carte_cote_2_42 == false) AND ($carte_cote_2_43 == false) AND ($carte_cote_2_44 == false) AND ($carte_cote_2_45 == false) AND ($carte_cote_2_46 == false) AND ($carte_cote_2_47 == false) AND ($carte_cote_2_48 == false)){$sql1 = $position->setCarte40('carte_cote_2_40');}
        if (($cote == 2) AND ($carte == "carte41") AND ($carte_cote_2_42 == false) AND ($carte_cote_2_43 == false) AND ($carte_cote_2_44 == false) AND ($carte_cote_2_45 == false) AND ($carte_cote_2_46 == false) AND ($carte_cote_2_47 == false) AND ($carte_cote_2_48 == false)){$sql1 = $position->setCarte41('carte_cote_2_41');}
        if (($cote == 2) AND ($carte == "carte42") AND ($carte_cote_2_43 == false) AND ($carte_cote_2_44 == false) AND ($carte_cote_2_45 == false) AND ($carte_cote_2_46 == false) AND ($carte_cote_2_47 == false) AND ($carte_cote_2_48 == false)){$sql1 = $position->setCarte42('carte_cote_2_42');}
        if (($cote == 2) AND ($carte == "carte43") AND ($carte_cote_2_44 == false) AND ($carte_cote_2_45 == false) AND ($carte_cote_2_46 == false) AND ($carte_cote_2_47 == false) AND ($carte_cote_2_48 == false)){$sql1 = $position->setCarte43('carte_cote_2_43');}
        if (($cote == 2) AND ($carte == "carte44") AND ($carte_cote_2_45 == false) AND ($carte_cote_2_46 == false) AND ($carte_cote_2_47 == false) AND ($carte_cote_2_48 == false)){$sql1 = $position->setCarte44('carte_cote_2_44');}
        if (($cote == 2) AND ($carte == "carte45") AND ($carte_cote_2_46 == false) AND ($carte_cote_2_47 == false) AND ($carte_cote_2_48 == false)){$sql1 = $position->setCarte45('carte_cote_2_45');}
        if (($cote == 2) AND ($carte == "carte46") AND ($carte_cote_2_47 == false) AND ($carte_cote_2_48 == false)){$sql1 = $position->setCarte46('carte_cote_2_46');}
        if (($cote == 2) AND ($carte == "carte47") AND ($carte_cote_2_48 == false)){$sql1 = $position->setCarte47('carte_cote_2_47');}
        if (($cote == 2) AND ($carte == "carte48")){$sql1 = $position->setCarte48('carte_cote_2_48');}


        if (($cote == 2) AND ($carte == "carte49") AND ($carte_cote_2_52 == false) AND ($carte_cote_2_53 == false) AND ($carte_cote_2_54 == false) AND ($carte_cote_2_55 == false) AND ($carte_cote_2_56 == false) AND ($carte_cote_2_57 == false) AND ($carte_cote_2_58 == false) AND ($carte_cote_2_59 == false) AND ($carte_cote_2_60 == false)){$sql1 = $position->setCarte49('carte_cote_2_49');}
        if (($cote == 2) AND ($carte == "carte50") AND ($carte_cote_2_52 == false) AND ($carte_cote_2_53 == false) AND ($carte_cote_2_54 == false) AND ($carte_cote_2_55 == false) AND ($carte_cote_2_56 == false) AND ($carte_cote_2_57 == false) AND ($carte_cote_2_58 == false) AND ($carte_cote_2_59 == false) AND ($carte_cote_2_60 == false)){$sql1 = $position->setCarte50('carte_cote_2_50');}
        if (($cote == 2) AND ($carte == "carte51") AND ($carte_cote_2_52 == false) AND ($carte_cote_2_53 == false) AND ($carte_cote_2_54 == false) AND ($carte_cote_2_55 == false) AND ($carte_cote_2_56 == false) AND ($carte_cote_2_57 == false) AND ($carte_cote_2_58 == false) AND ($carte_cote_2_59 == false) AND ($carte_cote_2_60 == false)){$sql1 = $position->setCarte51('carte_cote_2_51');}
        if (($cote == 2) AND ($carte == "carte52") AND ($carte_cote_2_53 == false) AND ($carte_cote_2_54 == false) AND ($carte_cote_2_55 == false) AND ($carte_cote_2_56 == false) AND ($carte_cote_2_57 == false) AND ($carte_cote_2_58 == false) AND ($carte_cote_2_59 == false) AND ($carte_cote_2_60 == false)){$sql1 = $position->setCarte52('carte_cote_2_52');}
        if (($cote == 2) AND ($carte == "carte53") AND ($carte_cote_2_54 == false) AND ($carte_cote_2_55 == false) AND ($carte_cote_2_56 == false) AND ($carte_cote_2_57 == false) AND ($carte_cote_2_58 == false) AND ($carte_cote_2_59 == false) AND ($carte_cote_2_60 == false)){$sql1 = $position->setCarte53('carte_cote_2_53');}
        if (($cote == 2) AND ($carte == "carte54") AND ($carte_cote_2_55 == false) AND ($carte_cote_2_56 == false) AND ($carte_cote_2_57 == false) AND ($carte_cote_2_58 == false) AND ($carte_cote_2_59 == false) AND ($carte_cote_2_60 == false)){$sql1 = $position->setCarte54('carte_cote_2_54');}
        if (($cote == 2) AND ($carte == "carte55") AND ($carte_cote_2_56 == false) AND ($carte_cote_2_57 == false) AND ($carte_cote_2_58 == false) AND ($carte_cote_2_59 == false) AND ($carte_cote_2_60 == false)){$sql1 = $position->setCarte55('carte_cote_2_55');}
        if (($cote == 2) AND ($carte == "carte56") AND ($carte_cote_2_57 == false) AND ($carte_cote_2_58 == false) AND ($carte_cote_2_59 == false) AND ($carte_cote_2_60 == false)){$sql1 = $position->setCarte56('carte_cote_2_56');}
        if (($cote == 2) AND ($carte == "carte57") AND ($carte_cote_2_58 == false) AND ($carte_cote_2_59 == false) AND ($carte_cote_2_60 == false)){$sql1 = $position->setCarte57('carte_cote_2_57');}
        if (($cote == 2) AND ($carte == "carte58") AND ($carte_cote_2_59 == false) AND ($carte_cote_2_60 == false)){$sql1 = $position->setCarte58('carte_cote_2_58');}
        if (($cote == 2) AND ($carte == "carte59") AND ($carte_cote_2_60 == false)){$sql1 = $position->setCarte59('carte_cote_2_59');}
        if (($cote == 2) AND ($carte == "carte60")){$sql1 = $position->setCarte60('carte_cote_2_60');}




        if (($cote == "defausse") AND ($carte == "carte1")){$sql1 = $position->setCarte1('carte_def_1');}     if (($cote == "defausse") AND ($carte == "carte2")){$sql1 = $position->setCarte2('carte_def_2');}        if (($cote == "defausse") AND ($carte == "carte3")){$sql1 = $position->setCarte3('carte_def_3');}
        if (($cote == "defausse") AND ($carte == "carte4")){$sql1 = $position->setCarte4('carte_def_4');}     if (($cote == "defausse") AND ($carte == "carte5")){$sql1 = $position->setCarte5('carte_def_5');}        if (($cote == "defausse") AND ($carte == "carte6")){$sql1 = $position->setCarte6('carte_def_6');}
        if (($cote == "defausse") AND ($carte == "carte7")){$sql1 = $position->setCarte7('carte_def_7');}     if (($cote == "defausse") AND ($carte == "carte8")){$sql1 = $position->setCarte8('carte_def_8');}        if (($cote == "defausse") AND ($carte == "carte9")){$sql1 = $position->setCarte9('carte_def_9');}
        if (($cote == "defausse") AND ($carte == "carte10")){$sql1 = $position->setCarte10('carte_def_10');}        if (($cote == "defausse") AND ($carte == "carte11")){$sql1 = $position->setCarte11('carte_def_11');}        if (($cote == "defausse") AND ($carte == "carte12")){$sql1 = $position->setCarte12('carte_def_12');}
        if (($cote == "defausse") AND ($carte == "carte13")){$sql1 = $position->setCarte13('carte_def_13');}        if (($cote == "defausse") AND ($carte == "carte14")){$sql1 = $position->setCarte14('carte_def_14');}        if (($cote == "defausse") AND ($carte == "carte15")){$sql1 = $position->setCarte15('carte_def_15');}
        if (($cote == "defausse") AND ($carte == "carte16")){$sql1 = $position->setCarte16('carte_def_16');}        if (($cote == "defausse") AND ($carte == "carte17")){$sql1 = $position->setCarte17('carte_def_17');}        if (($cote == "defausse") AND ($carte == "carte18")){$sql1 = $position->setCarte18('carte_def_18');}
        if (($cote == "defausse") AND ($carte == "carte19")){$sql1 = $position->setCarte19('carte_def_19');}        if (($cote == "defausse") AND ($carte == "carte20")){$sql1 = $position->setCarte20('carte_def_20');}        if (($cote == "defausse") AND ($carte == "carte21")){$sql1 = $position->setCarte21('carte_def_21');}
        if (($cote == "defausse") AND ($carte == "carte22")){$sql1 = $position->setCarte22('carte_def_22');}        if (($cote == "defausse") AND ($carte == "carte23")){$sql1 = $position->setCarte23('carte_def_23');}        if (($cote == "defausse") AND ($carte == "carte24")){$sql1 = $position->setCarte24('carte_def_24');}
        if (($cote == "defausse") AND ($carte == "carte25")){$sql1 = $position->setCarte25('carte_def_25');}        if (($cote == "defausse") AND ($carte == "carte26")){$sql1 = $position->setCarte26('carte_def_26');}        if (($cote == "defausse") AND ($carte == "carte27")){$sql1 = $position->setCarte27('carte_def_27');}
        if (($cote == "defausse") AND ($carte == "carte28")){$sql1 = $position->setCarte28('carte_def_28');}        if (($cote == "defausse") AND ($carte == "carte29")){$sql1 = $position->setCarte29('carte_def_29');}        if (($cote == "defausse") AND ($carte == "carte30")){$sql1 = $position->setCarte30('carte_def_30');}
        if (($cote == "defausse") AND ($carte == "carte31")){$sql1 = $position->setCarte31('carte_def_31');}        if (($cote == "defausse") AND ($carte == "carte32")){$sql1 = $position->setCarte32('carte_def_32');}        if (($cote == "defausse") AND ($carte == "carte33")){$sql1 = $position->setCarte33('carte_def_33');}
        if (($cote == "defausse") AND ($carte == "carte34")){$sql1 = $position->setCarte34('carte_def_34');}        if (($cote == "defausse") AND ($carte == "carte35")){$sql1 = $position->setCarte35('carte_def_35');}        if (($cote == "defausse") AND ($carte == "carte36")){$sql1 = $position->setCarte36('carte_def_36');}
        if (($cote == "defausse") AND ($carte == "carte37")){$sql1 = $position->setCarte37('carte_def_37');}        if (($cote == "defausse") AND ($carte == "carte38")){$sql1 = $position->setCarte38('carte_def_38');}        if (($cote == "defausse") AND ($carte == "carte39")){$sql1 = $position->setCarte39('carte_def_39');}
        if (($cote == "defausse") AND ($carte == "carte40")){$sql1 = $position->setCarte40('carte_def_40');}        if (($cote == "defausse") AND ($carte == "carte41")){$sql1 = $position->setCarte41('carte_def_41');}        if (($cote == "defausse") AND ($carte == "carte42")){$sql1 = $position->setCarte42('carte_def_42');}
        if (($cote == "defausse") AND ($carte == "carte43")){$sql1 = $position->setCarte43('carte_def_43');}        if (($cote == "defausse") AND ($carte == "carte44")){$sql1 = $position->setCarte44('carte_def_44');}        if (($cote == "defausse") AND ($carte == "carte45")){$sql1 = $position->setCarte45('carte_def_45');}
        if (($cote == "defausse") AND ($carte == "carte46")){$sql1 = $position->setCarte46('carte_def_46');}        if (($cote == "defausse") AND ($carte == "carte47")){$sql1 = $position->setCarte47('carte_def_47');}        if (($cote == "defausse") AND ($carte == "carte48")){$sql1 = $position->setCarte48('carte_def_48');}
        if (($cote == "defausse") AND ($carte == "carte49")){$sql1 = $position->setCarte49('carte_def_49');}        if (($cote == "defausse") AND ($carte == "carte50")){$sql1 = $position->setCarte50('carte_def_50');}        if (($cote == "defausse") AND ($carte == "carte51")){$sql1 = $position->setCarte51('carte_def_51');}
        if (($cote == "defausse") AND ($carte == "carte52")){$sql1 = $position->setCarte52('carte_def_52');}        if (($cote == "defausse") AND ($carte == "carte53")){$sql1 = $position->setCarte53('carte_def_53');}        if (($cote == "defausse") AND ($carte == "carte54")){$sql1 = $position->setCarte54('carte_def_54');}
        if (($cote == "defausse") AND ($carte == "carte55")){$sql1 = $position->setCarte55('carte_def_55');}        if (($cote == "defausse") AND ($carte == "carte56")){$sql1 = $position->setCarte56('carte_def_56');}        if (($cote == "defausse") AND ($carte == "carte57")){$sql1 = $position->setCarte57('carte_def_57');}
        if (($cote == "defausse") AND ($carte == "carte58")){$sql1 = $position->setCarte58('carte_def_58');}        if (($cote == "defausse") AND ($carte == "carte59")){$sql1 = $position->setCarte59('carte_def_59');}        if (($cote == "defausse") AND ($carte == "carte60")){$sql1 = $position->setCarte60('carte_def_60');}




        if (($cote == "defausse") AND ($carte == "carte1") AND ($def->getColonne11() == false)){$sql4 = $def->setColonne11('carte1');} else if (($cote == "defausse") AND ($carte == "carte1") AND ($def->getColonne12() == false)){$sql4 = $def->setColonne12('carte1');} else
        if (($cote == "defausse") AND ($carte == "carte1") AND ($def->getColonne13() == false)){$sql4 = $def->setColonne13('carte1');} else if (($cote == "defausse") AND ($carte == "carte1") AND ($def->getColonne14() == false)){$sql4 = $def->setColonne14('carte1');} else
        if (($cote == "defausse") AND ($carte == "carte1") AND ($def->getColonne15() == false)){$sql4 = $def->setColonne15('carte1');} else if (($cote == "defausse") AND ($carte == "carte1") AND ($def->getColonne16() == false)){$sql4 = $def->setColonne16('carte1');} else
        if (($cote == "defausse") AND ($carte == "carte1") AND ($def->getColonne17() == false)){$sql4 = $def->setColonne17('carte1');} else if (($cote == "defausse") AND ($carte == "carte1") AND ($def->getColonne18() == false)){$sql4 = $def->setColonne18('carte1');} else
        if (($cote == "defausse") AND ($carte == "carte1") AND ($def->getColonne19() == false)){$sql4 = $def->setColonne19('carte1');} else if (($cote == "defausse") AND ($carte == "carte1") AND ($def->getColonne110() == false)){$sql4 = $def->setColonne110('carte1');} else
        if (($cote == "defausse") AND ($carte == "carte1") AND ($def->getColonne111() == false)){$sql4 = $def->setColonne111('carte1');} else if (($cote == "defausse") AND ($carte == "carte1") AND ($def->getColonne112() == false)){$sql4 = $def->setColonne112('carte1');} else
        if (($cote == "defausse") AND ($carte == "carte2") AND ($def->getColonne11() == false)){$sql4 = $def->setColonne11('carte2');} else if (($cote == "defausse") AND ($carte == "carte2") AND ($def->getColonne12() == false)){$sql4 = $def->setColonne12('carte2');} else
        if (($cote == "defausse") AND ($carte == "carte2") AND ($def->getColonne13() == false)){$sql4 = $def->setColonne13('carte2');} else if (($cote == "defausse") AND ($carte == "carte2") AND ($def->getColonne14() == false)){$sql4 = $def->setColonne14('carte2');} else
        if (($cote == "defausse") AND ($carte == "carte2") AND ($def->getColonne15() == false)){$sql4 = $def->setColonne15('carte2');} else if (($cote == "defausse") AND ($carte == "carte2") AND ($def->getColonne16() == false)){$sql4 = $def->setColonne16('carte2');} else
        if (($cote == "defausse") AND ($carte == "carte2") AND ($def->getColonne17() == false)){$sql4 = $def->setColonne17('carte2');} else if (($cote == "defausse") AND ($carte == "carte2") AND ($def->getColonne18() == false)){$sql4 = $def->setColonne18('carte2');} else
        if (($cote == "defausse") AND ($carte == "carte2") AND ($def->getColonne19() == false)){$sql4 = $def->setColonne19('carte2');} else if (($cote == "defausse") AND ($carte == "carte2") AND ($def->getColonne110() == false)){$sql4 = $def->setColonne110('carte2');} else
        if (($cote == "defausse") AND ($carte == "carte2") AND ($def->getColonne111() == false)){$sql4 = $def->setColonne111('carte2');} else if (($cote == "defausse") AND ($carte == "carte2") AND ($def->getColonne112() == false)){$sql4 = $def->setColonne112('carte2');} else
        if (($cote == "defausse") AND ($carte == "carte3") AND ($def->getColonne11() == false)){$sql4 = $def->setColonne11('carte3');} else if (($cote == "defausse") AND ($carte == "carte3") AND ($def->getColonne12() == false)){$sql4 = $def->setColonne12('carte3');} else
        if (($cote == "defausse") AND ($carte == "carte3") AND ($def->getColonne13() == false)){$sql4 = $def->setColonne13('carte3');} else if (($cote == "defausse") AND ($carte == "carte3") AND ($def->getColonne14() == false)){$sql4 = $def->setColonne14('carte3');} else
        if (($cote == "defausse") AND ($carte == "carte3") AND ($def->getColonne15() == false)){$sql4 = $def->setColonne15('carte3');} else if (($cote == "defausse") AND ($carte == "carte3") AND ($def->getColonne16() == false)){$sql4 = $def->setColonne16('carte3');} else
        if (($cote == "defausse") AND ($carte == "carte3") AND ($def->getColonne17() == false)){$sql4 = $def->setColonne17('carte3');} else if (($cote == "defausse") AND ($carte == "carte3") AND ($def->getColonne18() == false)){$sql4 = $def->setColonne18('carte3');} else
        if (($cote == "defausse") AND ($carte == "carte3") AND ($def->getColonne19() == false)){$sql4 = $def->setColonne19('carte3');} else if (($cote == "defausse") AND ($carte == "carte3") AND ($def->getColonne110() == false)){$sql4 = $def->setColonne110('carte3');} else
        if (($cote == "defausse") AND ($carte == "carte3") AND ($def->getColonne111() == false)){$sql4 = $def->setColonne111('carte3');} else if (($cote == "defausse") AND ($carte == "carte3") AND ($def->getColonne112() == false)){$sql4 = $def->setColonne112('carte3');} else
        if (($cote == "defausse") AND ($carte == "carte4") AND ($def->getColonne11() == false)){$sql4 = $def->setColonne11('carte4');} else if (($cote == "defausse") AND ($carte == "carte4") AND ($def->getColonne12() == false)){$sql4 = $def->setColonne12('carte4');} else
        if (($cote == "defausse") AND ($carte == "carte4") AND ($def->getColonne13() == false)){$sql4 = $def->setColonne13('carte4');} else if (($cote == "defausse") AND ($carte == "carte4") AND ($def->getColonne14() == false)){$sql4 = $def->setColonne14('carte4');} else
        if (($cote == "defausse") AND ($carte == "carte4") AND ($def->getColonne15() == false)){$sql4 = $def->setColonne15('carte4');} else if (($cote == "defausse") AND ($carte == "carte4") AND ($def->getColonne16() == false)){$sql4 = $def->setColonne16('carte4');} else
        if (($cote == "defausse") AND ($carte == "carte4") AND ($def->getColonne17() == false)){$sql4 = $def->setColonne17('carte4');} else if (($cote == "defausse") AND ($carte == "carte4") AND ($def->getColonne18() == false)){$sql4 = $def->setColonne18('carte4');} else
        if (($cote == "defausse") AND ($carte == "carte4") AND ($def->getColonne19() == false)){$sql4 = $def->setColonne19('carte4');} else if (($cote == "defausse") AND ($carte == "carte4") AND ($def->getColonne110() == false)){$sql4 = $def->setColonne110('carte4');} else
        if (($cote == "defausse") AND ($carte == "carte4") AND ($def->getColonne111() == false)){$sql4 = $def->setColonne111('carte4');} else if (($cote == "defausse") AND ($carte == "carte4") AND ($def->getColonne112() == false)){$sql4 = $def->setColonne112('carte4');} else
        if (($cote == "defausse") AND ($carte == "carte5") AND ($def->getColonne11() == false)){$sql4 = $def->setColonne11('carte5');} else if (($cote == "defausse") AND ($carte == "carte5") AND ($def->getColonne12() == false)){$sql4 = $def->setColonne12('carte5');} else
        if (($cote == "defausse") AND ($carte == "carte5") AND ($def->getColonne13() == false)){$sql4 = $def->setColonne13('carte5');} else if (($cote == "defausse") AND ($carte == "carte5") AND ($def->getColonne14() == false)){$sql4 = $def->setColonne14('carte5');} else
        if (($cote == "defausse") AND ($carte == "carte5") AND ($def->getColonne15() == false)){$sql4 = $def->setColonne15('carte5');} else if (($cote == "defausse") AND ($carte == "carte5") AND ($def->getColonne16() == false)){$sql4 = $def->setColonne16('carte5');} else
        if (($cote == "defausse") AND ($carte == "carte5") AND ($def->getColonne17() == false)){$sql4 = $def->setColonne17('carte5');} else if (($cote == "defausse") AND ($carte == "carte5") AND ($def->getColonne18() == false)){$sql4 = $def->setColonne18('carte5');} else
        if (($cote == "defausse") AND ($carte == "carte5") AND ($def->getColonne19() == false)){$sql4 = $def->setColonne19('carte5');} else if (($cote == "defausse") AND ($carte == "carte5") AND ($def->getColonne110() == false)){$sql4 = $def->setColonne110('carte5');} else
        if (($cote == "defausse") AND ($carte == "carte5") AND ($def->getColonne111() == false)){$sql4 = $def->setColonne111('carte5');} else if (($cote == "defausse") AND ($carte == "carte5") AND ($def->getColonne112() == false)){$sql4 = $def->setColonne112('carte5');} else
        if (($cote == "defausse") AND ($carte == "carte6") AND ($def->getColonne11() == false)){$sql4 = $def->setColonne11('carte6');} else if (($cote == "defausse") AND ($carte == "carte6") AND ($def->getColonne12() == false)){$sql4 = $def->setColonne12('carte6');} else
        if (($cote == "defausse") AND ($carte == "carte6") AND ($def->getColonne13() == false)){$sql4 = $def->setColonne13('carte6');} else if (($cote == "defausse") AND ($carte == "carte6") AND ($def->getColonne14() == false)){$sql4 = $def->setColonne14('carte6');} else
        if (($cote == "defausse") AND ($carte == "carte6") AND ($def->getColonne15() == false)){$sql4 = $def->setColonne15('carte6');} else if (($cote == "defausse") AND ($carte == "carte6") AND ($def->getColonne16() == false)){$sql4 = $def->setColonne16('carte6');} else
        if (($cote == "defausse") AND ($carte == "carte6") AND ($def->getColonne17() == false)){$sql4 = $def->setColonne17('carte6');} else if (($cote == "defausse") AND ($carte == "carte6") AND ($def->getColonne18() == false)){$sql4 = $def->setColonne18('carte6');} else
        if (($cote == "defausse") AND ($carte == "carte6") AND ($def->getColonne19() == false)){$sql4 = $def->setColonne19('carte6');} else if (($cote == "defausse") AND ($carte == "carte6") AND ($def->getColonne110() == false)){$sql4 = $def->setColonne110('carte6');} else
        if (($cote == "defausse") AND ($carte == "carte6") AND ($def->getColonne111() == false)){$sql4 = $def->setColonne111('carte6');} else if (($cote == "defausse") AND ($carte == "carte6") AND ($def->getColonne112() == false)){$sql4 = $def->setColonne112('carte6');} else
        if (($cote == "defausse") AND ($carte == "carte7") AND ($def->getColonne11() == false)){$sql4 = $def->setColonne11('carte7');} else if (($cote == "defausse") AND ($carte == "carte7") AND ($def->getColonne12() == false)){$sql4 = $def->setColonne12('carte7');} else
        if (($cote == "defausse") AND ($carte == "carte7") AND ($def->getColonne13() == false)){$sql4 = $def->setColonne13('carte7');} else if (($cote == "defausse") AND ($carte == "carte7") AND ($def->getColonne14() == false)){$sql4 = $def->setColonne14('carte7');} else
        if (($cote == "defausse") AND ($carte == "carte7") AND ($def->getColonne15() == false)){$sql4 = $def->setColonne15('carte7');} else if (($cote == "defausse") AND ($carte == "carte7") AND ($def->getColonne16() == false)){$sql4 = $def->setColonne16('carte7');} else
        if (($cote == "defausse") AND ($carte == "carte7") AND ($def->getColonne17() == false)){$sql4 = $def->setColonne17('carte7');} else if (($cote == "defausse") AND ($carte == "carte7") AND ($def->getColonne18() == false)){$sql4 = $def->setColonne18('carte7');} else
        if (($cote == "defausse") AND ($carte == "carte7") AND ($def->getColonne19() == false)){$sql4 = $def->setColonne19('carte7');} else if (($cote == "defausse") AND ($carte == "carte7") AND ($def->getColonne110() == false)){$sql4 = $def->setColonne110('carte7');} else
        if (($cote == "defausse") AND ($carte == "carte7") AND ($def->getColonne111() == false)){$sql4 = $def->setColonne111('carte7');} else if (($cote == "defausse") AND ($carte == "carte7") AND ($def->getColonne112() == false)){$sql4 = $def->setColonne112('carte7');} else
        if (($cote == "defausse") AND ($carte == "carte8") AND ($def->getColonne11() == false)){$sql4 = $def->setColonne11('carte8');} else if (($cote == "defausse") AND ($carte == "carte8") AND ($def->getColonne12() == false)){$sql4 = $def->setColonne12('carte8');} else
        if (($cote == "defausse") AND ($carte == "carte8") AND ($def->getColonne13() == false)){$sql4 = $def->setColonne13('carte8');} else if (($cote == "defausse") AND ($carte == "carte8") AND ($def->getColonne14() == false)){$sql4 = $def->setColonne14('carte8');} else
        if (($cote == "defausse") AND ($carte == "carte8") AND ($def->getColonne15() == false)){$sql4 = $def->setColonne15('carte8');} else if (($cote == "defausse") AND ($carte == "carte8") AND ($def->getColonne16() == false)){$sql4 = $def->setColonne16('carte8');} else
        if (($cote == "defausse") AND ($carte == "carte8") AND ($def->getColonne17() == false)){$sql4 = $def->setColonne17('carte8');} else if (($cote == "defausse") AND ($carte == "carte8") AND ($def->getColonne18() == false)){$sql4 = $def->setColonne18('carte8');} else
        if (($cote == "defausse") AND ($carte == "carte8") AND ($def->getColonne19() == false)){$sql4 = $def->setColonne19('carte8');} else if (($cote == "defausse") AND ($carte == "carte8") AND ($def->getColonne110() == false)){$sql4 = $def->setColonne110('carte8');} else
        if (($cote == "defausse") AND ($carte == "carte8") AND ($def->getColonne111() == false)){$sql4 = $def->setColonne111('carte8');} else if (($cote == "defausse") AND ($carte == "carte8") AND ($def->getColonne112() == false)){$sql4 = $def->setColonne112('carte8');} else
        if (($cote == "defausse") AND ($carte == "carte9") AND ($def->getColonne11() == false)){$sql4 = $def->setColonne11('carte9');} else if (($cote == "defausse") AND ($carte == "carte9") AND ($def->getColonne12() == false)){$sql4 = $def->setColonne12('carte9');} else
        if (($cote == "defausse") AND ($carte == "carte9") AND ($def->getColonne13() == false)){$sql4 = $def->setColonne13('carte9');} else if (($cote == "defausse") AND ($carte == "carte9") AND ($def->getColonne14() == false)){$sql4 = $def->setColonne14('carte9');} else
        if (($cote == "defausse") AND ($carte == "carte9") AND ($def->getColonne15() == false)){$sql4 = $def->setColonne15('carte9');} else if (($cote == "defausse") AND ($carte == "carte9") AND ($def->getColonne16() == false)){$sql4 = $def->setColonne16('carte9');} else
        if (($cote == "defausse") AND ($carte == "carte9") AND ($def->getColonne17() == false)){$sql4 = $def->setColonne17('carte9');} else if (($cote == "defausse") AND ($carte == "carte9") AND ($def->getColonne18() == false)){$sql4 = $def->setColonne18('carte9');} else
        if (($cote == "defausse") AND ($carte == "carte9") AND ($def->getColonne19() == false)){$sql4 = $def->setColonne19('carte9');} else if (($cote == "defausse") AND ($carte == "carte9") AND ($def->getColonne110() == false)){$sql4 = $def->setColonne110('carte9');} else
        if (($cote == "defausse") AND ($carte == "carte9") AND ($def->getColonne111() == false)){$sql4 = $def->setColonne111('carte9');} else if (($cote == "defausse") AND ($carte == "carte9") AND ($def->getColonne112() == false)){$sql4 = $def->setColonne112('carte9');} else
        if (($cote == "defausse") AND ($carte == "carte10") AND ($def->getColonne11() == false)){$sql4 = $def->setColonne11('carte10');} else if (($cote == "defausse") AND ($carte == "carte10") AND ($def->getColonne12() == false)){$sql4 = $def->setColonne12('carte10');} else
        if (($cote == "defausse") AND ($carte == "carte10") AND ($def->getColonne13() == false)){$sql4 = $def->setColonne13('carte10');} else if (($cote == "defausse") AND ($carte == "carte10") AND ($def->getColonne14() == false)){$sql4 = $def->setColonne14('carte10');} else
        if (($cote == "defausse") AND ($carte == "carte10") AND ($def->getColonne15() == false)){$sql4 = $def->setColonne15('carte10');} else if (($cote == "defausse") AND ($carte == "carte10") AND ($def->getColonne16() == false)){$sql4 = $def->setColonne16('carte10');} else
        if (($cote == "defausse") AND ($carte == "carte10") AND ($def->getColonne17() == false)){$sql4 = $def->setColonne17('carte10');} else if (($cote == "defausse") AND ($carte == "carte10") AND ($def->getColonne18() == false)){$sql4 = $def->setColonne18('carte10');} else
        if (($cote == "defausse") AND ($carte == "carte10") AND ($def->getColonne19() == false)){$sql4 = $def->setColonne19('carte10');} else if (($cote == "defausse") AND ($carte == "carte10") AND ($def->getColonne110() == false)){$sql4 = $def->setColonne110('carte10');} else
        if (($cote == "defausse") AND ($carte == "carte10") AND ($def->getColonne111() == false)){$sql4 = $def->setColonne111('carte10');} else if (($cote == "defausse") AND ($carte == "carte10") AND ($def->getColonne112() == false)){$sql4 = $def->setColonne112('carte10');} else
        if (($cote == "defausse") AND ($carte == "carte11") AND ($def->getColonne11() == false)){$sql4 = $def->setColonne11('carte11');} else if (($cote == "defausse") AND ($carte == "carte11") AND ($def->getColonne12() == false)){$sql4 = $def->setColonne12('carte11');} else
        if (($cote == "defausse") AND ($carte == "carte11") AND ($def->getColonne13() == false)){$sql4 = $def->setColonne13('carte11');} else if (($cote == "defausse") AND ($carte == "carte11") AND ($def->getColonne14() == false)){$sql4 = $def->setColonne14('carte11');} else
        if (($cote == "defausse") AND ($carte == "carte11") AND ($def->getColonne15() == false)){$sql4 = $def->setColonne15('carte11');} else if (($cote == "defausse") AND ($carte == "carte11") AND ($def->getColonne16() == false)){$sql4 = $def->setColonne16('carte11');} else
        if (($cote == "defausse") AND ($carte == "carte11") AND ($def->getColonne17() == false)){$sql4 = $def->setColonne17('carte11');} else if (($cote == "defausse") AND ($carte == "carte11") AND ($def->getColonne18() == false)){$sql4 = $def->setColonne18('carte11');} else
        if (($cote == "defausse") AND ($carte == "carte11") AND ($def->getColonne19() == false)){$sql4 = $def->setColonne19('carte11');} else if (($cote == "defausse") AND ($carte == "carte11") AND ($def->getColonne110() == false)){$sql4 = $def->setColonne110('carte11');} else
        if (($cote == "defausse") AND ($carte == "carte11") AND ($def->getColonne111() == false)){$sql4 = $def->setColonne111('carte11');} else if (($cote == "defausse") AND ($carte == "carte11") AND ($def->getColonne112() == false)){$sql4 = $def->setColonne112('carte11');} else
        if (($cote == "defausse") AND ($carte == "carte12") AND ($def->getColonne11() == false)){$sql4 = $def->setColonne11('carte12');} else if (($cote == "defausse") AND ($carte == "carte12") AND ($def->getColonne12() == false)){$sql4 = $def->setColonne12('carte12');} else
        if (($cote == "defausse") AND ($carte == "carte12") AND ($def->getColonne13() == false)){$sql4 = $def->setColonne13('carte12');} else if (($cote == "defausse") AND ($carte == "carte12") AND ($def->getColonne14() == false)){$sql4 = $def->setColonne14('carte12');} else
        if (($cote == "defausse") AND ($carte == "carte12") AND ($def->getColonne15() == false)){$sql4 = $def->setColonne15('carte12');} else if (($cote == "defausse") AND ($carte == "carte12") AND ($def->getColonne16() == false)){$sql4 = $def->setColonne16('carte12');} else
        if (($cote == "defausse") AND ($carte == "carte12") AND ($def->getColonne17() == false)){$sql4 = $def->setColonne17('carte12');} else if (($cote == "defausse") AND ($carte == "carte12") AND ($def->getColonne18() == false)){$sql4 = $def->setColonne18('carte12');} else
        if (($cote == "defausse") AND ($carte == "carte12") AND ($def->getColonne19() == false)){$sql4 = $def->setColonne19('carte12');} else if (($cote == "defausse") AND ($carte == "carte12") AND ($def->getColonne110() == false)){$sql4 = $def->setColonne110('carte12');} else
        if (($cote == "defausse") AND ($carte == "carte12") AND ($def->getColonne111() == false)){$sql4 = $def->setColonne111('carte12');} else if (($cote == "defausse") AND ($carte == "carte12") AND ($def->getColonne112() == false)){$sql4 = $def->setColonne112('carte12');} else
        if (($cote == "defausse") AND ($carte == "carte13") AND ($def->getColonne21() == false)){$sql4 = $def->setColonne21('carte13');} else if (($cote == "defausse") AND ($carte == "carte13") AND ($def->getColonne22() == false)){$sql4 = $def->setColonne22('carte13');} else
        if (($cote == "defausse") AND ($carte == "carte13") AND ($def->getColonne23() == false)){$sql4 = $def->setColonne23('carte13');} else if (($cote == "defausse") AND ($carte == "carte13") AND ($def->getColonne24() == false)){$sql4 = $def->setColonne24('carte13');} else
        if (($cote == "defausse") AND ($carte == "carte13") AND ($def->getColonne25() == false)){$sql4 = $def->setColonne25('carte13');} else if (($cote == "defausse") AND ($carte == "carte13") AND ($def->getColonne26() == false)){$sql4 = $def->setColonne26('carte13');} else
        if (($cote == "defausse") AND ($carte == "carte13") AND ($def->getColonne27() == false)){$sql4 = $def->setColonne27('carte13');} else if (($cote == "defausse") AND ($carte == "carte13") AND ($def->getColonne28() == false)){$sql4 = $def->setColonne28('carte13');} else
        if (($cote == "defausse") AND ($carte == "carte13") AND ($def->getColonne29() == false)){$sql4 = $def->setColonne29('carte13');} else if (($cote == "defausse") AND ($carte == "carte13") AND ($def->getColonne210() == false)){$sql4 = $def->setColonne210('carte13');} else
        if (($cote == "defausse") AND ($carte == "carte13") AND ($def->getColonne211() == false)){$sql4 = $def->setColonne211('carte13');} else if (($cote == "defausse") AND ($carte == "carte13") AND ($def->getColonne212() == false)){$sql4 = $def->setColonne212('carte13');} else
        if (($cote == "defausse") AND ($carte == "carte14") AND ($def->getColonne21() == false)){$sql4 = $def->setColonne21('carte14');} else if (($cote == "defausse") AND ($carte == "carte14") AND ($def->getColonne22() == false)){$sql4 = $def->setColonne22('carte14');} else
        if (($cote == "defausse") AND ($carte == "carte14") AND ($def->getColonne23() == false)){$sql4 = $def->setColonne23('carte14');} else if (($cote == "defausse") AND ($carte == "carte14") AND ($def->getColonne24() == false)){$sql4 = $def->setColonne24('carte14');} else
        if (($cote == "defausse") AND ($carte == "carte14") AND ($def->getColonne25() == false)){$sql4 = $def->setColonne25('carte14');} else if (($cote == "defausse") AND ($carte == "carte14") AND ($def->getColonne26() == false)){$sql4 = $def->setColonne26('carte14');} else
        if (($cote == "defausse") AND ($carte == "carte14") AND ($def->getColonne27() == false)){$sql4 = $def->setColonne27('carte14');} else if (($cote == "defausse") AND ($carte == "carte14") AND ($def->getColonne28() == false)){$sql4 = $def->setColonne28('carte14');} else
        if (($cote == "defausse") AND ($carte == "carte14") AND ($def->getColonne29() == false)){$sql4 = $def->setColonne29('carte14');} else if (($cote == "defausse") AND ($carte == "carte14") AND ($def->getColonne210() == false)){$sql4 = $def->setColonne210('carte14');} else
        if (($cote == "defausse") AND ($carte == "carte14") AND ($def->getColonne211() == false)){$sql4 = $def->setColonne211('carte14');} else if (($cote == "defausse") AND ($carte == "carte14") AND ($def->getColonne212() == false)){$sql4 = $def->setColonne212('carte14');} else
        if (($cote == "defausse") AND ($carte == "carte15") AND ($def->getColonne21() == false)){$sql4 = $def->setColonne21('carte15');} else if (($cote == "defausse") AND ($carte == "carte15") AND ($def->getColonne22() == false)){$sql4 = $def->setColonne22('carte15');} else
        if (($cote == "defausse") AND ($carte == "carte15") AND ($def->getColonne23() == false)){$sql4 = $def->setColonne23('carte15');} else if (($cote == "defausse") AND ($carte == "carte15") AND ($def->getColonne24() == false)){$sql4 = $def->setColonne24('carte15');} else
        if (($cote == "defausse") AND ($carte == "carte15") AND ($def->getColonne25() == false)){$sql4 = $def->setColonne25('carte15');} else if (($cote == "defausse") AND ($carte == "carte15") AND ($def->getColonne26() == false)){$sql4 = $def->setColonne26('carte15');} else
        if (($cote == "defausse") AND ($carte == "carte15") AND ($def->getColonne27() == false)){$sql4 = $def->setColonne27('carte15');} else if (($cote == "defausse") AND ($carte == "carte15") AND ($def->getColonne28() == false)){$sql4 = $def->setColonne28('carte15');} else
        if (($cote == "defausse") AND ($carte == "carte15") AND ($def->getColonne29() == false)){$sql4 = $def->setColonne29('carte15');} else if (($cote == "defausse") AND ($carte == "carte15") AND ($def->getColonne210() == false)){$sql4 = $def->setColonne210('carte15');} else
        if (($cote == "defausse") AND ($carte == "carte15") AND ($def->getColonne211() == false)){$sql4 = $def->setColonne211('carte15');} else if (($cote == "defausse") AND ($carte == "carte15") AND ($def->getColonne212() == false)){$sql4 = $def->setColonne212('carte15');} else
        if (($cote == "defausse") AND ($carte == "carte16") AND ($def->getColonne21() == false)){$sql4 = $def->setColonne21('carte16');} else if (($cote == "defausse") AND ($carte == "carte16") AND ($def->getColonne22() == false)){$sql4 = $def->setColonne22('carte16');} else
        if (($cote == "defausse") AND ($carte == "carte16") AND ($def->getColonne23() == false)){$sql4 = $def->setColonne23('carte16');} else if (($cote == "defausse") AND ($carte == "carte16") AND ($def->getColonne24() == false)){$sql4 = $def->setColonne24('carte16');} else
        if (($cote == "defausse") AND ($carte == "carte16") AND ($def->getColonne25() == false)){$sql4 = $def->setColonne25('carte16');} else if (($cote == "defausse") AND ($carte == "carte16") AND ($def->getColonne26() == false)){$sql4 = $def->setColonne26('carte16');} else
        if (($cote == "defausse") AND ($carte == "carte16") AND ($def->getColonne27() == false)){$sql4 = $def->setColonne27('carte16');} else if (($cote == "defausse") AND ($carte == "carte16") AND ($def->getColonne28() == false)){$sql4 = $def->setColonne28('carte16');} else
        if (($cote == "defausse") AND ($carte == "carte16") AND ($def->getColonne29() == false)){$sql4 = $def->setColonne29('carte16');} else if (($cote == "defausse") AND ($carte == "carte16") AND ($def->getColonne210() == false)){$sql4 = $def->setColonne210('carte16');} else
        if (($cote == "defausse") AND ($carte == "carte16") AND ($def->getColonne211() == false)){$sql4 = $def->setColonne211('carte16');} else if (($cote == "defausse") AND ($carte == "carte16") AND ($def->getColonne212() == false)){$sql4 = $def->setColonne212('carte16');} else
        if (($cote == "defausse") AND ($carte == "carte17") AND ($def->getColonne21() == false)){$sql4 = $def->setColonne21('carte17');} else if (($cote == "defausse") AND ($carte == "carte17") AND ($def->getColonne22() == false)){$sql4 = $def->setColonne22('carte17');} else
        if (($cote == "defausse") AND ($carte == "carte17") AND ($def->getColonne23() == false)){$sql4 = $def->setColonne23('carte17');} else if (($cote == "defausse") AND ($carte == "carte17") AND ($def->getColonne24() == false)){$sql4 = $def->setColonne24('carte17');} else
        if (($cote == "defausse") AND ($carte == "carte17") AND ($def->getColonne25() == false)){$sql4 = $def->setColonne25('carte17');} else if (($cote == "defausse") AND ($carte == "carte17") AND ($def->getColonne26() == false)){$sql4 = $def->setColonne26('carte17');} else
        if (($cote == "defausse") AND ($carte == "carte17") AND ($def->getColonne27() == false)){$sql4 = $def->setColonne27('carte17');} else if (($cote == "defausse") AND ($carte == "carte17") AND ($def->getColonne28() == false)){$sql4 = $def->setColonne28('carte17');} else
        if (($cote == "defausse") AND ($carte == "carte17") AND ($def->getColonne29() == false)){$sql4 = $def->setColonne29('carte17');} else if (($cote == "defausse") AND ($carte == "carte17") AND ($def->getColonne210() == false)){$sql4 = $def->setColonne210('carte17');} else
        if (($cote == "defausse") AND ($carte == "carte17") AND ($def->getColonne211() == false)){$sql4 = $def->setColonne211('carte17');} else if (($cote == "defausse") AND ($carte == "carte17") AND ($def->getColonne212() == false)){$sql4 = $def->setColonne212('carte17');} else
        if (($cote == "defausse") AND ($carte == "carte18") AND ($def->getColonne21() == false)){$sql4 = $def->setColonne21('carte18');} else if (($cote == "defausse") AND ($carte == "carte18") AND ($def->getColonne22() == false)){$sql4 = $def->setColonne22('carte18');} else
        if (($cote == "defausse") AND ($carte == "carte18") AND ($def->getColonne23() == false)){$sql4 = $def->setColonne23('carte18');} else if (($cote == "defausse") AND ($carte == "carte18") AND ($def->getColonne24() == false)){$sql4 = $def->setColonne24('carte18');} else
        if (($cote == "defausse") AND ($carte == "carte18") AND ($def->getColonne25() == false)){$sql4 = $def->setColonne25('carte18');} else if (($cote == "defausse") AND ($carte == "carte18") AND ($def->getColonne26() == false)){$sql4 = $def->setColonne26('carte18');} else
        if (($cote == "defausse") AND ($carte == "carte18") AND ($def->getColonne27() == false)){$sql4 = $def->setColonne27('carte18');} else if (($cote == "defausse") AND ($carte == "carte18") AND ($def->getColonne28() == false)){$sql4 = $def->setColonne28('carte18');} else
        if (($cote == "defausse") AND ($carte == "carte18") AND ($def->getColonne29() == false)){$sql4 = $def->setColonne29('carte18');} else if (($cote == "defausse") AND ($carte == "carte18") AND ($def->getColonne210() == false)){$sql4 = $def->setColonne210('carte18');} else
        if (($cote == "defausse") AND ($carte == "carte18") AND ($def->getColonne211() == false)){$sql4 = $def->setColonne211('carte18');} else if (($cote == "defausse") AND ($carte == "carte18") AND ($def->getColonne212() == false)){$sql4 = $def->setColonne212('carte18');} else
        if (($cote == "defausse") AND ($carte == "carte19") AND ($def->getColonne21() == false)){$sql4 = $def->setColonne21('carte19');} else if (($cote == "defausse") AND ($carte == "carte19") AND ($def->getColonne22() == false)){$sql4 = $def->setColonne22('carte19');} else
        if (($cote == "defausse") AND ($carte == "carte19") AND ($def->getColonne23() == false)){$sql4 = $def->setColonne23('carte19');} else if (($cote == "defausse") AND ($carte == "carte19") AND ($def->getColonne24() == false)){$sql4 = $def->setColonne24('carte19');} else
        if (($cote == "defausse") AND ($carte == "carte19") AND ($def->getColonne25() == false)){$sql4 = $def->setColonne25('carte19');} else if (($cote == "defausse") AND ($carte == "carte19") AND ($def->getColonne26() == false)){$sql4 = $def->setColonne26('carte19');} else
        if (($cote == "defausse") AND ($carte == "carte19") AND ($def->getColonne27() == false)){$sql4 = $def->setColonne27('carte19');} else if (($cote == "defausse") AND ($carte == "carte19") AND ($def->getColonne28() == false)){$sql4 = $def->setColonne28('carte19');} else
        if (($cote == "defausse") AND ($carte == "carte19") AND ($def->getColonne29() == false)){$sql4 = $def->setColonne29('carte19');} else if (($cote == "defausse") AND ($carte == "carte19") AND ($def->getColonne210() == false)){$sql4 = $def->setColonne210('carte19');} else
        if (($cote == "defausse") AND ($carte == "carte19") AND ($def->getColonne211() == false)){$sql4 = $def->setColonne211('carte19');} else if (($cote == "defausse") AND ($carte == "carte19") AND ($def->getColonne212() == false)){$sql4 = $def->setColonne212('carte19');} else
        if (($cote == "defausse") AND ($carte == "carte20") AND ($def->getColonne21() == false)){$sql4 = $def->setColonne21('carte20');} else if (($cote == "defausse") AND ($carte == "carte20") AND ($def->getColonne22() == false)){$sql4 = $def->setColonne22('carte20');} else
        if (($cote == "defausse") AND ($carte == "carte20") AND ($def->getColonne23() == false)){$sql4 = $def->setColonne23('carte20');} else if (($cote == "defausse") AND ($carte == "carte20") AND ($def->getColonne24() == false)){$sql4 = $def->setColonne24('carte20');} else
        if (($cote == "defausse") AND ($carte == "carte20") AND ($def->getColonne25() == false)){$sql4 = $def->setColonne25('carte20');} else if (($cote == "defausse") AND ($carte == "carte20") AND ($def->getColonne26() == false)){$sql4 = $def->setColonne26('carte20');} else
        if (($cote == "defausse") AND ($carte == "carte20") AND ($def->getColonne27() == false)){$sql4 = $def->setColonne27('carte20');} else if (($cote == "defausse") AND ($carte == "carte20") AND ($def->getColonne28() == false)){$sql4 = $def->setColonne28('carte20');} else
        if (($cote == "defausse") AND ($carte == "carte20") AND ($def->getColonne29() == false)){$sql4 = $def->setColonne29('carte20');} else if (($cote == "defausse") AND ($carte == "carte20") AND ($def->getColonne210() == false)){$sql4 = $def->setColonne210('carte20');} else
        if (($cote == "defausse") AND ($carte == "carte20") AND ($def->getColonne211() == false)){$sql4 = $def->setColonne211('carte20');} else if (($cote == "defausse") AND ($carte == "carte20") AND ($def->getColonne212() == false)){$sql4 = $def->setColonne212('carte20');} else
        if (($cote == "defausse") AND ($carte == "carte21") AND ($def->getColonne21() == false)){$sql4 = $def->setColonne21('carte21');} else if (($cote == "defausse") AND ($carte == "carte21") AND ($def->getColonne22() == false)){$sql4 = $def->setColonne22('carte21');} else
        if (($cote == "defausse") AND ($carte == "carte21") AND ($def->getColonne23() == false)){$sql4 = $def->setColonne23('carte21');} else if (($cote == "defausse") AND ($carte == "carte21") AND ($def->getColonne24() == false)){$sql4 = $def->setColonne24('carte21');} else
        if (($cote == "defausse") AND ($carte == "carte21") AND ($def->getColonne25() == false)){$sql4 = $def->setColonne25('carte21');} else if (($cote == "defausse") AND ($carte == "carte21") AND ($def->getColonne26() == false)){$sql4 = $def->setColonne26('carte21');} else
        if (($cote == "defausse") AND ($carte == "carte21") AND ($def->getColonne27() == false)){$sql4 = $def->setColonne27('carte21');} else if (($cote == "defausse") AND ($carte == "carte21") AND ($def->getColonne28() == false)){$sql4 = $def->setColonne28('carte21');} else
        if (($cote == "defausse") AND ($carte == "carte21") AND ($def->getColonne29() == false)){$sql4 = $def->setColonne29('carte21');} else if (($cote == "defausse") AND ($carte == "carte21") AND ($def->getColonne210() == false)){$sql4 = $def->setColonne210('carte21');} else
        if (($cote == "defausse") AND ($carte == "carte21") AND ($def->getColonne211() == false)){$sql4 = $def->setColonne211('carte21');} else if (($cote == "defausse") AND ($carte == "carte21") AND ($def->getColonne212() == false)){$sql4 = $def->setColonne212('carte21');} else
        if (($cote == "defausse") AND ($carte == "carte22") AND ($def->getColonne21() == false)){$sql4 = $def->setColonne21('carte22');} else if (($cote == "defausse") AND ($carte == "carte22") AND ($def->getColonne22() == false)){$sql4 = $def->setColonne22('carte22');} else
        if (($cote == "defausse") AND ($carte == "carte22") AND ($def->getColonne23() == false)){$sql4 = $def->setColonne23('carte22');} else if (($cote == "defausse") AND ($carte == "carte22") AND ($def->getColonne24() == false)){$sql4 = $def->setColonne24('carte22');} else
        if (($cote == "defausse") AND ($carte == "carte22") AND ($def->getColonne25() == false)){$sql4 = $def->setColonne25('carte22');} else if (($cote == "defausse") AND ($carte == "carte22") AND ($def->getColonne26() == false)){$sql4 = $def->setColonne26('carte22');} else
        if (($cote == "defausse") AND ($carte == "carte22") AND ($def->getColonne27() == false)){$sql4 = $def->setColonne27('carte22');} else if (($cote == "defausse") AND ($carte == "carte22") AND ($def->getColonne28() == false)){$sql4 = $def->setColonne28('carte22');} else
        if (($cote == "defausse") AND ($carte == "carte22") AND ($def->getColonne29() == false)){$sql4 = $def->setColonne29('carte22');} else if (($cote == "defausse") AND ($carte == "carte22") AND ($def->getColonne210() == false)){$sql4 = $def->setColonne210('carte22');} else
        if (($cote == "defausse") AND ($carte == "carte22") AND ($def->getColonne211() == false)){$sql4 = $def->setColonne211('carte22');} else if (($cote == "defausse") AND ($carte == "carte22") AND ($def->getColonne212() == false)){$sql4 = $def->setColonne212('carte22');} else
        if (($cote == "defausse") AND ($carte == "carte23") AND ($def->getColonne21() == false)){$sql4 = $def->setColonne21('carte23');} else if (($cote == "defausse") AND ($carte == "carte23") AND ($def->getColonne22() == false)){$sql4 = $def->setColonne22('carte23');} else
        if (($cote == "defausse") AND ($carte == "carte23") AND ($def->getColonne23() == false)){$sql4 = $def->setColonne23('carte23');} else if (($cote == "defausse") AND ($carte == "carte23") AND ($def->getColonne24() == false)){$sql4 = $def->setColonne24('carte23');} else
        if (($cote == "defausse") AND ($carte == "carte23") AND ($def->getColonne25() == false)){$sql4 = $def->setColonne25('carte23');} else if (($cote == "defausse") AND ($carte == "carte23") AND ($def->getColonne26() == false)){$sql4 = $def->setColonne26('carte23');} else
        if (($cote == "defausse") AND ($carte == "carte23") AND ($def->getColonne27() == false)){$sql4 = $def->setColonne27('carte23');} else if (($cote == "defausse") AND ($carte == "carte23") AND ($def->getColonne28() == false)){$sql4 = $def->setColonne28('carte23');} else
        if (($cote == "defausse") AND ($carte == "carte23") AND ($def->getColonne29() == false)){$sql4 = $def->setColonne29('carte23');} else if (($cote == "defausse") AND ($carte == "carte23") AND ($def->getColonne210() == false)){$sql4 = $def->setColonne210('carte23');} else
        if (($cote == "defausse") AND ($carte == "carte23") AND ($def->getColonne211() == false)){$sql4 = $def->setColonne211('carte23');} else if (($cote == "defausse") AND ($carte == "carte23") AND ($def->getColonne212() == false)){$sql4 = $def->setColonne212('carte23');} else
        if (($cote == "defausse") AND ($carte == "carte24") AND ($def->getColonne21() == false)){$sql4 = $def->setColonne21('carte24');} else if (($cote == "defausse") AND ($carte == "carte24") AND ($def->getColonne22() == false)){$sql4 = $def->setColonne22('carte24');} else
        if (($cote == "defausse") AND ($carte == "carte24") AND ($def->getColonne23() == false)){$sql4 = $def->setColonne23('carte24');} else if (($cote == "defausse") AND ($carte == "carte24") AND ($def->getColonne24() == false)){$sql4 = $def->setColonne24('carte24');} else
        if (($cote == "defausse") AND ($carte == "carte24") AND ($def->getColonne25() == false)){$sql4 = $def->setColonne25('carte24');} else if (($cote == "defausse") AND ($carte == "carte24") AND ($def->getColonne26() == false)){$sql4 = $def->setColonne26('carte24');} else
        if (($cote == "defausse") AND ($carte == "carte24") AND ($def->getColonne27() == false)){$sql4 = $def->setColonne27('carte24');} else if (($cote == "defausse") AND ($carte == "carte24") AND ($def->getColonne28() == false)){$sql4 = $def->setColonne28('carte24');} else
        if (($cote == "defausse") AND ($carte == "carte24") AND ($def->getColonne29() == false)){$sql4 = $def->setColonne29('carte24');} else if (($cote == "defausse") AND ($carte == "carte24") AND ($def->getColonne210() == false)){$sql4 = $def->setColonne210('carte24');} else
        if (($cote == "defausse") AND ($carte == "carte24") AND ($def->getColonne211() == false)){$sql4 = $def->setColonne211('carte24');} else if (($cote == "defausse") AND ($carte == "carte24") AND ($def->getColonne212() == false)){$sql4 = $def->setColonne212('carte24');} else
        if (($cote == "defausse") AND ($carte == "carte25") AND ($def->getColonne31() == false)){$sql4 = $def->setColonne31('carte25');} else if (($cote == "defausse") AND ($carte == "carte25") AND ($def->getColonne32() == false)){$sql4 = $def->setColonne32('carte25');} else
        if (($cote == "defausse") AND ($carte == "carte25") AND ($def->getColonne33() == false)){$sql4 = $def->setColonne33('carte25');} else if (($cote == "defausse") AND ($carte == "carte25") AND ($def->getColonne34() == false)){$sql4 = $def->setColonne34('carte25');} else
        if (($cote == "defausse") AND ($carte == "carte25") AND ($def->getColonne35() == false)){$sql4 = $def->setColonne35('carte25');} else if (($cote == "defausse") AND ($carte == "carte25") AND ($def->getColonne36() == false)){$sql4 = $def->setColonne36('carte25');} else
        if (($cote == "defausse") AND ($carte == "carte25") AND ($def->getColonne37() == false)){$sql4 = $def->setColonne37('carte25');} else if (($cote == "defausse") AND ($carte == "carte25") AND ($def->getColonne38() == false)){$sql4 = $def->setColonne38('carte25');} else
        if (($cote == "defausse") AND ($carte == "carte25") AND ($def->getColonne39() == false)){$sql4 = $def->setColonne39('carte25');} else if (($cote == "defausse") AND ($carte == "carte25") AND ($def->getColonne310() == false)){$sql4 = $def->setColonne310('carte25');} else
        if (($cote == "defausse") AND ($carte == "carte25") AND ($def->getColonne311() == false)){$sql4 = $def->setColonne311('carte25');} else if (($cote == "defausse") AND ($carte == "carte25") AND ($def->getColonne312() == false)){$sql4 = $def->setColonne312('carte25');} else
        if (($cote == "defausse") AND ($carte == "carte26") AND ($def->getColonne31() == false)){$sql4 = $def->setColonne31('carte26');} else if (($cote == "defausse") AND ($carte == "carte26") AND ($def->getColonne32() == false)){$sql4 = $def->setColonne32('carte26');} else
        if (($cote == "defausse") AND ($carte == "carte26") AND ($def->getColonne33() == false)){$sql4 = $def->setColonne33('carte26');} else if (($cote == "defausse") AND ($carte == "carte26") AND ($def->getColonne34() == false)){$sql4 = $def->setColonne34('carte26');} else
        if (($cote == "defausse") AND ($carte == "carte26") AND ($def->getColonne35() == false)){$sql4 = $def->setColonne35('carte26');} else if (($cote == "defausse") AND ($carte == "carte26") AND ($def->getColonne36() == false)){$sql4 = $def->setColonne36('carte26');} else
        if (($cote == "defausse") AND ($carte == "carte26") AND ($def->getColonne37() == false)){$sql4 = $def->setColonne37('carte26');} else if (($cote == "defausse") AND ($carte == "carte26") AND ($def->getColonne38() == false)){$sql4 = $def->setColonne38('carte26');} else
        if (($cote == "defausse") AND ($carte == "carte26") AND ($def->getColonne39() == false)){$sql4 = $def->setColonne39('carte26');} else if (($cote == "defausse") AND ($carte == "carte26") AND ($def->getColonne310() == false)){$sql4 = $def->setColonne310('carte26');} else
        if (($cote == "defausse") AND ($carte == "carte26") AND ($def->getColonne311() == false)){$sql4 = $def->setColonne311('carte26');} else if (($cote == "defausse") AND ($carte == "carte26") AND ($def->getColonne312() == false)){$sql4 = $def->setColonne312('carte26');} else
        if (($cote == "defausse") AND ($carte == "carte27") AND ($def->getColonne31() == false)){$sql4 = $def->setColonne31('carte27');} else if (($cote == "defausse") AND ($carte == "carte27") AND ($def->getColonne32() == false)){$sql4 = $def->setColonne32('carte27');} else
        if (($cote == "defausse") AND ($carte == "carte27") AND ($def->getColonne33() == false)){$sql4 = $def->setColonne33('carte27');} else if (($cote == "defausse") AND ($carte == "carte27") AND ($def->getColonne34() == false)){$sql4 = $def->setColonne34('carte27');} else
        if (($cote == "defausse") AND ($carte == "carte27") AND ($def->getColonne35() == false)){$sql4 = $def->setColonne35('carte27');} else if (($cote == "defausse") AND ($carte == "carte27") AND ($def->getColonne36() == false)){$sql4 = $def->setColonne36('carte27');} else
        if (($cote == "defausse") AND ($carte == "carte27") AND ($def->getColonne37() == false)){$sql4 = $def->setColonne37('carte27');} else if (($cote == "defausse") AND ($carte == "carte27") AND ($def->getColonne38() == false)){$sql4 = $def->setColonne38('carte27');} else
        if (($cote == "defausse") AND ($carte == "carte27") AND ($def->getColonne39() == false)){$sql4 = $def->setColonne39('carte27');} else if (($cote == "defausse") AND ($carte == "carte27") AND ($def->getColonne310() == false)){$sql4 = $def->setColonne310('carte27');} else
        if (($cote == "defausse") AND ($carte == "carte27") AND ($def->getColonne311() == false)){$sql4 = $def->setColonne311('carte27');} else if (($cote == "defausse") AND ($carte == "carte27") AND ($def->getColonne312() == false)){$sql4 = $def->setColonne312('carte27');} else
        if (($cote == "defausse") AND ($carte == "carte28") AND ($def->getColonne31() == false)){$sql4 = $def->setColonne31('carte28');} else if (($cote == "defausse") AND ($carte == "carte28") AND ($def->getColonne32() == false)){$sql4 = $def->setColonne32('carte28');} else
        if (($cote == "defausse") AND ($carte == "carte28") AND ($def->getColonne33() == false)){$sql4 = $def->setColonne33('carte28');} else if (($cote == "defausse") AND ($carte == "carte28") AND ($def->getColonne34() == false)){$sql4 = $def->setColonne34('carte28');} else
        if (($cote == "defausse") AND ($carte == "carte28") AND ($def->getColonne35() == false)){$sql4 = $def->setColonne35('carte28');} else if (($cote == "defausse") AND ($carte == "carte28") AND ($def->getColonne36() == false)){$sql4 = $def->setColonne36('carte28');} else
        if (($cote == "defausse") AND ($carte == "carte28") AND ($def->getColonne37() == false)){$sql4 = $def->setColonne37('carte28');} else if (($cote == "defausse") AND ($carte == "carte28") AND ($def->getColonne38() == false)){$sql4 = $def->setColonne38('carte28');} else
        if (($cote == "defausse") AND ($carte == "carte28") AND ($def->getColonne39() == false)){$sql4 = $def->setColonne39('carte28');} else if (($cote == "defausse") AND ($carte == "carte28") AND ($def->getColonne310() == false)){$sql4 = $def->setColonne310('carte28');} else
        if (($cote == "defausse") AND ($carte == "carte28") AND ($def->getColonne311() == false)){$sql4 = $def->setColonne311('carte28');} else if (($cote == "defausse") AND ($carte == "carte28") AND ($def->getColonne312() == false)){$sql4 = $def->setColonne312('carte28');} else
        if (($cote == "defausse") AND ($carte == "carte29") AND ($def->getColonne31() == false)){$sql4 = $def->setColonne31('carte29');} else if (($cote == "defausse") AND ($carte == "carte29") AND ($def->getColonne32() == false)){$sql4 = $def->setColonne32('carte29');} else
        if (($cote == "defausse") AND ($carte == "carte29") AND ($def->getColonne33() == false)){$sql4 = $def->setColonne33('carte29');} else if (($cote == "defausse") AND ($carte == "carte29") AND ($def->getColonne34() == false)){$sql4 = $def->setColonne34('carte29');} else
        if (($cote == "defausse") AND ($carte == "carte29") AND ($def->getColonne35() == false)){$sql4 = $def->setColonne35('carte29');} else if (($cote == "defausse") AND ($carte == "carte29") AND ($def->getColonne36() == false)){$sql4 = $def->setColonne36('carte29');} else
        if (($cote == "defausse") AND ($carte == "carte29") AND ($def->getColonne37() == false)){$sql4 = $def->setColonne37('carte29');} else if (($cote == "defausse") AND ($carte == "carte29") AND ($def->getColonne38() == false)){$sql4 = $def->setColonne38('carte29');} else
        if (($cote == "defausse") AND ($carte == "carte29") AND ($def->getColonne39() == false)){$sql4 = $def->setColonne39('carte29');} else if (($cote == "defausse") AND ($carte == "carte29") AND ($def->getColonne310() == false)){$sql4 = $def->setColonne310('carte29');} else
        if (($cote == "defausse") AND ($carte == "carte29") AND ($def->getColonne311() == false)){$sql4 = $def->setColonne311('carte29');} else if (($cote == "defausse") AND ($carte == "carte29") AND ($def->getColonne312() == false)){$sql4 = $def->setColonne312('carte29');} else
        if (($cote == "defausse") AND ($carte == "carte30") AND ($def->getColonne31() == false)){$sql4 = $def->setColonne31('carte30');} else if (($cote == "defausse") AND ($carte == "carte30") AND ($def->getColonne32() == false)){$sql4 = $def->setColonne32('carte30');} else
        if (($cote == "defausse") AND ($carte == "carte30") AND ($def->getColonne33() == false)){$sql4 = $def->setColonne33('carte30');} else if (($cote == "defausse") AND ($carte == "carte30") AND ($def->getColonne34() == false)){$sql4 = $def->setColonne34('carte30');} else
        if (($cote == "defausse") AND ($carte == "carte30") AND ($def->getColonne35() == false)){$sql4 = $def->setColonne35('carte30');} else if (($cote == "defausse") AND ($carte == "carte30") AND ($def->getColonne36() == false)){$sql4 = $def->setColonne36('carte30');} else
        if (($cote == "defausse") AND ($carte == "carte30") AND ($def->getColonne37() == false)){$sql4 = $def->setColonne37('carte30');} else if (($cote == "defausse") AND ($carte == "carte30") AND ($def->getColonne38() == false)){$sql4 = $def->setColonne38('carte30');} else
        if (($cote == "defausse") AND ($carte == "carte30") AND ($def->getColonne39() == false)){$sql4 = $def->setColonne39('carte30');} else if (($cote == "defausse") AND ($carte == "carte30") AND ($def->getColonne310() == false)){$sql4 = $def->setColonne310('carte30');} else
        if (($cote == "defausse") AND ($carte == "carte30") AND ($def->getColonne311() == false)){$sql4 = $def->setColonne311('carte30');} else if (($cote == "defausse") AND ($carte == "carte30") AND ($def->getColonne312() == false)){$sql4 = $def->setColonne312('carte30');} else
        if (($cote == "defausse") AND ($carte == "carte31") AND ($def->getColonne31() == false)){$sql4 = $def->setColonne31('carte31');} else if (($cote == "defausse") AND ($carte == "carte31") AND ($def->getColonne32() == false)){$sql4 = $def->setColonne32('carte31');} else
        if (($cote == "defausse") AND ($carte == "carte31") AND ($def->getColonne33() == false)){$sql4 = $def->setColonne33('carte31');} else if (($cote == "defausse") AND ($carte == "carte31") AND ($def->getColonne34() == false)){$sql4 = $def->setColonne34('carte31');} else
        if (($cote == "defausse") AND ($carte == "carte31") AND ($def->getColonne35() == false)){$sql4 = $def->setColonne35('carte31');} else if (($cote == "defausse") AND ($carte == "carte31") AND ($def->getColonne36() == false)){$sql4 = $def->setColonne36('carte31');} else
        if (($cote == "defausse") AND ($carte == "carte31") AND ($def->getColonne37() == false)){$sql4 = $def->setColonne37('carte31');} else if (($cote == "defausse") AND ($carte == "carte31") AND ($def->getColonne38() == false)){$sql4 = $def->setColonne38('carte31');} else
        if (($cote == "defausse") AND ($carte == "carte31") AND ($def->getColonne39() == false)){$sql4 = $def->setColonne39('carte31');} else if (($cote == "defausse") AND ($carte == "carte31") AND ($def->getColonne310() == false)){$sql4 = $def->setColonne310('carte31');} else
        if (($cote == "defausse") AND ($carte == "carte31") AND ($def->getColonne311() == false)){$sql4 = $def->setColonne311('carte31');} else if (($cote == "defausse") AND ($carte == "carte31") AND ($def->getColonne312() == false)){$sql4 = $def->setColonne312('carte31');} else
        if (($cote == "defausse") AND ($carte == "carte32") AND ($def->getColonne31() == false)){$sql4 = $def->setColonne31('carte32');} else if (($cote == "defausse") AND ($carte == "carte32") AND ($def->getColonne32() == false)){$sql4 = $def->setColonne32('carte32');} else
        if (($cote == "defausse") AND ($carte == "carte32") AND ($def->getColonne33() == false)){$sql4 = $def->setColonne33('carte32');} else if (($cote == "defausse") AND ($carte == "carte32") AND ($def->getColonne34() == false)){$sql4 = $def->setColonne34('carte32');} else
        if (($cote == "defausse") AND ($carte == "carte32") AND ($def->getColonne35() == false)){$sql4 = $def->setColonne35('carte32');} else if (($cote == "defausse") AND ($carte == "carte32") AND ($def->getColonne36() == false)){$sql4 = $def->setColonne36('carte32');} else
        if (($cote == "defausse") AND ($carte == "carte32") AND ($def->getColonne37() == false)){$sql4 = $def->setColonne37('carte32');} else if (($cote == "defausse") AND ($carte == "carte32") AND ($def->getColonne38() == false)){$sql4 = $def->setColonne38('carte32');} else
        if (($cote == "defausse") AND ($carte == "carte32") AND ($def->getColonne39() == false)){$sql4 = $def->setColonne39('carte32');} else if (($cote == "defausse") AND ($carte == "carte32") AND ($def->getColonne310() == false)){$sql4 = $def->setColonne310('carte32');} else
        if (($cote == "defausse") AND ($carte == "carte32") AND ($def->getColonne311() == false)){$sql4 = $def->setColonne311('carte32');} else if (($cote == "defausse") AND ($carte == "carte32") AND ($def->getColonne312() == false)){$sql4 = $def->setColonne312('carte32');} else
        if (($cote == "defausse") AND ($carte == "carte33") AND ($def->getColonne31() == false)){$sql4 = $def->setColonne31('carte33');} else if (($cote == "defausse") AND ($carte == "carte33") AND ($def->getColonne32() == false)){$sql4 = $def->setColonne32('carte33');} else
        if (($cote == "defausse") AND ($carte == "carte33") AND ($def->getColonne33() == false)){$sql4 = $def->setColonne33('carte33');} else if (($cote == "defausse") AND ($carte == "carte33") AND ($def->getColonne34() == false)){$sql4 = $def->setColonne34('carte33');} else
        if (($cote == "defausse") AND ($carte == "carte33") AND ($def->getColonne35() == false)){$sql4 = $def->setColonne35('carte33');} else if (($cote == "defausse") AND ($carte == "carte33") AND ($def->getColonne36() == false)){$sql4 = $def->setColonne36('carte33');} else
        if (($cote == "defausse") AND ($carte == "carte33") AND ($def->getColonne37() == false)){$sql4 = $def->setColonne37('carte33');} else if (($cote == "defausse") AND ($carte == "carte33") AND ($def->getColonne38() == false)){$sql4 = $def->setColonne38('carte33');} else
        if (($cote == "defausse") AND ($carte == "carte33") AND ($def->getColonne39() == false)){$sql4 = $def->setColonne39('carte33');} else if (($cote == "defausse") AND ($carte == "carte33") AND ($def->getColonne310() == false)){$sql4 = $def->setColonne310('carte33');} else
        if (($cote == "defausse") AND ($carte == "carte33") AND ($def->getColonne311() == false)){$sql4 = $def->setColonne311('carte33');} else if (($cote == "defausse") AND ($carte == "carte33") AND ($def->getColonne312() == false)){$sql4 = $def->setColonne312('carte33');} else
        if (($cote == "defausse") AND ($carte == "carte34") AND ($def->getColonne31() == false)){$sql4 = $def->setColonne31('carte34');} else if (($cote == "defausse") AND ($carte == "carte34") AND ($def->getColonne32() == false)){$sql4 = $def->setColonne32('carte34');} else
        if (($cote == "defausse") AND ($carte == "carte34") AND ($def->getColonne33() == false)){$sql4 = $def->setColonne33('carte34');} else if (($cote == "defausse") AND ($carte == "carte34") AND ($def->getColonne34() == false)){$sql4 = $def->setColonne34('carte34');} else
        if (($cote == "defausse") AND ($carte == "carte34") AND ($def->getColonne35() == false)){$sql4 = $def->setColonne35('carte34');} else if (($cote == "defausse") AND ($carte == "carte34") AND ($def->getColonne36() == false)){$sql4 = $def->setColonne36('carte34');} else
        if (($cote == "defausse") AND ($carte == "carte34") AND ($def->getColonne37() == false)){$sql4 = $def->setColonne37('carte34');} else if (($cote == "defausse") AND ($carte == "carte34") AND ($def->getColonne38() == false)){$sql4 = $def->setColonne38('carte34');} else
        if (($cote == "defausse") AND ($carte == "carte34") AND ($def->getColonne39() == false)){$sql4 = $def->setColonne39('carte34');} else if (($cote == "defausse") AND ($carte == "carte34") AND ($def->getColonne310() == false)){$sql4 = $def->setColonne310('carte34');} else
        if (($cote == "defausse") AND ($carte == "carte34") AND ($def->getColonne311() == false)){$sql4 = $def->setColonne311('carte34');} else if (($cote == "defausse") AND ($carte == "carte34") AND ($def->getColonne312() == false)){$sql4 = $def->setColonne312('carte34');} else
        if (($cote == "defausse") AND ($carte == "carte35") AND ($def->getColonne31() == false)){$sql4 = $def->setColonne31('carte35');} else if (($cote == "defausse") AND ($carte == "carte35") AND ($def->getColonne32() == false)){$sql4 = $def->setColonne32('carte35');} else
        if (($cote == "defausse") AND ($carte == "carte35") AND ($def->getColonne33() == false)){$sql4 = $def->setColonne33('carte35');} else if (($cote == "defausse") AND ($carte == "carte35") AND ($def->getColonne34() == false)){$sql4 = $def->setColonne34('carte35');} else
        if (($cote == "defausse") AND ($carte == "carte35") AND ($def->getColonne35() == false)){$sql4 = $def->setColonne35('carte35');} else if (($cote == "defausse") AND ($carte == "carte35") AND ($def->getColonne36() == false)){$sql4 = $def->setColonne36('carte35');} else
        if (($cote == "defausse") AND ($carte == "carte35") AND ($def->getColonne37() == false)){$sql4 = $def->setColonne37('carte35');} else if (($cote == "defausse") AND ($carte == "carte35") AND ($def->getColonne38() == false)){$sql4 = $def->setColonne38('carte35');} else
        if (($cote == "defausse") AND ($carte == "carte35") AND ($def->getColonne39() == false)){$sql4 = $def->setColonne39('carte35');} else if (($cote == "defausse") AND ($carte == "carte35") AND ($def->getColonne310() == false)){$sql4 = $def->setColonne310('carte35');} else
        if (($cote == "defausse") AND ($carte == "carte35") AND ($def->getColonne311() == false)){$sql4 = $def->setColonne311('carte35');} else if (($cote == "defausse") AND ($carte == "carte35") AND ($def->getColonne312() == false)){$sql4 = $def->setColonne312('carte35');} else
        if (($cote == "defausse") AND ($carte == "carte36") AND ($def->getColonne31() == false)){$sql4 = $def->setColonne31('carte36');} else if (($cote == "defausse") AND ($carte == "carte36") AND ($def->getColonne32() == false)){$sql4 = $def->setColonne32('carte36');} else
        if (($cote == "defausse") AND ($carte == "carte36") AND ($def->getColonne33() == false)){$sql4 = $def->setColonne33('carte36');} else if (($cote == "defausse") AND ($carte == "carte36") AND ($def->getColonne34() == false)){$sql4 = $def->setColonne34('carte36');} else
        if (($cote == "defausse") AND ($carte == "carte36") AND ($def->getColonne35() == false)){$sql4 = $def->setColonne35('carte36');} else if (($cote == "defausse") AND ($carte == "carte36") AND ($def->getColonne36() == false)){$sql4 = $def->setColonne36('carte36');} else
        if (($cote == "defausse") AND ($carte == "carte36") AND ($def->getColonne37() == false)){$sql4 = $def->setColonne37('carte36');} else if (($cote == "defausse") AND ($carte == "carte36") AND ($def->getColonne38() == false)){$sql4 = $def->setColonne38('carte36');} else
        if (($cote == "defausse") AND ($carte == "carte36") AND ($def->getColonne39() == false)){$sql4 = $def->setColonne39('carte36');} else if (($cote == "defausse") AND ($carte == "carte36") AND ($def->getColonne310() == false)){$sql4 = $def->setColonne310('carte36');} else
        if (($cote == "defausse") AND ($carte == "carte36") AND ($def->getColonne311() == false)){$sql4 = $def->setColonne311('carte36');} else if (($cote == "defausse") AND ($carte == "carte36") AND ($def->getColonne312() == false)){$sql4 = $def->setColonne312('carte36');} else
        if (($cote == "defausse") AND ($carte == "carte37") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte37');} else if (($cote == "defausse") AND ($carte == "carte37") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte37');} else
        if (($cote == "defausse") AND ($carte == "carte37") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte37');} else if (($cote == "defausse") AND ($carte == "carte37") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte37');} else
        if (($cote == "defausse") AND ($carte == "carte37") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte37');} else if (($cote == "defausse") AND ($carte == "carte37") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte37');} else
        if (($cote == "defausse") AND ($carte == "carte37") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte37');} else if (($cote == "defausse") AND ($carte == "carte37") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte37');} else
        if (($cote == "defausse") AND ($carte == "carte37") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte37');} else if (($cote == "defausse") AND ($carte == "carte37") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte37');} else
        if (($cote == "defausse") AND ($carte == "carte37") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte37');} else if (($cote == "defausse") AND ($carte == "carte37") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte37');} else
        if (($cote == "defausse") AND ($carte == "carte38") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte38');} else if (($cote == "defausse") AND ($carte == "carte38") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte38');} else
        if (($cote == "defausse") AND ($carte == "carte38") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte38');} else if (($cote == "defausse") AND ($carte == "carte38") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte38');} else
        if (($cote == "defausse") AND ($carte == "carte38") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte38');} else if (($cote == "defausse") AND ($carte == "carte38") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte38');} else
        if (($cote == "defausse") AND ($carte == "carte38") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte38');} else if (($cote == "defausse") AND ($carte == "carte38") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte38');} else
        if (($cote == "defausse") AND ($carte == "carte38") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte38');} else if (($cote == "defausse") AND ($carte == "carte38") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte38');} else
        if (($cote == "defausse") AND ($carte == "carte38") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte38');} else if (($cote == "defausse") AND ($carte == "carte38") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte38');} else
        if (($cote == "defausse") AND ($carte == "carte39") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte39');} else if (($cote == "defausse") AND ($carte == "carte39") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte39');} else
        if (($cote == "defausse") AND ($carte == "carte39") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte39');} else if (($cote == "defausse") AND ($carte == "carte39") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte39');} else
        if (($cote == "defausse") AND ($carte == "carte39") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte39');} else if (($cote == "defausse") AND ($carte == "carte39") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte39');} else
        if (($cote == "defausse") AND ($carte == "carte39") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte39');} else if (($cote == "defausse") AND ($carte == "carte39") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte39');} else
        if (($cote == "defausse") AND ($carte == "carte39") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte39');} else if (($cote == "defausse") AND ($carte == "carte39") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte39');} else
        if (($cote == "defausse") AND ($carte == "carte39") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte39');} else if (($cote == "defausse") AND ($carte == "carte39") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte39');} else
        if (($cote == "defausse") AND ($carte == "carte40") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte40');} else if (($cote == "defausse") AND ($carte == "carte40") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte40');} else
        if (($cote == "defausse") AND ($carte == "carte40") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte40');} else if (($cote == "defausse") AND ($carte == "carte40") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte40');} else
        if (($cote == "defausse") AND ($carte == "carte40") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte40');} else if (($cote == "defausse") AND ($carte == "carte40") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte40');} else
        if (($cote == "defausse") AND ($carte == "carte40") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte40');} else if (($cote == "defausse") AND ($carte == "carte40") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte40');} else
        if (($cote == "defausse") AND ($carte == "carte40") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte40');} else if (($cote == "defausse") AND ($carte == "carte40") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte40');} else
        if (($cote == "defausse") AND ($carte == "carte40") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte40');} else if (($cote == "defausse") AND ($carte == "carte40") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte40');} else
        if (($cote == "defausse") AND ($carte == "carte41") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte41');} else if (($cote == "defausse") AND ($carte == "carte41") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte41');} else
        if (($cote == "defausse") AND ($carte == "carte41") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte41');} else if (($cote == "defausse") AND ($carte == "carte41") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte41');} else
        if (($cote == "defausse") AND ($carte == "carte41") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte41');} else if (($cote == "defausse") AND ($carte == "carte41") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte41');} else
        if (($cote == "defausse") AND ($carte == "carte41") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte41');} else if (($cote == "defausse") AND ($carte == "carte41") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte41');} else
        if (($cote == "defausse") AND ($carte == "carte41") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte41');} else if (($cote == "defausse") AND ($carte == "carte41") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte41');} else
        if (($cote == "defausse") AND ($carte == "carte41") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte41');} else if (($cote == "defausse") AND ($carte == "carte41") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte41');} else
        if (($cote == "defausse") AND ($carte == "carte42") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte42');} else if (($cote == "defausse") AND ($carte == "carte42") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte42');} else
        if (($cote == "defausse") AND ($carte == "carte42") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte42');} else if (($cote == "defausse") AND ($carte == "carte42") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte42');} else
        if (($cote == "defausse") AND ($carte == "carte42") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte42');} else if (($cote == "defausse") AND ($carte == "carte42") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte42');} else
        if (($cote == "defausse") AND ($carte == "carte42") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte42');} else if (($cote == "defausse") AND ($carte == "carte42") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte42');} else
        if (($cote == "defausse") AND ($carte == "carte42") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte42');} else if (($cote == "defausse") AND ($carte == "carte42") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte42');} else
        if (($cote == "defausse") AND ($carte == "carte42") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte42');} else if (($cote == "defausse") AND ($carte == "carte42") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte42');} else
        if (($cote == "defausse") AND ($carte == "carte43") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte43');} else if (($cote == "defausse") AND ($carte == "carte43") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte43');} else
        if (($cote == "defausse") AND ($carte == "carte43") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte43');} else if (($cote == "defausse") AND ($carte == "carte43") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte43');} else
        if (($cote == "defausse") AND ($carte == "carte43") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte43');} else if (($cote == "defausse") AND ($carte == "carte43") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte43');} else
        if (($cote == "defausse") AND ($carte == "carte43") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte43');} else if (($cote == "defausse") AND ($carte == "carte43") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte43');} else
        if (($cote == "defausse") AND ($carte == "carte43") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte43');} else if (($cote == "defausse") AND ($carte == "carte43") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte43');} else
        if (($cote == "defausse") AND ($carte == "carte43") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte43');} else if (($cote == "defausse") AND ($carte == "carte43") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte43');} else
        if (($cote == "defausse") AND ($carte == "carte44") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte44');} else if (($cote == "defausse") AND ($carte == "carte44") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte44');} else
        if (($cote == "defausse") AND ($carte == "carte44") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte44');} else if (($cote == "defausse") AND ($carte == "carte44") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte44');} else
        if (($cote == "defausse") AND ($carte == "carte44") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte44');} else if (($cote == "defausse") AND ($carte == "carte44") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte44');} else
        if (($cote == "defausse") AND ($carte == "carte44") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte44');} else if (($cote == "defausse") AND ($carte == "carte44") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte44');} else
        if (($cote == "defausse") AND ($carte == "carte44") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte44');} else if (($cote == "defausse") AND ($carte == "carte44") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte44');} else
        if (($cote == "defausse") AND ($carte == "carte44") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte44');} else if (($cote == "defausse") AND ($carte == "carte44") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte44');} else
        if (($cote == "defausse") AND ($carte == "carte45") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte45');} else if (($cote == "defausse") AND ($carte == "carte45") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte45');} else
        if (($cote == "defausse") AND ($carte == "carte45") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte45');} else if (($cote == "defausse") AND ($carte == "carte45") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte45');} else
        if (($cote == "defausse") AND ($carte == "carte45") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte45');} else if (($cote == "defausse") AND ($carte == "carte45") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte45');} else
        if (($cote == "defausse") AND ($carte == "carte45") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte45');} else if (($cote == "defausse") AND ($carte == "carte45") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte45');} else
        if (($cote == "defausse") AND ($carte == "carte45") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte45');} else if (($cote == "defausse") AND ($carte == "carte45") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte45');} else
        if (($cote == "defausse") AND ($carte == "carte45") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte45');} else if (($cote == "defausse") AND ($carte == "carte45") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte45');} else
        if (($cote == "defausse") AND ($carte == "carte46") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte46');} else if (($cote == "defausse") AND ($carte == "carte46") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte46');} else
        if (($cote == "defausse") AND ($carte == "carte46") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte46');} else if (($cote == "defausse") AND ($carte == "carte46") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte46');} else
        if (($cote == "defausse") AND ($carte == "carte46") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte46');} else if (($cote == "defausse") AND ($carte == "carte46") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte46');} else
        if (($cote == "defausse") AND ($carte == "carte46") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte46');} else if (($cote == "defausse") AND ($carte == "carte46") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte46');} else
        if (($cote == "defausse") AND ($carte == "carte46") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte46');} else if (($cote == "defausse") AND ($carte == "carte46") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte46');} else
        if (($cote == "defausse") AND ($carte == "carte46") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte46');} else if (($cote == "defausse") AND ($carte == "carte46") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte46');} else
        if (($cote == "defausse") AND ($carte == "carte47") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte47');} else if (($cote == "defausse") AND ($carte == "carte47") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte47');} else
        if (($cote == "defausse") AND ($carte == "carte47") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte47');} else if (($cote == "defausse") AND ($carte == "carte47") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte47');} else
        if (($cote == "defausse") AND ($carte == "carte47") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte47');} else if (($cote == "defausse") AND ($carte == "carte47") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte47');} else
        if (($cote == "defausse") AND ($carte == "carte47") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte47');} else if (($cote == "defausse") AND ($carte == "carte47") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte47');} else
        if (($cote == "defausse") AND ($carte == "carte47") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte47');} else if (($cote == "defausse") AND ($carte == "carte47") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte47');} else
        if (($cote == "defausse") AND ($carte == "carte47") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte47');} else if (($cote == "defausse") AND ($carte == "carte47") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte47');} else
        if (($cote == "defausse") AND ($carte == "carte48") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte48');} else if (($cote == "defausse") AND ($carte == "carte48") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte48');} else
        if (($cote == "defausse") AND ($carte == "carte48") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte48');} else if (($cote == "defausse") AND ($carte == "carte48") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte48');} else
        if (($cote == "defausse") AND ($carte == "carte48") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte48');} else if (($cote == "defausse") AND ($carte == "carte48") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte48');} else
        if (($cote == "defausse") AND ($carte == "carte48") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte48');} else if (($cote == "defausse") AND ($carte == "carte48") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte48');} else
        if (($cote == "defausse") AND ($carte == "carte48") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte48');} else if (($cote == "defausse") AND ($carte == "carte48") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte48');} else
        if (($cote == "defausse") AND ($carte == "carte48") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte48');} else if (($cote == "defausse") AND ($carte == "carte48") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte48');} else
        if (($cote == "defausse") AND ($carte == "carte49") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte49');} else if (($cote == "defausse") AND ($carte == "carte49") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte49');} else
        if (($cote == "defausse") AND ($carte == "carte49") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte49');} else if (($cote == "defausse") AND ($carte == "carte49") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte49');} else
        if (($cote == "defausse") AND ($carte == "carte49") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte49');} else if (($cote == "defausse") AND ($carte == "carte49") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte49');} else
        if (($cote == "defausse") AND ($carte == "carte49") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte49');} else if (($cote == "defausse") AND ($carte == "carte49") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte49');} else
        if (($cote == "defausse") AND ($carte == "carte49") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte49');} else if (($cote == "defausse") AND ($carte == "carte49") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte49');} else
        if (($cote == "defausse") AND ($carte == "carte49") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte49');} else if (($cote == "defausse") AND ($carte == "carte49") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte49');} else
        if (($cote == "defausse") AND ($carte == "carte50") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte50');} else if (($cote == "defausse") AND ($carte == "carte50") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte50');} else
        if (($cote == "defausse") AND ($carte == "carte50") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte50');} else if (($cote == "defausse") AND ($carte == "carte50") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte50');} else
        if (($cote == "defausse") AND ($carte == "carte50") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte50');} else if (($cote == "defausse") AND ($carte == "carte50") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte50');} else
        if (($cote == "defausse") AND ($carte == "carte50") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte50');} else if (($cote == "defausse") AND ($carte == "carte50") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte50');} else
        if (($cote == "defausse") AND ($carte == "carte50") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte50');} else if (($cote == "defausse") AND ($carte == "carte50") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte50');} else
        if (($cote == "defausse") AND ($carte == "carte50") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte50');} else if (($cote == "defausse") AND ($carte == "carte50") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte50');} else
        if (($cote == "defausse") AND ($carte == "carte51") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte51');} else if (($cote == "defausse") AND ($carte == "carte51") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte51');} else
        if (($cote == "defausse") AND ($carte == "carte51") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte51');} else if (($cote == "defausse") AND ($carte == "carte51") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte51');} else
        if (($cote == "defausse") AND ($carte == "carte51") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte51');} else if (($cote == "defausse") AND ($carte == "carte51") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte51');} else
        if (($cote == "defausse") AND ($carte == "carte51") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte51');} else if (($cote == "defausse") AND ($carte == "carte51") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte51');} else
        if (($cote == "defausse") AND ($carte == "carte51") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte51');} else if (($cote == "defausse") AND ($carte == "carte51") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte51');} else
        if (($cote == "defausse") AND ($carte == "carte51") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte51');} else if (($cote == "defausse") AND ($carte == "carte51") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte51');} else
        if (($cote == "defausse") AND ($carte == "carte52") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte52');} else if (($cote == "defausse") AND ($carte == "carte52") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte52');} else
        if (($cote == "defausse") AND ($carte == "carte52") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte52');} else if (($cote == "defausse") AND ($carte == "carte52") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte52');} else
        if (($cote == "defausse") AND ($carte == "carte52") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte52');} else if (($cote == "defausse") AND ($carte == "carte52") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte52');} else
        if (($cote == "defausse") AND ($carte == "carte52") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte52');} else if (($cote == "defausse") AND ($carte == "carte52") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte52');} else
        if (($cote == "defausse") AND ($carte == "carte52") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte52');} else if (($cote == "defausse") AND ($carte == "carte52") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte52');} else
        if (($cote == "defausse") AND ($carte == "carte52") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte52');} else if (($cote == "defausse") AND ($carte == "carte52") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte52');} else
        if (($cote == "defausse") AND ($carte == "carte53") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte53');} else if (($cote == "defausse") AND ($carte == "carte53") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte53');} else
        if (($cote == "defausse") AND ($carte == "carte53") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte53');} else if (($cote == "defausse") AND ($carte == "carte53") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte53');} else
        if (($cote == "defausse") AND ($carte == "carte53") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte53');} else if (($cote == "defausse") AND ($carte == "carte53") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte53');} else
        if (($cote == "defausse") AND ($carte == "carte53") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte53');} else if (($cote == "defausse") AND ($carte == "carte53") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte53');} else
        if (($cote == "defausse") AND ($carte == "carte53") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte53');} else if (($cote == "defausse") AND ($carte == "carte53") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte53');} else
        if (($cote == "defausse") AND ($carte == "carte53") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte53');} else if (($cote == "defausse") AND ($carte == "carte53") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte53');} else
        if (($cote == "defausse") AND ($carte == "carte54") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte54');} else if (($cote == "defausse") AND ($carte == "carte54") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte54');} else
        if (($cote == "defausse") AND ($carte == "carte54") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte54');} else if (($cote == "defausse") AND ($carte == "carte54") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte54');} else
        if (($cote == "defausse") AND ($carte == "carte54") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte54');} else if (($cote == "defausse") AND ($carte == "carte54") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte54');} else
        if (($cote == "defausse") AND ($carte == "carte54") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte54');} else if (($cote == "defausse") AND ($carte == "carte54") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte54');} else
        if (($cote == "defausse") AND ($carte == "carte54") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte54');} else if (($cote == "defausse") AND ($carte == "carte54") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte54');} else
        if (($cote == "defausse") AND ($carte == "carte54") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte54');} else if (($cote == "defausse") AND ($carte == "carte54") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte54');} else
        if (($cote == "defausse") AND ($carte == "carte55") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte55');} else if (($cote == "defausse") AND ($carte == "carte55") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte55');} else
        if (($cote == "defausse") AND ($carte == "carte55") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte55');} else if (($cote == "defausse") AND ($carte == "carte55") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte55');} else
        if (($cote == "defausse") AND ($carte == "carte55") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte55');} else if (($cote == "defausse") AND ($carte == "carte55") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte55');} else
        if (($cote == "defausse") AND ($carte == "carte55") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte55');} else if (($cote == "defausse") AND ($carte == "carte55") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte55');} else
        if (($cote == "defausse") AND ($carte == "carte55") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte55');} else if (($cote == "defausse") AND ($carte == "carte55") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte55');} else
        if (($cote == "defausse") AND ($carte == "carte55") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte55');} else if (($cote == "defausse") AND ($carte == "carte55") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte55');} else
        if (($cote == "defausse") AND ($carte == "carte56") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte56');} else if (($cote == "defausse") AND ($carte == "carte56") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte56');} else
        if (($cote == "defausse") AND ($carte == "carte56") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte56');} else if (($cote == "defausse") AND ($carte == "carte56") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte56');} else
        if (($cote == "defausse") AND ($carte == "carte56") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte56');} else if (($cote == "defausse") AND ($carte == "carte56") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte56');} else
        if (($cote == "defausse") AND ($carte == "carte56") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte56');} else if (($cote == "defausse") AND ($carte == "carte56") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte56');} else
        if (($cote == "defausse") AND ($carte == "carte56") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte56');} else if (($cote == "defausse") AND ($carte == "carte56") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte56');} else
        if (($cote == "defausse") AND ($carte == "carte56") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte56');} else if (($cote == "defausse") AND ($carte == "carte56") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte56');} else
        if (($cote == "defausse") AND ($carte == "carte57") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte57');} else if (($cote == "defausse") AND ($carte == "carte57") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte57');} else
        if (($cote == "defausse") AND ($carte == "carte57") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte57');} else if (($cote == "defausse") AND ($carte == "carte57") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte57');} else
        if (($cote == "defausse") AND ($carte == "carte57") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte57');} else if (($cote == "defausse") AND ($carte == "carte57") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte57');} else
        if (($cote == "defausse") AND ($carte == "carte57") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte57');} else if (($cote == "defausse") AND ($carte == "carte57") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte57');} else
        if (($cote == "defausse") AND ($carte == "carte57") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte57');} else if (($cote == "defausse") AND ($carte == "carte57") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte57');} else
        if (($cote == "defausse") AND ($carte == "carte57") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte57');} else if (($cote == "defausse") AND ($carte == "carte57") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte57');} else
        if (($cote == "defausse") AND ($carte == "carte58") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte58');} else if (($cote == "defausse") AND ($carte == "carte58") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte58');} else
        if (($cote == "defausse") AND ($carte == "carte58") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte58');} else if (($cote == "defausse") AND ($carte == "carte58") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte58');} else
        if (($cote == "defausse") AND ($carte == "carte58") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte58');} else if (($cote == "defausse") AND ($carte == "carte58") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte58');} else
        if (($cote == "defausse") AND ($carte == "carte58") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte58');} else if (($cote == "defausse") AND ($carte == "carte58") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte58');} else
        if (($cote == "defausse") AND ($carte == "carte58") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte58');} else if (($cote == "defausse") AND ($carte == "carte58") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte58');} else
        if (($cote == "defausse") AND ($carte == "carte58") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte58');} else if (($cote == "defausse") AND ($carte == "carte58") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte58');} else
        if (($cote == "defausse") AND ($carte == "carte59") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte59');} else if (($cote == "defausse") AND ($carte == "carte59") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte59');} else
        if (($cote == "defausse") AND ($carte == "carte59") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte59');} else if (($cote == "defausse") AND ($carte == "carte59") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte59');} else
        if (($cote == "defausse") AND ($carte == "carte59") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte59');} else if (($cote == "defausse") AND ($carte == "carte59") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte59');} else
        if (($cote == "defausse") AND ($carte == "carte59") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte59');} else if (($cote == "defausse") AND ($carte == "carte59") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte59');} else
        if (($cote == "defausse") AND ($carte == "carte59") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte59');} else if (($cote == "defausse") AND ($carte == "carte59") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte59');} else
        if (($cote == "defausse") AND ($carte == "carte59") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte59');} else if (($cote == "defausse") AND ($carte == "carte59") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte59');} else
        if (($cote == "defausse") AND ($carte == "carte60") AND ($def->getColonne41() == false)){$sql4 = $def->setColonne41('carte60');} else if (($cote == "defausse") AND ($carte == "carte60") AND ($def->getColonne42() == false)){$sql4 = $def->setColonne42('carte60');} else
        if (($cote == "defausse") AND ($carte == "carte60") AND ($def->getColonne43() == false)){$sql4 = $def->setColonne43('carte60');} else if (($cote == "defausse") AND ($carte == "carte60") AND ($def->getColonne44() == false)){$sql4 = $def->setColonne44('carte60');} else
        if (($cote == "defausse") AND ($carte == "carte60") AND ($def->getColonne45() == false)){$sql4 = $def->setColonne45('carte60');} else if (($cote == "defausse") AND ($carte == "carte60") AND ($def->getColonne46() == false)){$sql4 = $def->setColonne46('carte60');} else
        if (($cote == "defausse") AND ($carte == "carte60") AND ($def->getColonne47() == false)){$sql4 = $def->setColonne47('carte60');} else if (($cote == "defausse") AND ($carte == "carte60") AND ($def->getColonne48() == false)){$sql4 = $def->setColonne48('carte60');} else
        if (($cote == "defausse") AND ($carte == "carte60") AND ($def->getColonne49() == false)){$sql4 = $def->setColonne49('carte60');} else if (($cote == "defausse") AND ($carte == "carte60") AND ($def->getColonne410() == false)){$sql4 = $def->setColonne410('carte60');} else
        if (($cote == "defausse") AND ($carte == "carte60") AND ($def->getColonne411() == false)){$sql4 = $def->setColonne411('carte60');} else if (($cote == "defausse") AND ($carte == "carte60") AND ($def->getColonne412() == false)){$sql4 = $def->setColonne412('carte60');}




        $cart = ucfirst($carte);
        var_dump($cart);



        if (($a_qui_le_tour == $utilisateur) AND (isset($sql1))) {   
             $em1 = $this->getDoctrine()->getManager();
             $em1->persist($sql1);
             $em1->flush();
        }else{
            return $this->redirect("http://89.234.182.92/jeu/salon/".$id);
        }


        if ($a_qui_le_tour == $utilisateur) {
            $sql = $salons->setNumeroTour($nv_tour);
             $em = $this->getDoctrine()->getManager();
             $em->persist($sql);
             $em->flush();
        }


            return $this->redirect("http://89.234.182.92/jeu/salon/".$id);

        if ($a_qui_le_tour != $utilisateur) {
            return $this->redirect("http://89.234.182.92/jeu/salon/".$id);
        }
    }

    /**
     * @Route("/piocher/{id}/{origine}")
     */
    public function piocherAction($id, $origine){


        $utilisateur = $this->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $this->getDoctrine()->getEntityManager();
        $position = $repository->getRepository("FIRSTJeuBundle:Position_Salon")->findOneBy(array('idSalon' => $id));
        $salons = $repository->getRepository("FIRSTJeuBundle:Salon_joueur")->findOneBy(array('salonId' => $id));
        $pre = $this->getDoctrine()->getRepository('FIRSTJeuBundle:Position_Salon')->createQueryBuilder('e')->select('e')->where('e.idSalon = '.$id)->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $key = array_rand($pre[0]);
        $value = $pre[0][$key];
        while ($value!=null){
            $key = array_rand($pre[0]);
            $value = $pre[0][$key];
        }

        var_dump($value);

        if ($key == "carte1") {$sql2 = $position->setCarte1($origine);}      if ($key == "carte2") {$sql2 = $position->setCarte2($origine);}      if ($key == "carte3") {$sql2 = $position->setCarte3($origine);}      if ($key == "carte4") {$sql2 = $position->setCarte4($origine);}
        if ($key == "carte5") {$sql2 = $position->setCarte5($origine);}      if ($key == "carte6") {$sql2 = $position->setCarte6($origine);}      if ($key == "carte7") {$sql2 = $position->setCarte7($origine);}      if ($key == "carte8") {$sql2 = $position->setCarte8($origine);}
        if ($key == "carte9") {$sql2 = $position->setCarte9($origine);}      if ($key == "carte10") {$sql2 = $position->setCarte10($origine);}      if ($key == "carte11") {$sql2 = $position->setCarte11($origine);}      if ($key == "carte12") {$sql2 = $position->setCarte12($origine);}
        if ($key == "carte13") {$sql2 = $position->setCarte13($origine);}      if ($key == "carte14") {$sql2 = $position->setCarte14($origine);}      if ($key == "carte15") {$sql2 = $position->setCarte15($origine);}      if ($key == "carte16") {$sql2 = $position->setCarte16($origine);}
        if ($key == "carte17") {$sql2 = $position->setCarte17($origine);}      if ($key == "carte18") {$sql2 = $position->setCarte18($origine);}      if ($key == "carte19") {$sql2 = $position->setCarte19($origine);}      if ($key == "carte20") {$sql2 = $position->setCarte20($origine);}
        if ($key == "carte21") {$sql2 = $position->setCarte21($origine);}      if ($key == "carte22") {$sql2 = $position->setCarte22($origine);}      if ($key == "carte23") {$sql2 = $position->setCarte23($origine);}      if ($key == "carte24") {$sql2 = $position->setCarte24($origine);}
        if ($key == "carte25") {$sql2 = $position->setCarte25($origine);}      if ($key == "carte25") {$sql2 = $position->setCarte25($origine);}      if ($key == "carte26") {$sql2 = $position->setCarte26($origine);}      if ($key == "carte27") {$sql2 = $position->setCarte27($origine);}
        if ($key == "carte28") {$sql2 = $position->setCarte28($origine);}      if ($key == "carte29") {$sql2 = $position->setCarte29($origine);}      if ($key == "carte30") {$sql2 = $position->setCarte30($origine);}      if ($key == "carte31") {$sql2 = $position->setCarte31($origine);}
        if ($key == "carte32") {$sql2 = $position->setCarte32($origine);}      if ($key == "carte33") {$sql2 = $position->setCarte33($origine);}      if ($key == "carte34") {$sql2 = $position->setCarte34($origine);}      if ($key == "carte35") {$sql2 = $position->setCarte35($origine);}
        if ($key == "carte36") {$sql2 = $position->setCarte36($origine);}      if ($key == "carte37") {$sql2 = $position->setCarte37($origine);}      if ($key == "carte38") {$sql2 = $position->setCarte38($origine);}      if ($key == "carte39") {$sql2 = $position->setCarte39($origine);}
        if ($key == "carte40") {$sql2 = $position->setCarte40($origine);}      if ($key == "carte41") {$sql2 = $position->setCarte41($origine);}      if ($key == "carte42") {$sql2 = $position->setCarte42($origine);}      if ($key == "carte43") {$sql2 = $position->setCarte43($origine);}
        if ($key == "carte44") {$sql2 = $position->setCarte44($origine);}      if ($key == "carte45") {$sql2 = $position->setCarte45($origine);}      if ($key == "carte46") {$sql2 = $position->setCarte46($origine);}      if ($key == "carte47") {$sql2 = $position->setCarte47($origine);}
        if ($key == "carte48") {$sql2 = $position->setCarte48($origine);}      if ($key == "carte49") {$sql2 = $position->setCarte49($origine);}      if ($key == "carte50") {$sql2 = $position->setCarte50($origine);}      if ($key == "carte51") {$sql2 = $position->setCarte51($origine);}
        if ($key == "carte52") {$sql2 = $position->setCarte52($origine);}      if ($key == "carte53") {$sql2 = $position->setCarte53($origine);}      if ($key == "carte54") {$sql2 = $position->setCarte54($origine);}      if ($key == "carte55") {$sql2 = $position->setCarte55($origine);}
        if ($key == "carte56") {$sql2 = $position->setCarte56($origine);}      if ($key == "carte57") {$sql2 = $position->setCarte57($origine);}      if ($key == "carte58") {$sql2 = $position->setCarte58($origine);}      if ($key == "carte59") {$sql2 = $position->setCarte59($origine);}
        if ($key == "carte60") {$sql2 = $position->setCarte60($origine);}


        $joueur1 = $salons->getJoueur1();
        $joueur2 = $salons->getJoueur2();
        $tour = $salons->getNumeroTour();

        if ($tour %2 == 1){ $a_qui_le_tour = $salons->getJoueur1();} 
        if ($tour %2 == 0){ $a_qui_le_tour = $salons->getJoueur2();}


             $em2 = $this->getDoctrine()->getManager();
             $em2->persist($sql2);
             $em2->flush();

        return $this->redirect("http://89.234.182.92/jeu/salon/".$id);
    }

    /**
     * @Route("/piocher/def/{id}/{colonne}")
     */
    public function piocherdefAction($id, $colonne){


        $pre = $this->getDoctrine()->getRepository('FIRSTJeuBundle:Position_Salon')->createQueryBuilder('e')->select('e')->where('e.idSalon = '.$id)->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $carte_pioche_1_1 = array_search('carte_pioche_1_1', $pre[0]);        $carte_pioche_1_2 = array_search('carte_pioche_1_2', $pre[0]);
        $carte_pioche_1_3 = array_search('carte_pioche_1_3', $pre[0]);        $carte_pioche_1_4 = array_search('carte_pioche_1_4', $pre[0]);
        $carte_pioche_1_5 = array_search('carte_pioche_1_5', $pre[0]);        $carte_pioche_1_6 = array_search('carte_pioche_1_6', $pre[0]);
        $carte_pioche_1_7 = array_search('carte_pioche_1_7', $pre[0]);        $carte_pioche_1_8 = array_search('carte_pioche_1_8', $pre[0]);

        $carte_pioche_2_1 = array_search('carte_pioche_2_1', $pre[0]);        $carte_pioche_2_2 = array_search('carte_pioche_2_2', $pre[0]);
        $carte_pioche_2_3 = array_search('carte_pioche_2_3', $pre[0]);        $carte_pioche_2_4 = array_search('carte_pioche_2_4', $pre[0]);
        $carte_pioche_2_5 = array_search('carte_pioche_2_5', $pre[0]);        $carte_pioche_2_6 = array_search('carte_pioche_2_6', $pre[0]);
        $carte_pioche_2_7 = array_search('carte_pioche_2_7', $pre[0]);        $carte_pioche_2_8 = array_search('carte_pioche_2_8', $pre[0]);


        if (($carte_pioche_2_8 != false) AND ($carte_pioche_2_7 != false) AND ($carte_pioche_2_6 != false) AND ($carte_pioche_2_5 != false) AND ($carte_pioche_2_4 != false) AND ($carte_pioche_2_3 != false) AND ($carte_pioche_2_2 != false) AND ($carte_pioche_2_1 != false) AND ($carte_pioche_1_1 != false) AND ($carte_pioche_1_2 != false) AND ($carte_pioche_1_3 != false) AND ($carte_pioche_1_4 != false) AND ($carte_pioche_1_5 != false) AND ($carte_pioche_1_6 != false) AND ($carte_pioche_1_7 != false) AND ($carte_pioche_1_8 != false)) {
            return $this->redirect("http://89.234.182.92/jeu/salon/".$id);
        }




        $utilisateur = $this->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $this->getDoctrine()->getEntityManager();
        $position = $repository->getRepository("FIRSTJeuBundle:Position_Salon")->findOneBy(array('idSalon' => $id));
        $salons = $repository->getRepository("FIRSTJeuBundle:Salon_joueur")->findOneBy(array('salonId' => $id));
        $def = $repository->getRepository("FIRSTJeuBundle:Defausse")->findOneBy(array('salid' => $id));

        if (($def->getColonne112() != false) AND ($colonne == "colonne1")){$col = $def->getColonne112();}elseif (($def->getColonne111() != false) AND ($colonne == "colonne1")){$col = $def->getColonne111();}elseif (($def->getColonne110() != false) AND ($colonne == "colonne1")){$col = $def->getColonne110();}elseif (($def->getColonne19() != false) AND ($colonne == "colonne1")){$col = $def->getColonne19();}
        elseif (($def->getColonne18() != false) AND ($colonne == "colonne1")){$col = $def->getColonne18();}elseif (($def->getColonne17() != false) AND ($colonne == "colonne1")){$col = $def->getColonne17();}elseif (($def->getColonne16() != false) AND ($colonne == "colonne1")){$col = $def->getColonne16();}elseif (($def->getColonne15() != false) AND ($colonne == "colonne1")){$col = $def->getColonne15();}
        elseif (($def->getColonne14() != false) AND ($colonne == "colonne1")){$col = $def->getColonne14();}elseif (($def->getColonne13() != false) AND ($colonne == "colonne1")){$col = $def->getColonne13();}elseif (($def->getColonne12() != false) AND ($colonne == "colonne1")){$col = $def->getColonne12();}elseif (($def->getColonne11() != false) AND ($colonne == "colonne1")){$col = $def->getColonne11();}

        if (($def->getColonne212() != false) AND ($colonne == "colonne2")){$col = $def->getColonne212();}elseif (($def->getColonne211() != false) AND ($colonne == "colonne2")){$col = $def->getColonne211();}elseif (($def->getColonne210() != false) AND ($colonne == "colonne2")){$col = $def->getColonne210();}elseif (($def->getColonne29() != false) AND ($colonne == "colonne2")){$col = $def->getColonne29();}
        elseif (($def->getColonne28() != false) AND ($colonne == "colonne2")){$col = $def->getColonne28();}elseif (($def->getColonne27() != false) AND ($colonne == "colonne2")){$col = $def->getColonne27();}elseif (($def->getColonne26() != false) AND ($colonne == "colonne2")){$col = $def->getColonne26();}elseif (($def->getColonne25() != false) AND ($colonne == "colonne2")){$col = $def->getColonne25();}
        elseif (($def->getColonne24() != false) AND ($colonne == "colonne2")){$col = $def->getColonne24();}elseif (($def->getColonne23() != false) AND ($colonne == "colonne2")){$col = $def->getColonne23();}elseif (($def->getColonne22() != false) AND ($colonne == "colonne2")){$col = $def->getColonne22();}elseif (($def->getColonne21() != false) AND ($colonne == "colonne2")){$col = $def->getColonne21();}

        if (($def->getColonne312() != false) AND ($colonne == "colonne3")){$col = $def->getColonne312();}elseif (($def->getColonne311() != false) AND ($colonne == "colonne3")){$col = $def->getColonne311();}elseif (($def->getColonne310() != false) AND ($colonne == "colonne3")){$col = $def->getColonne310();}elseif (($def->getColonne39() != false) AND ($colonne == "colonne3")){$col = $def->getColonne39();}
        elseif (($def->getColonne38() != false) AND ($colonne == "colonne3")){$col = $def->getColonne38();}elseif (($def->getColonne37() != false) AND ($colonne == "colonne3")){$col = $def->getColonne37();}elseif (($def->getColonne36() != false) AND ($colonne == "colonne3")){$col = $def->getColonne36();}elseif (($def->getColonne35() != false) AND ($colonne == "colonne3")){$col = $def->getColonne35();}
        elseif (($def->getColonne34() != false) AND ($colonne == "colonne3")){$col = $def->getColonne34();}elseif (($def->getColonne33() != false) AND ($colonne == "colonne3")){$col = $def->getColonne33();}elseif (($def->getColonne32() != false) AND ($colonne == "colonne3")){$col = $def->getColonne32();}elseif (($def->getColonne31() != false) AND ($colonne == "colonne3")){$col = $def->getColonne31();}

        if (($def->getColonne412() != false) AND ($colonne == "colonne4")){$col = $def->getColonne412();}elseif (($def->getColonne411() != false) AND ($colonne == "colonne4")){$col = $def->getColonne411();}elseif (($def->getColonne410() != false) AND ($colonne == "colonne4")){$col = $def->getColonne410();}elseif (($def->getColonne49() != false) AND ($colonne == "colonne4")){$col = $def->getColonne49();}
        elseif (($def->getColonne48() != false) AND ($colonne == "colonne4")){$col = $def->getColonne48();}elseif (($def->getColonne47() != false) AND ($colonne == "colonne4")){$col = $def->getColonne47();}elseif (($def->getColonne46() != false) AND ($colonne == "colonne4")){$col = $def->getColonne46();}elseif (($def->getColonne45() != false) AND ($colonne == "colonne4")){$col = $def->getColonne45();}
        elseif (($def->getColonne44() != false) AND ($colonne == "colonne4")){$col = $def->getColonne44();}elseif (($def->getColonne43() != false) AND ($colonne == "colonne4")){$col = $def->getColonne43();}elseif (($def->getColonne42() != false) AND ($colonne == "colonne4")){$col = $def->getColonne42();}elseif (($def->getColonne41() != false) AND ($colonne == "colonne4")){$col = $def->getColonne41();}

        if (($def->getColonne512() != false) AND ($colonne == "colonne5")){$col = $def->getColonne512();}elseif (($def->getColonne511() != false) AND ($colonne == "colonne5")){$col = $def->getColonne511();}elseif (($def->getColonne510() != false) AND ($colonne == "colonne5")){$col = $def->getColonne510();}elseif (($def->getColonne59() != false) AND ($colonne == "colonne5")){$col = $def->getColonne59();}
        elseif (($def->getColonne58() != false) AND ($colonne == "colonne5")){$col = $def->getColonne58();}elseif (($def->getColonne57() != false) AND ($colonne == "colonne5")){$col = $def->getColonne57();}elseif (($def->getColonne56() != false) AND ($colonne == "colonne5")){$col = $def->getColonne56();}elseif (($def->getColonne55() != false) AND ($colonne == "colonne5")){$col = $def->getColonne55();}
        elseif (($def->getColonne54() != false) AND ($colonne == "colonne5")){$col = $def->getColonne54();}elseif (($def->getColonne53() != false) AND ($colonne == "colonne5")){$col = $def->getColonne53();}elseif (($def->getColonne52() != false) AND ($colonne == "colonne5")){$col = $def->getColonne52();}elseif (($def->getColonne51() != false) AND ($colonne == "colonne5")){$col = $def->getColonne51();}

        
        $pre = $this->getDoctrine()->getRepository('FIRSTJeuBundle:Position_Salon')->createQueryBuilder('e')->select('e')->where('e.idSalon = '.$id)->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $carte_pioche_1_1 = array_search('carte_pioche_1_1', $pre[0]);        $carte_pioche_1_2 = array_search('carte_pioche_1_2', $pre[0]);
        $carte_pioche_1_3 = array_search('carte_pioche_1_3', $pre[0]);        $carte_pioche_1_4 = array_search('carte_pioche_1_4', $pre[0]);
        $carte_pioche_1_5 = array_search('carte_pioche_1_5', $pre[0]);        $carte_pioche_1_6 = array_search('carte_pioche_1_6', $pre[0]);
        $carte_pioche_1_7 = array_search('carte_pioche_1_7', $pre[0]);        $carte_pioche_1_8 = array_search('carte_pioche_1_8', $pre[0]);

        $carte_pioche_2_1 = array_search('carte_pioche_2_1', $pre[0]);        $carte_pioche_2_2 = array_search('carte_pioche_2_2', $pre[0]);
        $carte_pioche_2_3 = array_search('carte_pioche_2_3', $pre[0]);        $carte_pioche_2_4 = array_search('carte_pioche_2_4', $pre[0]);
        $carte_pioche_2_5 = array_search('carte_pioche_2_5', $pre[0]);        $carte_pioche_2_6 = array_search('carte_pioche_2_6', $pre[0]);
        $carte_pioche_2_7 = array_search('carte_pioche_2_7', $pre[0]);        $carte_pioche_2_8 = array_search('carte_pioche_2_8', $pre[0]);

        if ($carte_pioche_1_1 == false){$aremp1 = "carte_pioche_1_1";}elseif ($carte_pioche_1_2 == false){$aremp1 = "carte_pioche_1_2";}elseif ($carte_pioche_1_3 == false){$aremp2 = "carte_pioche_1_3";}elseif ($carte_pioche_1_4 == false){$aremp1 = "carte_pioche_1_4";}
        elseif ($carte_pioche_1_5 == false){$aremp1 = "carte_pioche_1_5";}elseif ($carte_pioche_1_6 == false){$aremp1 = "carte_pioche_1_6";}elseif ($carte_pioche_1_7 == false){$aremp1 = "carte_pioche_1_7";}elseif ($carte_pioche_1_8 == false){$aremp1 = "carte_pioche_1_8";}
        elseif (!isset($aremp1)){$aremp1 = false;}

        if ($carte_pioche_2_1 == false){$aremp2 = "carte_pioche_2_1";}elseif ($carte_pioche_2_2 == false){$aremp2 = "carte_pioche_2_2";}elseif ($carte_pioche_2_3 == false){$aremp2 = "carte_pioche_2_3";}elseif ($carte_pioche_2_4 == false){$aremp2 = "carte_pioche_2_4";}
        elseif ($carte_pioche_2_5 == false){$aremp2 = "carte_pioche_2_5";}elseif ($carte_pioche_2_6 == false){$aremp2 = "carte_pioche_2_6";}elseif ($carte_pioche_2_7 == false){$aremp2 = "carte_pioche_2_7";}elseif ($carte_pioche_2_8 == false){$aremp2 = "carte_pioche_2_8";}
        elseif (!isset($aremp2)){$aremp2 = false;}

        $pre2 = $this->getDoctrine()->getRepository('FIRSTJeuBundle:Defausse')->createQueryBuilder('e')->select('e')->where('e.salid = '.$id)->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $a1 = array_search($col, $pre2[0]);

        $co = ucfirst($col);
        $c = ucfirst($a1);
        $combi = "set".$co;
        $combi3 = "set".$c;

        $joueur1 = $salons->getJoueur1();
        $joueur2 = $salons->getJoueur2();
        $tour = $salons->getNumeroTour();

        if ($tour %2 == 1){ $a_qui_le_tour = $salons->getJoueur1();} 
        if ($tour %2 == 0){ $a_qui_le_tour = $salons->getJoueur2();}

        $test2 = $def->$combi3(NULL);
            $em3 = $this->getDoctrine()->getManager();
            $em3->persist($test2);
            $em3->flush();

        if (($a_qui_le_tour == $utilisateur) AND ($utilisateur == $joueur2)) { 
            $test = $position->$combi($aremp2);
            $em2 = $this->getDoctrine()->getManager();
            $em2->persist($test);
            $em2->flush();
            return $this->redirect("http://89.234.182.92/jeu/salon/".$id);
        }else if (($a_qui_le_tour == $utilisateur) AND ($utilisateur == $joueur1)) { 
            $test = $position->$combi($aremp1);
            $em2 = $this->getDoctrine()->getManager();
            $em2->persist($test);
            $em2->flush();
            return $this->redirect("http://89.234.182.92/jeu/salon/".$id);
        }
    }
}