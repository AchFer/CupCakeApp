<?php

namespace PI\AppelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PI\AppelBundle\Entity\appeldoffre;
use PI\AppelBundle\Form\archiveType;


class archiveController extends Controller
{

    public function ArchiveAction(Request $request){

        $appel= new appeldoffre();
        $Form=$this->createForm(archiveType::class,$appel);
        $Form->handleRequest($request);
        if($Form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($appel);
            $em->flush();
//return $this->redirectToRoute('_affiche');
        }

        return $this->render('PIAppelBundle:Archive:archive.html.twig',array('f'=>$Form->createView()));
    }


}
