<?php

// src/Projet2/PlatformBundle/Controller/AdvertController.php

namespace Projet2\PlatformBundle\Controller;

use Projet2\PlatformBundle\Entity\Competition;
use Projet2\PlatformBundle\Entity\Juge;
use Projet2\PlatformBundle\Entity\Notation;
use Projet2\PlatformBundle\Entity\Participation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
  public function indexAction()
  {
/*
      $listCompetition = $this->getDoctrine()    // Récupère le service Doctrine
      ->getManager()  // Récupère l'EntityManager
      ->getRepository('Projet2PlatformBundle:Competition') // Récupère le repository
      ->findAll();    // Récupère toutes les entités
      return $this->render('Projet2PlatformBundle:Advert:index.html.twig', array(
          'listlistCompetition' => $listCompetition
      ));
*/
	$listAdverts = array
	(
      array
      (
        'title'   => 'Compétition 1',
        'id'      => 1,
        'author'  => 'Juge-Arbitre',
        'content' => 'La compétition a commencé à ....',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Compétition 2',
        'id'      => 2,
        'author'  => 'Juge-Arbitre',
        'content' => 'La compétition a commencé à ....',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Compétition 3',
        'id'      => 3,
        'author'  => 'Juge-Arbitre',
        'content' => 'La compétition a commencé à ....',
        'date'    => new \Datetime())
    );

    return $this->render('Projet2PlatformBundle:Advert:index.html.twig', array(
      'listAdverts' => $listAdverts
    ));
    }

  public function nageuseAction()
  {
      $listNageuse = $this->getDoctrine()    // Récupère le service Doctrine
      ->getManager()  // Récupère l'EntityManager
      ->getRepository('Projet2PlatformBundle:Nageuse') // Récupère le repository
      ->findAll();    // Récupère toutes les entités
      return $this->render('Projet2PlatformBundle:Advert:nageuse.html.twig', array(
          'listNageuse' => $listNageuse
      ));
  }

  public function viewAction($id)
  {
    $advert = array(
      'title'   => 'Compétition',
      'id'      => $id,
      'author'  => 'Juge-Arbitre',
      'content' => 'La compétition a commencé à ....',
      'date'    => new \Datetime()
    );

    return $this->render('Projet2PlatformBundle:Advert:view.html.twig', array(
      'advert' => $advert
    ));
  }

  public function menuAction()
  {
    $listAdverts = array(
      array('id' => 1, 'title' => 'Compétition 1'),
      array('id' => 2, 'title' => 'Compétition 2'),
      array('id' => 3, 'title' => 'Compétition 3')
    );

    return $this->render('Projet2PlatformBundle:Advert:menu.html.twig', array(
      'listAdverts' => $listAdverts
    ));
  }
  
  public function jugeAction()
  {
      return $this->render('Projet2PlatformBundle:Advert:juges.html.twig');
  }
  
  public function competitionAction()
  {
      return $this->render('Projet2PlatformBundle:Advert:competitions.html.twig');
  }
  
  public function administrationAction()
  {
      return $this->render('Projet2PlatformBundle:Advert:administration.html.twig');
  }

  public function connection_jugeAction($id, Request $request)
  {
      $session = $request->getSession();
      $jugeid = explode("-", $id);
      $session->set('jugeid', $jugeid[1] );

      $juges = array(
      'title'   => "Juge-$id",
      'id'      => $id
    );
      return $this->render('Projet2PlatformBundle:Advert:connection_juge.html.twig', array(
      'juges' => $juges
      ));

  }

  public function choixcompetitionAction($id, Request $request)
  {
        $session = $request->getSession();
        $jugeArbitreId = $session->get('jugeArbitreId');


        $competition = array(
            'title'   => "Compétition-$id",
            'id'      => $id
        );
        return $this->render('Projet2PlatformBundle:Advert:choixcompetition.html.twig', array(
            'competitions' => $competition
        ));
  }

  public function connection_juge_arbitreAction($id, Request $request)
  {
        $session = $request->getSession();
        $jugeArbitreId = explode("-", $id);
        $session->set('jugeArbitreId', $jugeArbitreId[2] );

        $juge_arbitre = array(
            'title'   => "Juge-arbitre$id",
            'id'      => $id
        );
        return $this->render('Projet2PlatformBundle:Advert:connection_juge_arbitre.html.twig', array(
            'juge_arbitre' => $juge_arbitre
        ));
  }

  public  function notationAction(Request $request)
  {
        $note = $_POST['note'];
        $commentaire = $_POST['commentaire'];

        if( isset($_POST['penalite']))
        {
            $penalite = $_POST['penalite'];
            return $this->render('Projet2PlatformBundle:Advert:notation.html.twig', array(
                'note' => $note,
                'commentaire' => $commentaire,
                'penalite' => $penalite
            ));
        }
        else
        {
            return $this->render('Projet2PlatformBundle:Advert:notation.html.twig', array(
                'note' => $note,
                'commentaire' => $commentaire
            ));
        }
/*
        $notation = new Notation();
        $idparticipation = new Participation();
        $idjuge = new Juge();
        $notation->setnote($note);
        $notation->setidparticipation($idparticipation);
        $notation->setidjuge($idjuge);

        $em =$this->getDoctrine()->getManager();
        $em->persist($notation);
        $em->persist($idparticipation);
        $em->persist($idjuge);
        $em->flush();
*/
  }

  public  function resultatsAction()
  {
        return $this->render('Projet2PlatformBundle:Advert:resultats.html.twig');
  }

  public  function competitionarbitreAction($id)
  {
        $competition = array(
            'title'   => "Compétition-$id",
            'id'      => $id
        );
        return $this->render('Projet2PlatformBundle:Advert:competitionarbitre.html.twig', array(
            'competitions' => $competition
        ));
  }
}